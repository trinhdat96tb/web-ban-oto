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
    </head>

    <body>
        <?php require_once('header.php'); ?>
        <div class="container">        
            <div>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="../images/CR-V.jpg" style="width:100%">
                        
                    </div>

                    <div class="mySlides fade">
                        <img src="../images/HAY_9524.jpg" style="width:100%">
                     
                    </div>

                    <div class="mySlides fade">
                        <img src="../images/honda-crv-hires-59.jpg" style="width:100%">

                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) { slideIndex = 1 }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 2000);
                    }
                </script>
            </div>
            <h3 class="border">SPOTLIGHT</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/spotlight/sunny.jpg">
                        <h4>SUNNY</h4>
                    </a>
                    <h5>NISSAN'S BEST SELLING GLOBAL SEDAN</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/spotlight/navara.jpg">
                        <h4>NAVARA</h4>
                    </a>
                    <h5>TOUGH.SMART</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/spotlight/x-trail.jpg">
                        <h4>X-TRAIL</h4>
                    </a>
                    <h5>INNOVATIVE PREMIUM CROSSOVER</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/spotlight/urvan.jpg">
                        <h4>URVAN</h4>
                    </a>
                    <h5>DELIVERS WITH STYLE</h5>
                    <hr />
                </div>
            </div>
            <h3 class="border">LATEST</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/latest/contest2017.jpg">
                        <h4>SUNNY</h4>
                    </a>
                    <h5>NISSAN BUY & WIN CONTEST 2017</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/latest/award2017.jpg">
                        <h4>NAVARA</h4>
                    </a>
                    <h5>NISSAN SUNNY NOMINATED FOR VIETNAM CAR OF THE YEAR AWARD 2017</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/latest/myanma.jpg">
                        <h4>X-TRAIL</h4>
                    </a>
                    <h5>NISSAN LAUNCHES THE ICONIC NEW SUNNY IN VIETNAM</h5>
                    <hr />
                </div>
                <div class="col-sm-3">
                    <a href="#">
                        <img src="../images/latest/theall.jpg">
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
                            FB NISSAN VIETNAM
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <img style="width:50px; height:50px" src="../images/youtube.jpg" />
                            NISSAN NEWSROOM
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