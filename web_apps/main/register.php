<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "layout/head.php" ?>
    <title>Fisherman's Friend | Register</title>
</head>

<body>

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
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="active">
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Register</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <!--<form name="sentMessage" id="contactForm" action="createAccount.php" method="post" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" required data-validation-required-message="Please enter your Username.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your Password.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Retype Password</label>
                            <input type="password" class="form-control" id="password_re" required data-validation-required-message="Please retype your Password.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div id="success"></div>
                    <input type="submit" class="btn btn-primary">Send Message</button>
                </form> -->
                <form id="regForm" action="createAccount.php" method="post">
					<table>
						<tr>
							<td>Choose your username</td>
							<td><input name="username"></td>
						</tr>
						<tr>
							<td>Choose your password</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td>Input password again</td>
							<td><input type="password" name="passwordVerify"></td>
						</tr>
						<tr>
							<td>Input your e-mail</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td><input type="submit" value="Sign Up"></td>
						</tr>
					</table>
				</form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
