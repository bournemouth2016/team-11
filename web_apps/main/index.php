<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fisherman's Friend | Home</title>
    <?php include "layout/head.php" ?>
</head>

<body>
    <?php include "layout/nav.php" ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('https://c8.staticflickr.com/4/3102/4595285351_c7babc7838_z.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Register your Boat</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://previews.123rf.com/images/ioqs/ioqs1104/ioqs110400003/9326365-Wreck-of-a-wooden-boat-agrounded-in-the-harbour-Stock-Photo-boat.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Report Incidents</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.pwfd.com/wordpress/wp-content/uploads/2011/06/RescueBoat.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Help other Fishermen</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Fisherman's Friend
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Register Boats</h4>
                    </div>
                    <div class="panel-body">
                        <p>If you are a boat owner, you can register your boats here. </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-exclamation"></i> MRCC</h4>
                    </div>
                    <div class="panel-body">
                        <p>Are you working at the Maritime Rescue Co-ordination Centre? Here you can manage alarms and see various statistics.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-star"></i> RNLI</h4>
                    </div>
                    <div class="panel-body">
                        <p>Enjoy quick and easy access to all the data gathered so far through our users' trips and incidents.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-flag"></i> Captains &amp; Rescuers</h4>
                    </div>
                    <div class="panel-body">
                        <p>You can create an account here, and then use the app for increased accessibility while on the go.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
