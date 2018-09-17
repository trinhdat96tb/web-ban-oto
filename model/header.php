<html>
    <head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            img{
                    float: right;
                }
               
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }
    
            .navbar {
                overflow: hidden;
            }
    
            .navbar a {
                float: left;
                font-size: 16px;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
    
            .subnav {
                float: left;
                overflow: hidden;
            }
    
            .subnav .subnavbtn {
                font-size: 16px;    
                border: none;
                outline: none;
                color:black;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
            }
    
            .navbar a:hover, .subnav:hover .subnavbtn {
                background-color: red;
            }
    
            .subnav-content {
                display: none;
                position: absolute;
                left: 0;
                background-color: red;
                width: 100%;
                z-index: 1;
            }
    
            .subnav-content a {
                float: left;
                color: white;
                text-decoration: none;
            }
    
            .subnav-content a:hover {
                background-color: #eee;
                color: black;
            }
    
            .subnav:hover .subnav-content {
                display: block;
            }
            .position{
                margin-top: 35px;
            }
        </style>
    </head>
    
    <body>       
        <div style="background:#c1c1c1 ;height:87px">
            <div class="row">
                <div class='col-sm-2'>
                    <img src="../images/logo.jpg" />
                </div>
                <div class="col-sm-7">
                    <div class="navbar position">
                        <a href="#home">Home</a>
                        <div class="subnav">
                            <button class="subnavbtn">New <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                                <a href="#company">Company</a>
                                <a href="#team">Team</a>
                                <a href="#careers">Careers</a>
                            </div>
                        </div>
                        <div class="subnav">
                            <button class="subnavbtn">Used <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                                <a href="#bring">Bring</a>
                                <a href="#deliver">Deliver</a>
                                <a href="#package">Package</a>
                                <a href="#express">Express</a>
                            </div>
                        </div>
                        <div class="subnav">
                            <button class="subnavbtn">Buying <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                                <a href="#bring">Bring</a>
                                <a href="#deliver">Deliver</a>
                                <a href="#package">Package</a>
                                <a href="#express">Express</a>
                            </div>
                        </div>
                        <div class="subnav">
                            <button class="subnavbtn">Owning <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                                <a href="#link1">Link 1</a>
                                <a href="#link2">Link 2</a>
                                <a href="#link3">Link 3</a>
                                <a href="#link4">Link 4</a>
                            </div>
                        </div>
                        <a href="#careers">Careers</a>
                        <a href="#owner">Owner Feedback</a>
                    </div>
                </div>
                <div class='col-sm-3'>
                    <input name="s" title="Search for:" class="search-feild" type="search" placeholder="Search..." value="" style="width:250px; height:30px; margin-top: 40px" />
                </div>
            </div>
        </div>
    </body>
    
</html>