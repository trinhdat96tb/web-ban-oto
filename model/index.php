<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/slideshow.css" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .spoitelight div.col-sm-3 {
                padding-left:5px !important;
                padding-right:5px !important;
            }
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 70%;
                margin: auto;
            }
            .front{
                color: gray;
            }
            .front1{
                color: black;
                font-size: 15px;
            }
            .carousel div.carousel-caption {
                position: static;
            }
            .dot{
                background: rgba(0,0,0,0.5) !important;
            }
        </style>
    </head>

    <body>
        <?php require_once('header.php'); ?>
        <div class="container">        
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:20px">
                <!-- Indicators -->
                <ol class="carousel-indicators dot">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../images/slide/Navara-slider.jpg" alt="NAVARA" width="460" height="345">
                        <div class="carousel-caption carousel">
                            <h1 class ="front">NAVARA</h1>
                            <p class = "front1">TOUGHT.SMART </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../images/slide/xtrail.jpg" alt="X-TRAIL" width="460" height="345">
                        <div class="carousel-caption">
                            <h1 class ="front">X-TRAIL</h1>
                            <p class = "front1">INNOVATIVE PREMIUM CROSSOVER</p>
                        </div>
                    </div>
                
                    <div class="item">
                        <img src="../images/slide/new-sunny-slider.jpg" alt="SUNNY" width="460" height="345">
                        <div class="carousel-caption">
                            <h1 class ="front">SUNNY</h1>
                            <p class = "front1">NISSAN'S BEST SELLING GLOBAL SEDAN</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../images/slide/altima-slider.jpg" alt="ALTIMA" width="460" height="345">
                        <div class="carousel-caption">
                            <h1 class ="front">ALTIMA</h1>
                            <p class = "front1">REDEFIND YOUR STATURE</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../images/slide/urvan.jpg" alt="URVAN" width="460" height="345">
                        <div class="carousel-caption">
                            <h1 class ="front">URVAN</h1>
                            <p class = "front1">DELIVERS WITH STYLE</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../images/slide/civilian-slider.jpg" alt="CIVILIAN" width="460" height="345">
                        <div class="carousel-caption">
                            <h1 class ="front">CIVILIAN</h1>
                            <p class = "front1">YOUR COMPANY'S BEST CHOISE</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h3 class="border">SPOTLIGHT</h3>
            <div class="row spoitelight">
                <div class="col-sm-3">
                    <div>
                        <a href="sunny.php">
                            <img class="img-responsive" src="../images/spotlight/sunny.jpg">
                        </a>
                    </div>
                    <div>
                        <h4><a href="sunny.php">SUNNY</a></h4>
                        <h5>NISSAN'S BEST SELLING GLOBAL SEDAN</h5>
                    </div>
                    
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/spotlight/navara.jpg">
                    </a>
                    <h4><a href="#">NAVARA</a></h4>
                    <h5>TOUGH.SMART</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/spotlight/x-trail.jpg">
                        <h4>X-TRAIL</h4>
                    </a>
                    <h5>INNOVATIVE PREMIUM CROSSOVER</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/spotlight/urvan.jpg">
                        <h4>URVAN</h4>
                    </a>
                    <h5>DELIVERS WITH STYLE</h5>
                    <hr />
                </div>
            </div>
            <h3 class="border">LATEST</h3>
            <div class="row spoitelight">
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/latest/contest2017.jpg">
                        <h4>SUNNY</h4>
                    </a>
                    <h5>NISSAN BUY & WIN CONTEST 2017</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/latest/award2017.jpg">
                        <h4>NAVARA</h4>
                    </a>
                    <h5>NISSAN SUNNY NOMINATED FOR VIETNAM CAR OF THE YEAR AWARD 2017</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/latest/myanma.jpg">
                        <h4>X-TRAIL</h4>
                    </a>
                    <h5>NISSAN LAUNCHES THE ICONIC NEW SUNNY IN VIETNAM</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img class="img-responsive" src="../images/latest/theall.jpg">
                        <h4>URVAN</h4>
                    </a>
                    <h5>THE ALL-NEW NISSAN NP300 NEW IN VIETNAM</h5>
                    <hr />
                </div>
            </div>
        </div>
        <div style="background:#c1c1c1">
            <div class="container">
                <div class="row social">
                    <div class="col-sm-3">
                        <a href="https://www.facebook.com/profile.php?id=100006310662045">
                            <img style="width:50px; height:50px" src="../images/facebook.jpg" />
                            <p>FB NISSAN VIETNAM</p>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <img style="width:50px; height:50px" src="../images/youtube.jpg" />
                            <p>NISSAN NEWSROOM/<p>
                        </a>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
        <div style="background: white; height: 50px"></div>
        <?php require_once('footer.php');?>
    </body>

</html>