<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNLI | Manage Users</title>
    <?php include "layout/head.php" ?>
</head>

<body>
    <div id="wrapper">
        <?php include "layout/nav.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    User Tables
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Modify</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        require "../main/database.php";
                        $db = new Database();
                        $result = $db->query("SELECT * FROM users");
                        while ($row = $result->fetch_assoc()) {
                          $html += "<tr class='odd gradeX'>" .
                                   "<td>".$row['userid']."</td><td>".
                                   $row['uname']."</td><td>".$row['email'].
                                   $row['utype']."</td><td><form name='changeType' action='change_type.php' method='post'>" .
                                   "<input type='radio' name='type' value='normal'>" .
                                   "<input type='radio' name='type' value='admin'>" .
                                   "<input type='radio' name='type' value='rnli_staff'>" .
                                   "<input type='radio' name='type' value='mrcc_staff'>" .
                                   "<input type='hidden' name='userId' value='".$row["userId"]."'>" .
                                   "<input type='submit' value='Update type'></form></td></tr>";
                        }
                        echo $html;
                      ?>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include "layout/dashboard_data.php" ?>
    </body>
</html>
