<html>

    <head>
        <title>Đăng ký lái thử</title>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <link rel="stylesheet" type="text/css" href="../css/slideshow.css" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/style_sunny.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .backgr{
                background:#ededed;
                padding:20px;
                margin-left:5px;
                margin-right:5px;
            }
            .detail_height{
                height:40px;
            }
        </style>
    </head>

    <body>
        <?php include("header.php") ?>
        
        <div class="container">
            <br><br>
            <label style="color:black"><h4>REQUEST A TEST DRIVER</h4></label>
            <div class="divide-border"></div>
            <h4 style="color:black">1. SELECT A VEHICAL</h4>
            <!-- code vehical -->
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/request_a_test/alti_1.jpg">
                    <label>
                        <input type="radio" value="Altima">
                        <span>Altima<span>
                    </label>
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/request_a_test/sm-slide2.jpg">
                    <label>
                        <input type="radio" value="Navara">
                        <span>Navara<span>
                    </label>  
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/request_a_test/sm-slide3.jpg">
                    <label>
                        <input type="radio" value="X-Trail">
                        <span>X-Trail<span>
                    </label>
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/request_a_test/sm-slide4.jpg">
                    <label>
                        <input type="radio" value="Civilian">
                        <span>Civilian<span>
                    </label>
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/request_a_test/sm-slide5.jpg">
                    <label>
                        <input type="radio" value="Urvan">
                        <span>Urvan<span>
                    </label>
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/request_a_test/sunny-slide2.jpg">
                    <label>
                        <input type="radio" value="Sunny">
                        <span>Sunny<span>
                    </label>
                </div>
            </div>

            <div class="divide-border"></div>

            <h4 style="color:black">2. SELECT A DEALER</h4>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:50px;">
                    <div class="backgr">
                        <strong style="padding-left:20px; font-size:12px; text-transform:uppercase" >United Diamond Motor</strong>
                        <p></p>
                        <p> 
                            <input name="your_dealer" type="checkbox" value ="No1. 139 Ho Tung Mau - Ha Noi" />
                            <span>
                                No1. 139 Ho Tung Mau - Ha Noi
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:50px;">
                    <div class="backgr">
                        <strong style="padding-left:20px; font-size:12px; text-transform:uppercase" >United Diamond Motor</strong>
                        <p></p>
                        <p> 
                            <input name="your_dealer" type="checkbox" value ="No1. 139 Ho Tung Mau - Ha Noi" />
                            <span>
                                No1. 139 Ho Tung Mau - Ha Noi
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:50px;">
                    <div class="backgr">
                        <strong style="padding-left:20px; font-size:12px; text-transform:uppercase" >United Diamond Motor</strong>
                        <p></p>
                        <p> 
                            <input name="your_dealer" type="checkbox" value ="No1. 139 Ho Tung Mau - Ha Noi" />
                            <span>
                                No1. 139 Ho Tung Mau - Ha Noi
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:50px;">
                    <div class="backgr">
                        <strong style="padding-left:20px; font-size:12px; text-transform:uppercase" >United Diamond Motor</strong>
                        <p></p>
                        <p> 
                            <input name="your_dealer" type="checkbox" value ="No1. 139 Ho Tung Mau - Ha Noi" />
                            <span>
                                No1. 139 Ho Tung Mau - Ha Noi
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="divide-border"></div>

            <h4 style="color:black">3. YOUR DETAILS</h4>
            <p>
                Fields marked (
                <span style="color:#ff0000; font-size:12px; ">*</span>
                ) are mandatory.
            </p>
            <div class="row">
                <div class="col-sm-4 box-form">
                    <p>
                        Title<span style="color:#ff0000; font-size:12px; ">*</span>
                        <br>
                        <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required select" aria_invalid="false" aria-required="true">
                            <option value="Please select">Please select</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Other">Other</option>
                        </select>
                    </p>
                    <p>
                        Fullname<span style="color:#ff0000; font-size:12px;">*</span>
                        <br>
                        <input class="detail_height" name="your_fullname" type="text" aria-required="true" size="50" value="">
                    </p>
                    <p>
                        Contact Number<span style="color:#ff0000; font-size:12px;">*</span>
                        <br>
                        <input class="detail_height" name ="your_contact" type="text" aria-required="true" size="50" value="">
                    </p>
                    <p>
                        Contact Time<span style="color:#ff0000; font-size:12px;">*</span><br>
                        <div>
                            <label>
                                <input type="checkbox" value="Anytime">
                                AnyTime
                            </label>
                            <label style="margin-left:18px">
                                <input type="checkbox" value="Morning">
                                Morning
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" value="Afternoon">
                                Afternoon
                            </label>
                            <label style="margin-left:10px">
                                <input type="checkbox" value="Evening">
                                Evening
                            </label>
                        </div>
                    </p>
                    <p>
                        Email<span style="color:#ff0000; font-size:12px;">*</span>
                        <br>
                        <input class="detail_height" name ="your_email" type="text" aria-required="true" size="50" value="">
                    </p>
                    <label>
                        <input type="checkbox" value="I would like to receive latest news and offers from Nissan VietNam">
                        I would like to receive latest news and offers from Nissan VietNam.
                    </label><br>
                    <button type="button" class="btn btn-danger">Submit</button>
                </div>
                <div class="col-sm-4 box-form">
                    <p>
                        Home Address<span style="color:#ff0000; font-size:12px;">*</span>
                        <br>
                        <input class="detail_height" name ="your_homeAddress" type="text" aria-required="true" size="50" value="">
                    </p>
                    <p>
                        TownShip<span style="color:#ff0000; font-size:12px;">*</span>
                        <br>
                        <input class="detail_height" name ="your_township" type="text" aria-required="true" size="50" value="">
                    </p>
                    <p>
                        State/Region<span style="color:#ff0000; font-size:12px; ">*</span>
                        <br>
                        <span class="wpcf7-form-control-wrap your-title">
                            <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required select" aria_invalid="false" aria-required="true">
                                <option value="Please select">Please select</option>
                                <option value="Da Nang">Da Nang</option>
                                <option value="Ha Noi">Ha Noi</option>
                                <option value="TP Ho Chi Minh">TP Ho Chi Minh</option>
                                <option value="Thai Binh">Thai Binh</option>
                                <option value="Hai Phong">Hai Phong</option>
                                <option value="Quang Ninh">Quang Ninh</option>
                                <option value="Nghe An">Nghe An</option>
                                <option value="Hue">Hue</option>
                            </select>
                        </span>
                    </p>
                </div>            
            </div>
        </div>

        <?php include("footer.php") ?>
    </body>

</html>