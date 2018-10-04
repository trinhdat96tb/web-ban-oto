<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/slideshow.css" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/style_sunny.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .spoitelight div.col-sm-3 {
                padding-left:5px !important;
                padding-right:5px !important;
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
                background:white;
            }
            .priority{
                position: absolute;
                z-index: 9999;
            }
            
        </style>
    </head>

    <body>
        
        <?php require_once('header.php'); ?>

        <!-- slide -->
        <div style="padding-top:90px">
            <div>        
                <div id="myCarouseltop" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouseltop" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouseltop" data-slide-to="1"></li>
                        <li data-target="#myCarouseltop" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="../images/slide/slide1.jpg" style="width:1920px; height:640px">
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="../images/slide/slide2.jpg" style="width:1920px; height:640px">
                        </div>
                    
                        <div class="item">
                            <img class="img-responsive" src="../images/slide/slide3.jpg" style="width:1920px; height:640px">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarouseltop" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarouseltop" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
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
                    <a href="sunny.php">
                        <img class="img-responsive" src="../images/spotlight/navara.jpg">
                    </a>
                    <h4><a href="sunny.php">NAVARA</a></h4>
                    <h5>TOUGH.SMART</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="sunny.php">
                        <img class="img-responsive" src="../images/spotlight/x-trail.jpg">
                        <h4>X-TRAIL</h4>
                    </a>
                    <h5>INNOVATIVE PREMIUM CROSSOVER</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="sunny.php">
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
                    <a href="sunny.php">
                        <img class="img-responsive" src="../images/latest/contest2017.jpg">
                        <h4>SUNNY</h4>
                    </a>
                    <h5>NISSAN BUY & WIN CONTEST 2017</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="sunny.php">
                        <img class="img-responsive" src="../images/latest/award2017.jpg">
                        <h4>NAVARA</h4>
                    </a>
                    <h5>NISSAN SUNNY NOMINATED FOR VIETNAM CAR OF THE YEAR AWARD 2017</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="sunny.php">
                        <img class="img-responsive" src="../images/latest/myanma.jpg">
                        <h4>X-TRAIL</h4>
                    </a>
                    <h5>NISSAN LAUNCHES THE ICONIC NEW SUNNY IN VIETNAM</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="sunny.php">
                        <img class="img-responsive" src="../images/latest/theall.jpg">
                        <h4>URVAN</h4>
                    </a>
                    <h5>THE ALL-NEW NISSAN NP300 NEW IN VIETNAM</h5>
                    <hr />
                </div>
            </div>
        </div>
        
        <div style="background:#f9f9f9">
            <div class="container">
                <div class="row social">
                    <div class="col-sm-7">
                        <p>
                            <iframe src="//www.youtube.com/embed/nEeA4tKgFog" style="width:590px; height:332px">
                            </iframe>
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <div class="row" style="padding-top:10px">
                            <a href="https://www.facebook.com/nissanvietnam/">
                                <div class="col-sm-2" style="padding-top:10px">
                                    <img style="width:30px; height:30px" src="../images/facebook.jpg" />
                                </div>
                                <div class="col-sm-10">
                                    <h5 style="color:red">NISSAN'S PANPAGE</h5>
                                    <p>Facebook chính thức của Nissan Việt Nam. Dành cho mọi người yêu và quan tâm đến xe hơi và thương hiệu Nissan.</p>
                                </div>
                            </a>
                        </div>
                        <div class="row" style="padding-top:30px">
                            <a href="https://www.youtube.com/user/nissanvietnam">
                                <div class="col-sm-2" style="padding-top:10px">
                                    <img style="width:30px; height:30px" src="../images/youtube.jpg" />
                                </div>
                                <div class="col-sm-10">
                                    <h5 style="color:red">NISSAN VIETNAM'S CHANNEL<h5>
                                    <p>Tìm hiểu thêm về sản phẩm của Nissan Việt Nam qua các video giới thiệu của chúng tôi.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: white; height: 50px"></div>
        <?php require_once('footer.php');?>
    </body>

</html>