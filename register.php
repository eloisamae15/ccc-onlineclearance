<?php
include('config.php');
require_once(ROOT_PATH . "/includes/layout/header.php");
?>
<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<!-- <h3>Register</h3> -->
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                    <div class="logoccc">
                          <img src="img/LOGINLogo.png" style="width: 75%; height: 70%;">
                    </div>
                        <form action="#" id="loginForm">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="firstname" id="firstname" required/>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Middle Name</label>
                                    <input class="form-control" type="text" name="middlename" id="middlename">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="lastname" id="lastname" required/>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" required/>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" name="contact" id="contact">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="password_1" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" name="password_2" class="form-control" required>
                                </div>
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register_btn" class="btn btn-success regbtn">Register</button>
                                <button class="btn btn-default" onclick="location.href='login.php'">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2022. All rights reserved.</p>
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
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html>