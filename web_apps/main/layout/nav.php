<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Fisherman's Friend</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
      <?php
        if (!isset($_SESSION)) {
          session_start();
        }
        else {
          if (isset($_SESSION["id"])) {
            $id = $_SESSION["id"];
          }
        }
        if (!isset($id)) {
          echo "<li><form id='loginForm' action='login.php' method='post'><label>User</label><input name='username'><label>Password</label><input type='password' name='password'><input type='submit' value='Log In'></form></li>";
        }
      ?>
      <li>
          <a href="about.php">About</a>
      </li>
                <li>
                    <a href="register.php">Register</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
