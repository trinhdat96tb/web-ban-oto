<html>
    <head>
        <title>Liên hệ</title>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <link rel="stylesheet" type="text/css" href="../css/style_sunny.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include("header.php"); ?>

        <div class="container" style="padding-top:120px">
            <h2 style="color:red">LIÊN HỆ</h2>
            <br>
            <div>
                <p style="font-size:17px">THÔNG TIN CỦA BẠN</p>
            </div>
            <br> 
            <div class="form-group margin_contact">
                <p>
                    <label>Họ tên(*)</label>
                    <input id="contact_name" class="field" name="name" required="" style="margin-left:69px">
                </p>
                <p>
                    <label>Email(*)</label>
                    <input id="contact_email" class="field" name="email" required="" style="margin-left:74px">
                </p>
                <p>
                    <label>Điện thoại(*)</label>
                    <input id="contact_phone" class="field" name="phone" required="" style="margin-left:46px">
                </p>
            </div> 
            <br>
            <div>
                <p style="font-size:17px">NỘI DUNG LIÊN HỆ</p>
            </div>
            <div class="form-group margin_contact">
                <p style="vertical-align: middle;">
                    <label style="margin-bottom:10px">Lời nhắn(*)</label>
                    <textarea id="contact_message" type ="hidden" class="field1" name="message"  row ="6" required="" style="margin-left:30px"></textarea>
                </p>
                <button type="button" class="btn btn-danger">GỬI</button>
            </div> 
        </div>

        <?php include("footer.php"); ?>
    </body>
</html>