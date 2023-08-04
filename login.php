<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Info Farmic - Organic Food &amp; Eco Farm </title>

		<!-- Favicon -->
		<link rel="icon" type="imges/jpg" sizes="56x56" href="images/logo/lg.png">

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="resource/html5shiv.js"></script>
			<script src="resource/respond.js"></script>
		<![endif]-->
			
	</head>
	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div><!-- /.loader-wrapper -->
            
		    <!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			
	        <?php require 'header.php'?>
			
		    <!-- 
			=============================================
				contact-map-section
			============================================== 
		    -->
		   

			<!-- 
			=============================================
				contact-section
			============================================== 
			-->
			<section class="contact-section">
				<div class="container ">
				    
				    <div class="row">
				      	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				      		<div class="contact-us-section">
				      			<h2>Login Here !..</h2>
				      			<form action="loginprocess.php" class="theme-form-two form-validation" autocomplete="off" method="post">
				      				
				      				<input type="text" placeholder="email id or phone Number" name="txt_email">
				      				<div class="row">
				      					<div class="col-md-12 col-sm-12">
				      						<input type="password" placeholder="Password" name="txt_pass">
				      					</div><!-- /.col -->
				      					
				      				</div><!-- /.row -->
				      				<div class="buttonDiv">
										<input class="hvr-shutter-out-horizontal-two round-border" type="submit" name="submit" value="Login">
								    </div><!-- /buttonDiv -->
								    <p>New User ? <a href="registration.php">Signup First</a></p>
				      			</form> <!-- /.theme-form-two -->

				      			<!--Contact Form Validation Markup -->
								<!-- Contact alert -->
								<div class="alert-wrapper" id="alert-success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
							             	<p>Your message was sent successfully.</p>
							            </div><!-- /.wrapper -->
							        </div>
							    </div> <!-- End of .alert-wrapper -->
							    <div class="alert-wrapper" id="alert-error">
							        <div id="error">
							           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							           	<div class="wrapper">
							               	<p>Sorry!Something Went Wrong.</p>
							            </div><!-- /.wrapper -->
							        </div><!-- /.error -->
							    </div> <!-- End of .alert-wrapper -->
				      		</div><!-- /.contact-us-section -->
				      	</div><!-- /.col -->

				      	
				    </div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.contact-section -->


			<!-- 
			=============================================
			partners section
			==============================================
			-->
			


			<!-- 
			=============================================
				Footer
			============================================== 
			-->
			<footer>
				

				<!-- Bottom Footer -->
		        <div class="bottom-footer">
		        	<div class="container">
		        	    <div class="float_left">  
		        		    <p>Copyright © 2017 <a href="https://themeforest.net/user/designolo/portfolio" class="tran3s p-color" target="_blank"> Farmfresh</a> All Rights Reserved by <a href="https://themeforest.net/user/designolo/portfolio" class="p-color tran3s" target="_blank"> Designolo</a></p>
		        		</div> <!-- /.float-left -->
		        		<div class="float_right">    
		        		    <form action="#"> 
								<input type="text" placeholder="Your email">
								<button class="hvr-shutter-out-horizontal">Subscribe</button>
					        </form>
					    </div> <!-- /.float-right -->
		        	</div> <!-- /.container -->
		        </div> <!-- /.bottom-footer -->
			</footer> <!-- /.End-footer -->

			<!-- Scroll Top Button -->
			<button class="scroll-top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

    	<!-- Js File_________________________________ --> 
		<!-- JS offline library -->
		<script src="js/jquery.2.2.3.min.js"></script>
		<!-- bootstrap js -->
		<script src="resource/bootstrap/js/bootstrap.min.js"></script>
		<!-- Owl carousel css-->
		<script src="resource/OwlCarousel/dist/owl.carousel.min.js"></script>
		<!-- wow Animation -->
		<script src="resource/WOW-master/dist/wow.js"></script>
		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&amp;callback=googleMap" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="resource/gmaps.min.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="resource/contact-form/validate.js"></script>
		<script type="text/javascript" src="resource/contact-form/jquery.form.js"></script>
		<!-- custom js -->
		<script src="js/custom.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>		

	</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
</html>