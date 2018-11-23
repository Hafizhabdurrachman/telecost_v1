<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard  | TELECOST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logo.png">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?php echo base_url();?>User"><img class="main-logo" src="<?php echo base_url();?>assets/img/telecost.jpg" alt="" style="width: 200px;height: 70px;" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url();?>assets/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li >
                            <a href="<?php echo base_url();?>User">
                                   <i class="educate-icon educate-home icon-wrap"></i>
                                   <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>   
                        <li >
                            <a  href="<?php echo base_url();?>Setting">
                                   <i class="fa fa-cogs"></i>
                                   <span class="mini-click-non">Setting Rangkaian</span>
                            </a>
                        </li> 
                        <li >
                            <a  href="<?php echo base_url();?>Rangkaian">
                                   <i class="fa fa-bar-chart edu-graph-down"></i>
                                   <span class="mini-click-non">Rangkaian</span>
                            </a>
                        </li>       
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" style="background-color: #f2f2f2;">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?php echo base_url();?>assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row" style="background-color: #ecba16;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">                      
                                                <li class="nav-item" >
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="<?php echo base_url();?>assets/img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name"><?php echo $_SESSION['nama']; ?></span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('Logout')?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
           
          
               
        <?php echo $contents; ?>
    </div>


        
        <div class="footer-copyright-area" style="background-color: #ecba16;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jquery
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url();?>assets/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/peity/peity-active.js"></script>

</body>

</html>