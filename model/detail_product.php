<html>
    <head>
        <title>Chi tiết sản phẩm</title>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <link rel="stylesheet" type="text/css" href="../css/accordion.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .hotline{
                border-radius:10px;
                background:#c61633;
                color:white;
                padding:15px;
                text-align:center;
                font-size:18px
            }
            .col-sm-3{
                padding:0 15px 30px;
            }
            .top-main{
                padding-top:120px;
            }
            .video{
                width:100%;
                height:640px;
            }
            .top-slider .item img{
                width:100%;
                height:398px;
            }
            .carousel-inner .item img{
                width:100%;
                height:640px;
            }
            @media screen and (max-width: 800px){
                .top-main{
                    padding-top:50px !important;
                }
                .video{
                    width:100%;
                    height:auto;
                }
                .top-video{
                    padding-top:230px
                }
                .carousel-inner .item img{
                    width:100%;
                    height:260px;
                }
                .outside-slider{
                    width:100%;
                    height:280px;
                }
            }
        </style>
    </head>
    <body>
        <?php include("header.php") ?>
        <div class="wrapper top-main">
            <div class="container">
                <div style="margin-bottom:50px">
                    <div class = "row" style="height:300px">
                        <div class="col-sm-7" style="padding:0 30px 30px">
                            <div id="123" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner top-slider">
                                    <div class="item active">
                                        <img class="img-responsive" src="../images/detail/detail1.jpg" style="height:298px">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="../images/detail/detail2.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="../images/detail/detail3.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="../images/detail/detail4.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="../images/detail/detail5.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="../images/detail/detail6.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="../images/detail/detail7.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <h1 style="font-weight:700">TEANA</h1>
                            <p><strong>Bảo hành 3 năm hoặc 100.000 KM. Tặng phiếu thay dầu và kiểm tra xe miễn phí 1000 KM</strong></p>
                            <p><strong style="color:#c61633; font-weight:700; font-size:20px">Giá KM: 1.195.000.000đ</strong></p>
                            <p style="text-decoration: line-through;"><strong>Giá gốc: 1.234.000.000đ</strong></p>
                            <hr/>
                            <div class="hotline">
                            Gọi hotline tư vấn: 0886 567 096
                            </div>
                            <div style="padding-top: 20px; position: relative; float: right; ">
                                <div class="download-btn pull-left">
                                    <a href="request_a_test_driver.php">
                                        <div class="pull-left btn-txt">
                                            <p style="margin:0 auto; background:#c61633 !important">ĐĂNG KÝ</p>
                                            LÁI THỬ
                                        </div>
                                        <div class="pull-left">
                                            <i class="fa fa-chevron-right fa-4 pull-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                    <div class="top-video">
                        <h3 class="border" style="color:red">VIDEO</h3>
                        <div style="margin:0 auto">
                            <p>
                                <iframe class="video" src="//www.youtube.com/embed/nEeA4tKgFog"></iframe>
                            </p>
                        </div>
                        <h3 class="border" style ="padding-top:20px; color:red">NGOẠI THẤT</h3>
                        <div class="container">       
                            <div>
                                <br>
                                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="img-responsive" src="../images/detail/dt1.jpg">
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive" src="../images/detail/dt2.jpg"> 
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive" src="../images/detail/dt3.jpg"> 
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div><br>

                        <div class="row" style="text-align:center">
                                <div class="col-sm-3" style="background:#f9f9f9">
                                    <img class="img-responsive" src="../images/detail/pc.jpg">
                                    <p style="padding-top:10px"><strong>Phong cách</strong></p>
                                    <p>Sự hài hòa, cân đối trong từng chi tiết thiết kế đem đến sự cao cấp và sang trọng. Đèn pha với dải đèn LED chạy ban ngày. Đèn hậu LED kéo dài từ đuôi xe lên thân xe đem đến sự cao cấp và sang trọng.</p>
                                </div>
                                <div class="col-sm-3" style="background:#f9f9f9">
                                    <img class="img-responsive" src="../images/detail/hs.jpg">
                                    <p style="padding-top:10px"><strong>Hiệu suất</strong></p>
                                    <p>Trải nghiệm lái xe tuyệt vời hơn nhờ sự tăng tốc nhanh và liền mạch khi vượt và nhập làn. TEANA được đánh giá sở hữu khả năng tăng tốc tốt đứng đầu phân khúc với 186 mã lực.</p>
                                </div>
                                <div class="col-sm-3" style="background:#f9f9f9">
                                    <img class="img-responsive" src="../images/detail/at.jpg">
                                    <p style="padding-top:10px"><strong>An toàn</strong></p>
                                    <p>Tính năng an toàn trang bị trên Teana giúp người lái thoái mái hơn khi lái xe. Khi cần gạt nước hoạt động trong thời tiết tối và trời mưa đèn pha trước sẽ tự động bật.</p>
                                </div>
                                <div class="col-sm-3" style="background:#f9f9f9">
                                    <img  class="img-responsive" src="../images/detail/ttd.jpg">
                                    <p style="padding-top:10px"><strong>Tính thực dụng</strong></p>
                                    <p>Teana vượt trội trong việc tiết kiệm nhiên liệu. Hộp số vô cấp điện tử XTRONIC-CVT và Động Cơ 4 xi-lanh thẳng hàng mang lại sức mạnh và tiết kiệm nhiên liệu tốt hơn bao giờ hết.</p>
                                </div>
                            </div>
                        <h3 class="border" style ="padding-top:20px; color:red">NỘI THẤT</h3>
                        <div class="container">       
                            <div>
                                <br>
                                <div id="myCarousel11" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                    <li data-target="#myCarousel11" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel11" data-slide-to="1"></li>
                                    <li data-target="#myCarousel11" data-slide-to="2"></li>
                                    <li data-target="#myCarousel11" data-slide-to="4"></li>
                                    <li data-target="#myCarousel11" data-slide-to="5"></li>
                                    <li data-target="#myCarousel11" data-slide-to="6"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="img-responsive outside-slider" src="../images/detail/nt5.jpg">
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive outside_slider" src="../images/detail/nt1.jpg"> 
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive outside_slider" src="../images/detail/nt2.jpg"> 
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive outside_slider" src="../images/detail/nt3.jpg">
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive outside_slider" src="../images/detail/nt4.jpg"> 
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive outside_slider" src="../images/detail/nt5.jpg"> 
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel11" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel11" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div><br>

                        <div class="row" style="text-align:center">
                            <div class="col-sm-3" style="background:#f9f9f9">
                                <img class="img-responsive" src="../images/detail/pc1.jpg">
                                <p style="padding-top:10px"><strong>Phong cách</strong></p>
                                <p>Thiết kế nội thất sang trọng và đẳng cấp. Chất liệu da cao cấp được ứng dụng cho hàng ghế trước và sau</p>
                            </div>
                            <div class="col-sm-3" style="background:#f9f9f9">
                                <img class="img-responsive" src="../images/detail/tt1.jpg">
                                <p style="padding-top:10px"><strong>Sự thoải mái</strong></p>
                                <p>Teana tối đa sự thoải mái cho người lái và hành khách ngồi phía trước bằng việc áp dụng nghiên cứu của cơ quan hàng không và vũ trụ Hoa Kì (NASA)</p>
                            </div>
                            <div class="col-sm-3" style="background:#f9f9f9">
                                <img class="img-responsive" src="../images/detail/cn1.jpg">
                                <p style="padding-top:10px"><strong>Công nghệ</strong></p>
                                <p>Khoang lái thông minh, đa chức năng như: Hiệu ứng 3D, Màn hình đa thông tin, Cổng giao tiếp USB, MP3, iPod...Với hệ thống 10 loa xung quanh xe đem lại cho bạn cảm giác nghe nhạc tuyệt vời.</p>
                            </div>
                            <div class="col-sm-3" style="background:#f9f9f9">
                                <img  class="img-responsive" src="../images/detail/at1.jpg">
                                <p style="padding-top:10px"><strong>An toàn</strong></p>
                                <p>Teana là mẫu sedan hàng đầu của thương hiệu đến từ Nhật Bản nhận được đánh giá cao nhất lần đầu tiên trong lịch sử ASEAN NCAP.</p>
                            </div>
                        </div>
                    <h3 class="border" style ="padding-top:20px; color:red">THÔNG SỐ KỸ THUẬT</h3>  
                    <button class="accordion toggle">Động cơ</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/1.jpg">
                    </div>
                    <button class="accordion toggle">Hộp số</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/2.jpg">
                    </div>
                    <button class="accordion toggle">Phanh</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/4.jpg">
                    </div>
                    <button class="accordion toggle">Hệ thống treo & Hệ thống lái</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/5.jpg">
                    </div>
                    <button class="accordion toggle">Mức tiêu thụ nhiên liệu</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/6.jpg">
                    </div>
                    <button class="accordion toggle">Mâm & lốp xe</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/7.jpg">
                    </div>
                    <button class="accordion toggle">Kích thước & Trọng lượng & Dung tích</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/8.jpg">
                    </div>
                    <button class="accordion toggle">An toàn & An ninh</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/1.jpg">
                    </div>
                    <button class="accordion toggle">Nội thất</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/1.jpg">
                    </div>
                    <button class="accordion toggle">Ngoại thất</button>
                    <div class="panel">
                        <img class="img-responsive" src="../images/detail/2.jpg">
                    </div>
                    <script>
                        var acc = document.getElementsByClassName("accordion");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                            acc[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var panel = this.nextElementSibling;
                                if (panel.style.display === "block") {
                                    panel.style.display = "none";
                                } else {
                                    panel.style.display = "block";
                                }
                            });
                        }
                        </script>
                    </div>
                </div>
                
                
            </div>
        </div>
        <?php include("footer.php") ?>
    </body>
</html>