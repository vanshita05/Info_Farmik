<?php
require 'dbconnect.php';
var_dump($_POST);
$fn = $_POST['txt_fn'];
$ln = $_POST['txt_ln'];
$dob = $_POST['txt_dob'];
$email = $_POST['txt_email'];
$mobileno = $_POST['txt_mobile'];
$gen = $_POST['txt_gen'];
$state = $_POST['state'];
$city = $_POST['city'];
$add = $_POST['txt_add'];
$pass = $_POST['txt_pass'];
$cpass = $_POST['txt_cpass'];
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Farm Fresh - Organic Food &amp; Eco Farm HTML Template</title>

		<!-- Favicon -->
		<link rel="icon" type="imges/jpg" sizes="56x56" href="images/logo/fab-icon.jpg">

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


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
	        <header>
				<div class="container">
				    <div class="address-list float_left">
						<ul>
							<li>
								<div class="icon"><i class="flaticon-signs header-flat" aria-hidden="true"></i></div> 
								FoodFarm, W 35th St, New York</li>
							<li>
								<div class="icon"><i class="flaticon-multimedia  header-flat" aria-hidden="true"></i></div> 
								info_floor@gmail.com
							</li>
						</ul>
					</div> <!-- /.address-list -->

					<div class="social-icon float_right">
						<ul>
							<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="tran3s"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="#" class="tran3s"><i class="fa fa-google" aria-hidden="true"></i></a></li>
						</ul>
					</div> <!-- /.social-icon -->	
		        </div><!-- /.container -->
		    <!-- ============================ Theme Menu ========================= -->
			    <div class="main-container">    
		        	<div class="container">
		        	    <div class="theme-main-menu">
			        		<div class="logo float_left">
			        			<a href="index-2.php"><img src="images/logo/logo.png" alt="logo" class="img-responsive"></a>
			        		</div> <!-- End of .logo -->

			        		<nav class="navbar navbar-default float_right">
							   <!-- Brand and toggle get grouped for better mobile display -->
							   <div class="navbar-header">
							     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							       <span class="sr-only">Toggle navigation</span>
							       <span class="icon-bar"></span>
							       <span class="icon-bar"></span>
							       <span class="icon-bar"></span>
							     </button>
							   </div>
							   <!-- Collect the nav links, forms, and other content for toggling -->
							   <div class="collapse navbar-collapse float_left" id="navbar-collapse-1">
							     <ul class="nav navbar-nav">
							       <li class="dropdown-holder active"><a href="index.php">Home</a>
							       </li>
							       <li class="dropdown-holder"><a href="about-us.php">AboutUs</a>
							       </li>
							       <li class="dropdown-holder"><a href="#">Gallery</a>
										<ul class="sub_menu">
							       			<li><a href="gallery.php">Images</a></li>
							       			
							       			<li><a href="gallery-vs3.php">Video</a></li>
							       			</ul>
							       </li>
							       
							       <li class="dropdown-holder"><a href="ask.php">Ask to Expert</a>
							       </li>
							       <li class="dropdown-holder"><a href="news.php">Latest News</a>
							       </li>
							        <li><a href="contact.php">Contact us</a></li>
							        <li class="dropdown-holder">
							        	<a href="login.php">Login</a>
							       </li>
							     </ul>
							   </div><!-- /.navbar-collapse -->

							   <div class="search_option float_right">
							   		<button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
							   		<form action="#" class="p_color_bg dropdown-menu" aria-labelledby="searchDropdown">
							   			<input type="text" placeholder="Search here.....">
							   			<button><i class="fa fa-search" aria-hidden="true"></i></button>
							   		</form>
							   </div> <!-- End of .search_option -->
							   <div class="clear_fix"></div>
							</nav><!-- /.theme-main-menu -->
							<div class="clear_fix"></div>
						</div><!-- /.theme-main-menu -->
			        </div><!-- /.container -->
			    </div><!-- /.main-container -->
	        </header><!-- /.end header -->  

			<!-- 
			=============================================
				Inner Page Banner
			============================================== 
			-->
			<section class="inner-page-banner inner-page-banner-vs2">
				<div class="opacity">
					<div class="container">
						<h3>Detail About Your Crop</h3>
						<ul>
							<li><a href="index.php" class="">Home</a></li>
							<li>.</li>
							<li><span>Contact</span></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /inner-page-banner -->

		    <!-- 
			=============================================
				contact-map-section
			============================================== 
		   

			
			=============================================
				contact-section
			============================================== 
			-->
			<section class="contact-section">
				<div class="container">
				  
				    <div class="row">
				      	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				      		<div class="contact-us-section">

				      			
				<!DOCTYPE html>
<html>
<head>
	<title>crop related</title>
</head>
<body>
	<?php
		if(isset($_POST['crop']))
		{
			?><center><?php echo "crop";?></center>hidden

	<center>
<br>
<br>
		<form action="cropsubmit.php" method="POST">
		<input type="hidden" name="txt_fn" value="<?php echo $fn;?>">
	<input type="hidden" name="txt_ln" value="<?php echo $ln;?>">
	<input type="hidden" name="txt_email" value="<?php echo $email;?>">
	<input type="hidden" name="txt_dob" value="<?php echo $dob;?>">
	<input type="hidden" name="txt_mobileno" value="<?php echo $mobileno;?>">
	<input type="hidden" name="state" value="<?php echo $state;?>">
	<input type="hidden" name="city" value="<?php echo $city;?>">
	<input type="hidden" name="txt_add" value="<?php echo $add;?>">
	<input type="hidden" name="txt_pass" value="<?php echo $pass;?>">
	<input type="hidden" name="txt_cpass" value="<?php echo $cpass;?>">
	<input type="hidden" name="txt_gen" value="<?php echo $gen;?>">
	<table>
		<tr>
			<td>
				<b>Which crop is used currently?</b>
			</td>
			<td>
				<input type="text" name="txt_crop"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>which fertilizer you used:</b> 
			</td>
			<td>
				<input type="text" name="txt_fer"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>which Type of Soil:</b> :
			</td>
			<td>
				<select name="soil"><br><br>
					<option>Alluvia Soils</option>
					<option>Black(or Reggur Soils)</option>
					<option>Red and Yellow Soils</option>
					<option>Laterite Soils</option>
					<option>Arid and Desert Soils</option>
					<option>Salina and Alkaline Soils</option>
					<option>Peaty and Marshy Soils</option>
					<option>Forest and Mountain Soils</option>
			</td>
		</tr>
		<tr>
			<td>
				<b>Toatal Turn Over: </b> 
			</td>
			<td>
				<input type="text" name="txt_tt" placeholder="Month/Year"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>Water Supply Technique :</b> :
			</td>
			<td>
				<select name="watersupplytech">
					<option>Alluvia Soils</option>
					<option>Black(or Reggur Soils)</option>
					<option>Red and Yellow Soils</option>
					<option>Laterite Soils</option>
					<option>Arid and Desert Soils</option>
					<option>Salina and Alkaline Soils</option>
					<option>Peaty and Marshy Soils</option>
					<option>Forest and Mountain Soils</option>
			</td>
		</tr>
		<tr>
			<td>
				<b>Water Producing Timing:</b> 

			</td>
			<td>
				<input type="text" name="txt_wt"><br><br>
			</td>
		</tr>
		
	</table>

	<div class="buttonDiv">
		<button type="submit" class="hvr-shutter-out-horizontal-two round-border" id="cr_btn" name="btn_sb1" value="crop">Submit</button>
	</div>
			<?php
		}
		elseif(isset($_POST['animal']))
		{?>

			<center><?php echo "animal";?>	</center>
			<br>	

	<center>

 
 	<form action="animalsubmit.php" method="POST">
		<input type="hidden" name="txt_fn" value="<?php echo $fn;?>">
	<input type="hidden" name="txt_ln"  value="<?php echo $ln;?>">
	<input type="hidden" name="txt_email" value="<?php echo $email;?>">
	<input type="hidden" name="txt_dob" value="<?php echo $dob;?>">
	<input type="hidden" name="txt_mobileno" value="<?php echo $mobileno;?>">
	<input type="hidden" name="state" value="<?php echo $state;?>">
	<input type="hidden" name="city" value="<?php echo $city;?>">
	<input type="hidden" name="txt_add" value="<?php echo $add;?>">
	<input type="hidden" name="txt_pass" value="<?php echo $pass;?>">
	<input type="hidden" name="txt_cpass" value="<?php echo $cpass;?>">
	<input type="hidden" name="txt_gen" value="<?php echo $gen;?>">
 		<table>
 			
 			<tr>
 				<td>
 					<b>Which Animal?</b> 
 				</td>
 				<td>
 					<input type="text" name="txt_animal" class="form-control">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<b>Which Type of Food you Feed them?</b> 
 				</td>
 				<td>
 					<input type="text" name="txt_food" class="form-control">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<b>DOB:</b> 
 				</td>
 				<td>
 					<input type="date" name="txt_dob" class="form-control">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<b>What should it give?</b> 
 				</td>
 				<td>
 					<input type="text" name="txt_return" class="form-control">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<b>How Much?</b> 
 				</td>
 				<td>
 					<input type="text" name="txt_quantity" class="form-control">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<b>
 						
 					</b> 
 				</td>
 				<td>
 					Gender:
 					<input type="radio" name="txt_gen1" value="M">Male
 					<input type="radio" name="txt_gen1" value="F">Female
 				</td>
 			</tr>
 			
 		</table>
 	
 	<div class="buttonDiv">
		<button type="submit" class="hvr-shutter-out-horizontal-two round-border" id="cr_btn" name="btn_sb2" value="crop">Submit</button>
	</div>
 </center>
 </form>
			<?php
		}
		else
		{
			header("location:registration.php");
			exit();
		}
	?>
 	


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

				      	
				      		


			
			
			<!-- 
			=============================================
				Footer
			============================================== 
			-->
			<footer>
				

						

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-Update">
								
								<div class="footer-News">
								    
                                </div> <!-- /.footer-News- -->
                                <div class="footer-News">
								    
                                </div> <!-- /.footer-News -->    	
							</div>  <!-- /.footer-Update -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

				<!-- Bottom Footer -->
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
		<script type="text/javascript" src="js.jquery.js"></script>

	</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
</html>
<?php
	if(isset($_POST['btn_sb1']))
	{
		header("location: cropsubmit.php");
	}
	elseif(isset($_POST['btn_sb2']))
	{
		header("location: animalsubmit.php");
	}
?>