<!-- BEGIN HEADER -->

<?php
session_start();

include "../../../koneksi/koneksi.php";
?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <!-- Title -->
        <title>Dosen | Gamer Institute</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Input Nilai">
        <meta name="author" content="Farid Evan">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="../../../assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="../../../assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../assets/css/responsive.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <div id="header" style="background-position: 50% 0%; <br />
<b>Notice</b>:  Undefined variable: full_page in <b> on line <b>46</b><br />
" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="?module=home" title="">
                            <img src="../img/logo-dosen.gif" alt="Logo" />
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
               <!-- Top Menu -->
                <div id="hornav" class="row text-light">
                    <div class="col-md-12">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="../index.php" class="fa-home active">Home</a>
                                </li>
                                <li>
                                    <span class="fa-clipboard ">Nilai</span>
                                    <ul>
                                        <li>
                                            <a href="?module=add_nilai">Masukan Nilai</a>
                                        </li>
                                        <li>
                                            <a href="?module=list_nilai">Lihat Nilai</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="?module=list_mahasiswa" class="fa-frown-o ">List Mahasiswa</a>
                                </li>
                                <li>
                                    <a href="../../../koneksi/logout.php" class="fa-times-circle-o " id="logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content">
            <div class="container background-white">
                <div class="row margin-vert-40">
                    <!-- Begin Sidebar Menu -->
                    <div class="col-md-3">
                        <ul class="list-group sidebar-nav" id="sidebar-nav">
                            <!-- Nilai -->
                            <li class="list-group-item list-toggle">
                                <a class="accordion-toggle" href="#collapse-components" data-toggle="collapse">Nilai</a>
                                <ul id="collapse-components" class="collapse">
                                    <li>
                                        <a href="?module=add_nilai">
                                            <i class="fa-clipboard "></i>Masukan Nilai</a>
                                    </li>
                                    <li>
                                        <a href="?module=list_nilai">
                                            <i class="fa-clipboard "></i>Lihat Nilai</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Nilai -->
                            <!-- List Mahasiswa -->
                            <li class="list-group-item">
                                <a href="?module=list_mahasiswa">List Mahasiswa</a>
                            </li>
                            <!-- End List Mahasiswa -->
                        </ul>
                    </div>
                    <!-- End Sidebar Menu -->
                    <div class="col-md-9">
                        <h2>Dosen Content</h2>
                        <!-- Carousel - Admin Content -->
                        <div id="carousel-example-1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../img/slide-dosen1.jpg">
                                </div>
                                <div class="item">
                                    <img src="../img/slide-dosen2.jpg">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-1" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <!-- End Carousel - Admin Content  -->
                        <!-- Content -->
                            <hr>
                            <?php 
                                if(isset($_GET['module']))
                                    include "$_GET[module].php";
                                else
                                    include "home.php";
                            ?>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <!-- Footer -->
        <div id="footer" class="background-dark text-light">
            <div class="container no-padding">
                <div class="row">
                    <!-- Footer Menu -->
                    <div id="footermenu" class="col-md-8">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a href="../index.php" target="_blank">Home</a>
                            </li>
                            <li>
                                <a href="?module=list_mahasiswa" target="_blank">List Mahasiswa</a>
                            </li>
                            <li>
                                <a href="?module=home" target="_blank">Management Nilai</a>
                            </li>
                            <li>
                                <a href="../../koneksi/logout.php" target="_blank">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Footer Menu -->
                    <!-- Copyright -->
                    <div id="copyright" class="col-md-4">
                        <p class="pull-right">&copy; 2017 Gamer Institute</p>
                    </div>
                    <!-- End Copyright -->
                </div>
            </div>
        </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="../../../assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="../../../assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="../../../assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="../../../assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="../../../assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Stellar Parallax -->
            <script type="text/javascript" src="../../../assets/js/jquery.stellar.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="../../../assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="../../../assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="../../../assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER ===