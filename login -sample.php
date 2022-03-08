<?php
    include('config.php');
    require_once(ROOT_PATH . 'includes/layout/header.php');
    require_once(ROOT_PATH . 'includes/layout/sidebar.php');
    ?>
 <html class="no-js" lang="en">
<head>
    
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Password meter Start -->
        <div class="password-meter-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline12-list responsive-mg-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Basic Password <span class="password-mt-none">Meter Example</span></h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div id="pwd-container1">
                                    <div class="form-group">
                                        <label for="password1">Password</label>
                                        <input type="password" class="form-control example1" id="password1" placeholder="Password" value="Passwo">
                                    </div>
                                    <div class="form-group mg-b-pass">
                                        <div class="pwstrength_viewport_progress"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline11-list">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>Show <span class="password-mt-none">the</span> password <span class="password-mt-none">strength</span></h1>
                                </div>
                            </div>
                            <div class="sparkline11-graph">
                                <div id="pwd-container2">
                                    <div class="form-group head-strong-password">
                                        <label for="password2">Password</label>
                                        <input type="password" class="form-control example2" id="password2" placeholder="Password" value="Pass">
                                    </div>
                                    <div class="form-group mg-b-pass">
                                        <div class="pwstrength_viewport_verdict text-strong-password"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Interact <span class="password-mt-none">with other</span> inputs</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div id="pwd-container3">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password3">Password</label>
                                        <input type="password" class="form-control example3" id="password3" placeholder="Password">
                                    </div>
                                    <div class="form-group mg-b-pass">
                                        <div class="pwstrength_viewport_progress2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Password meter End-->
        <div class="footer-copyright-area">
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
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- pwstrength JS
		============================================ -->
    <script src="js/password-meter/pwstrength-bootstrap.min.js"></script>
    <script src="js/password-meter/zxcvbn.js"></script>
    <script src="js/password-meter/password-meter-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>