<!DOCTYPE html>
<html>

<head>
    <title>demo header</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <header style="position:fixed; width:100%; z-index:9000; background:white">
        <div class="wrapper" style="border-bottom:1px solid #c1c1c1;">
            <div class="container">
                <nav class="navbar navbar-default" style="background:white; border:none; margin:0px">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false" style="margin-right:0px">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" style="padding:0px" href="index.php">
                                <img class="img-responsive logo" src="../images/logo.jpg">
                                <img class="img-responsive logo_mobile" src="../images/logo_mobile.jpg">
                            </a>
                        </div>

                        <div class="search-home">
                            <form role="search" method="get" class="search-form fr clearfix" style="float:right; padding-top:10px; border-bottom:double; margin-bottom:0 !important">
                                <input type="text" placeholder="Tìm kiếm ..." class="search-key" style="width:250px; height:25px;border:none;; padding:5px">
                                <input type="submit" class="search-submit" value="">
                            </form>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav main-menu">
                                <li><a href="products.php" style="color:black">SẢN PHẨM</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false" style="color:black">MUA XE <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="pricelist.php">BẢNG GIÁ XE</a></li>
                                        <li><a href="request_a_test_driver.php">ĐĂNG KÝ LÁI THỬ</a></li>
                                    </ul>
                                </li>
                                <li><a href="dealer.php" style="color:black">ĐẠI LÝ</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false" style="color:black">DỊCH VỤ <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.php">SỬA CHỮA</a></li>
                                        <li><a href="accessary.php">PHỤ TÙNG</a></li>
                                        <li><a href="guarantee.php">BẢO HÀNH</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false" style="color:black">GIỚI THIỆU <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="nissan.php">NISSAN VIETNAM</a></li>
                                        <li><a href="ceo.php">THÔNG ĐIỆP TỪ BAN QUẢN TRỊ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false" style="color:black">CÔNG NGHỆ <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="safety_inno.php">AN TOÀN</a></li>
                                        <li><a href="entertainment_inno.php">GIẢI TRÍ</a></li>
                                        <li><a href="quality_inno.php">CHẤT LƯỢNG</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php" style="color:black">LIÊN HỆ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>