<html>
    <head>
        <title>Phụ tùng</title>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/service.css" />
        <link rel="stylesheet" type="text/css" href="../css/accordion.css" />
        <link rel="stylesheet" type="text/css" href="../css/dealer.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .top-main{
                padding-top:120px;
            }
            .social {
                background: #f9f9f9;
                border-top: 1px solid #e2e2e2;
                border-bottom: 1px solid #e2e2e2;
                padding: 20px;
            }
            @media screen and (max-width: 800px){
                .top-main{
                    padding-top:50px !important;
                }
            }
        </style>
    </head>
    <body>
        <?php include("header.php") ?>
        
        <div class="wapper top-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color:red">PHỤ TÙNG</h2>
                        <h3>Danh Mục Phụ Tùng</h3>
                        <button class="accordion toggle">Dầu động cơ</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/service_pt1.jpg">
                            <img class="img-responsive" width="688" height="856" src="../images/service/service_pt2.jpg">
                        </div>
                        <button class="accordion toggle">Bộ lọc dầu</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/bolocdau.jpg">
                            <img class="img-responsive" width="688" height="856" src="../images/service/bolocdau2.jpg">
                        </div>
                        <button class="accordion toggle">Dây đai dẫn động</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/daydaidandong.jpg">
                            <img class="img-responsive" width="688" height="856" src="../images/service/daydaidandong2.jpg">
                        </div>
                        <button class="accordion toggle">Dung dịch làm mát</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/dungdichlammat.jpg">
                            <img class="img-responsive" width="688" height="856" src="../images/service/dungdichlammat2.jpg">
                        </div>
                        <button class="accordion toggle">Bộ lọc khí(lọc gió động cơ)</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/bolockhi.jpg">
                            <img class="img-responsive" width="688" height="856" src="../images/service/bolockhi2.jpg">
                        </div>
                        <button class="accordion toggle">Dầu hộp số tự động</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/hopsotudong.jpg">
                        </div>
                        <button class="accordion toggle">Ắc quy</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/acquy.jpg">
                        </div>
                        <button class="accordion toggle">Bugi đánh lửa</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/bugi.jpg">
                        </div>
                        <button class="accordion toggle">Má phanh</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/maphanh.jpg">
                        </div>
                        <button class="accordion toggle">Dầu phanh</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/dauphanh.jpg">
                        </div>
                        <button class="accordion toggle">Bộ lọc khí(lọc gió điều hòa)</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/dieuhoa.jpg">
                        </div>
                        <button class="accordion toggle">Lưỡi gạt nước</button>
                        <div class="panel">
                            <img class="img-responsive" width="688" height="856" src="../images/service/gatnuoc.jpg">
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
    
        <br><br>
        <?php include("footer.php") ?>
    </body>
</html>