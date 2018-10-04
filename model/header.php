<html>
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function RedirectHome() {
               window.location="index.php";
            }
            function RedirectProduct() {
               window.location="product.php";
            }
            function RedirectPriceList() {
               window.location="pricelist.php";
            }
            function RedirectDealer() {
               window.location="dealer.php";
            }
            function RedirectContact() {
               window.location="contact.php";
            }
      </script>
    </head>
    
    <body>    
    <header style="position: fixed; z-index: 9000; background: #fff; margin: 0 auto; padding: 0; left: 0; right: 0; border-bottom:2px groove">
        <div class="container clearfix">
        <div class="row">
            <div class="top-header">
                <div class="logo">
                    <a href="index.php">
                        <img class="desktop" src="../images/logo.jpg" alt="Nissan VietNam">
                    </a>
                </div>
                <div class="top-head clearfix">
                    <div style="padding-top:12px">
                        <form role="search" method="get" class="search-form fr clearfix" style="float:right">
                            <input type="text" placeholder="Input key search ..." class="search-key" style="width:250px; height:25px;border:1; border-bottom:double; padding:5px" >
                            <!-- <input type="submit" value="Search"> -->
                            <input type="submit" class="search-submit" value="">
                        </form>
                    </div>
                    <div style="padding-top:26px; margin-left:70px">
                        <nav class="navbar navbar-default" style="margin: 0 auto; margin-left:60px; border:0; background:white">
                            <ul class="nav navbar-nav" style="padding-top:12px">
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold" onClick="RedirectProduct();">SẢN PHẨM
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold">MUA XE
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="pricelist.php">BẢNG GIÁ XE</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="request_a_test_driver.php">ĐĂNG KÝ LÁI THỬ</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold" onClick="RedirectDealer();">ĐẠI LÝ
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold">DỊCH VỤ
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="services.php">SỬA CHỮA</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="accessary.php">PHỤ TÙNG</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="guarantee.php">BẢO HÀNH</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold">GIỚI THIỆU
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="nissan.php">NISSAN VIETNAM</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="ceo.php">THÔNG ĐIỆP TỪ BAN QUẢN TRỊ</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold">CÔNG NGHỆ
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="safety_inno.php">AN TOÀN</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="entertainment_inno.php">GIẢI TRÍ</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="quality_inno.php">CHẤT LƯỢNG</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown col-sm-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="border:none; font-weight:bold" onClick="RedirectContact();">LIÊN HỆ
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </header>
    </body>
    
</html>