<html>

    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <link rel="stylesheet" type="text/css" href="../css/slideshow.css" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
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
        <div class="wrapper top-main">
            <div class="container">
                <h2 style="color:red;font-weight:bold">DOWNLOAD BROCHURE</h2><br>
                <p>Mời bạn điền thông tin vào mẫu dưới đây trước khi tải brochure của Nissan Navara</p><br>
                <h4>THÔNG TIN</h4>
                <div class="box-form row">
                    <div class="col-sm-6">
                        <p>
                            Họ tên <span style="color:#ff0000; font-size:12px;">*</span>
                            <br>
                            <input class="detail_height" name="your_fullname" type="text" aria-required="true" size="50" value="" style="width:540px">
                        </p>
                        <p>
                            Số điện thoại <span style="color:#ff0000; font-size:12px;">*</span>
                            <br>
                            <input class="detail_height" name ="your_contact" type="text" aria-required="true" size="50" value="" style="width:540px">
                        </p>
                        <p>
                            Email <span style="color:#ff0000; font-size:12px;">*</span>
                            <br>
                            <input class="detail_height" name ="your_contact" type="text" aria-required="true" size="50" value="" style="width:540px">
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            Chọn xe <span style="color:#ff0000; font-size:12px;">*</span>
                            <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required select" aria_invalid="false" aria-required="true">
                                <option value="Please select">Please select</option>
                                <option value="SUNNY">SUNNY</option>
                                <option value="NAVARA">NAVARA</option>
                                <option value="TEANA">TEANA</option>
                                <option value="TRAIL">X-TRAIL</option>
                            </select>
                        </p>
                        <p>
                            Đại lý hỗ trợ <span style="color:#ff0000; font-size:12px;">*</span>
                            <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required select" aria_invalid="false" aria-required="true">
                                <option value="Please select">Please select</option>
                                <option value="SUNNY">NISSAN HADONG</option>
                                <option value="NAVARA">NISSAN LONGBIEN</option>
                                <option value="TEANA">NISSAN THANGLONG</option>
                            </select>
                        </p>
                    </div>
                </div>
                <div style="margin-bottom:50px">
                    <p>
                        <button type="button" class="btn btn-danger">Submit</button>
                    </p>
                </div>
            </div>
        </div>
        <?php include("footer.php") ?>
    </body>

</html>