<?php 

if( !session_id() )
{
    session_start();
}

if(@$_SESSION['logged_in'] == true){
    header("location: user/admin/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Gamer Institute</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="barcode/style1.css">
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Qr Code</strong> Scan</h1>
                            <div class="description">
                                <p>
                                    Contact <a href="#"><strong>Admin</strong></a> For Ur Qr Code!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter your QR Code to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div style="display:none" id="result"></div>
                                    <div class="selector" id="webcamimg" onclick="setwebcam()" align="left" ></div>
                                        <div class="selector" id="qrimg" onclick="setimg()" align="right" ></div>
                                            <center id="mainbody"><div id="outdiv"></div></center>
                                                <canvas id="qr-canvas" width="800" height="600"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <div class="social-login-buttons">
                                <a class="btn btn-link-2" href="login.php">
                                    <i class="">Skip</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        
        <script src="barcode/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="barcode/main.js"></script>
        <script type="text/javascript" src="barcode/llqrcode.js"></script>
        <script type="text/javascript" src="barcode/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="barcode/jquery-ui-1.8.21.custom.min.js"></script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script type="text/javascript">load();</script>
    </body>

</html>