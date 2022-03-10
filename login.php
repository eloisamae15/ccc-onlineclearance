<?php
   
    include('config.php');
    require_once('includes/layout/header.php');
    
 ?>
<div class="error-pagewrap1">
		<div class="error-page-int1 ">
			<!--<div class="text-center m-b-md custom-login">
				<h3>WELCOME TO CITY COLLEGE OF CALAPAN</h3>
			</div>-->
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="logoccc">
                          <img src="img/LOGINLogo.png" style="width: 70%; height: 70%; ">
                    </div>
                        <?php echo display_error(); ?>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="Enter your email" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="Password" required="" value="" name="password" id="password" class="form-control">
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										                <input type="checkbox" class="i-checks"/> Show Password</label>
                              <!--  <p class="help-block small">(if this is a private computer)</p>-->
                            </div>
                            <button class="btn btn-success btn-block loginbtn" type="submit" name="login_btn">Login</button>
                            <!--<button class="btn btn-successs btn-block" onclick="location.href='register.php'">Register</button>-->
                           <a href="register.php">Sign up</a>
                        </form>
                       
                    </div>
                    
                </div>
                
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2022. All rights reserved.Hosted by MVSoftech.Inc.</a></p>
      
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