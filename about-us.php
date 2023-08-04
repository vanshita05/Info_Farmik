<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unifytheme.com/html/farm/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Info Farmic - Organic Food &amp; Eco Farm HTML Template</title>

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
	    	<?php 
	    	if(isset($_SESSION['eid']))
	    	{
	    		require 'header.php';
	    	}
	    	else
	    	{
	    	require 'header.php';
	    	}
	   	 ?>

			<!-- 
			=============================================
				Inner Page Banner
			============================================== 
			-->
			<section class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h3>About us</h3>
						<ul>
							<li><a href="index.php" class="">Home</a></li>
							<li>.</li>
							<li><span>About</span></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /inner-page-banner -->

            <!-- 
			=============================================
				Best sale day Section
			============================================== 
			-->
			<section class="best-sale about-us-best">
				<div class="container">
				<h2>Best information you get Here</h2>
			    <h6>We produce lots of vegetables in our Farm, you will get everything Fresh. Also, the cows produce lots of Milk. We rely on<br> healthy methods to nurture our cows. We are currently producing 150 liters of Milk every day. Also, for Gardening, our<br> farmers are skilled, they understand very well how to grow organic foods.</h6>
				    <div id="client-slider" class="owl-carousel owl-theme owl-best-sale">
						<div class="item">
								<img src="images/te.jpg" alt="Image" width="500" height="700">
						</div> <!-- /.item -->
						<div class="item">
								<img src="images/k7.jpg" alt="Image" width="500" height="700">
						</div> <!-- /.item -->
					</div><!-- /.client-slider -->	
					
				</div><!-- /.container -->
			</section><!-- /.best-sale -->

			<!-- 
			=============================================
				Farm Fresh Section
			============================================== 
			-->
            <section class="farm-fresh about-us-fresh">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-6 col-xs-12">
            			    <h2>We Are Info Farmic</h2>
            			    <h6>We produce lots of information about current evolution in farming, you will get every news . Also, we make contact with the great AgroExpert also with Animal Expert. We rely on healthy methods to follow our farming. We are currently producing the information about diffrent Krishimela and seminars which will organize in different places. Also, for Gardening, our farmers are skilled, they understand very well how to grow organic foods.</h6>
            			    
            			</div><!-- /#col -->
            			<div class="col-md-6 col-xs-12">
            				<img src="images/blog/blog1.jpg" alt="img">
            			</div><!-- /#col -->
            		</div><!-- /#Row -->
            		<h6>Organic farming system in India is not new and is being followed from ancient time. It is a method of farming system which primarily aimed at cultivating the land and raising crops in such a way, as to keep the soil alive and in good health by use of organic wastes (crop, animal and farm wastes, aquatic wastes) and other biological materials along with beneficial microbes (biofertilizers) to release nutrients to crops for increased sustainable production in an eco friendly pollution free environment
					As per the definition of the United States Department of Agriculture (USDA) study team on organic farming “organic farming is a system which avoids or largely excludes the use of synthetic inputs (such as fertilizers, pesticides, hormones, feed additives etc) and to the maximum extent feasible rely upon crop rotations,</h6>
            	</div><!-- /#container -->
            </section><!-- /#farm-fresh -->

            <!-- 
			=============================================
				Counter Number Section
			============================================== 
			-->

			
			

			<!-- 
			=============================================
				Footer
			============================================== 
			-->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-logo">
								
								
								<ul class="footer-icon">
							        
								</ul>
								<ul class="footer-featured">
							    </ul>
							</div> <!-- /.footer-logo -->
						</div> <!-- /.col- -->

						

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-Update">
								
                                <div class="footer-News">
                                </div> <!-- /.footer-News -->    	
							</div>  <!-- /.footer-Update -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

				<!-- Bottom Footer -->
		        <div class="bottom-footer">
		        	<div class="container">
		        	    <div class="float_left">  
		        		    <p>Copyright © 2017 <a href="https://themeforest.net/user/designolo/portfolio" class="tran3s p-color" target="_blank"> InfoFarmic</a> All Rights Reserved by <a href="https://themeforest.net/user/designolo/portfolio" class="p-color tran3s" target="_blank"> Designolo</a></p>
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
		<!-- Bootstrap js -->
		<script src="resource/bootstrap/js/bootstrap.min.js"></script>
		<!-- Owl carousel css-->
		<script src="resource/OwlCarousel/dist/owl.carousel.min.js"></script>
	    <!-- js count to -->
		<script type="text/javascript" src="resource/jquery.appear.js"></script>
		<script type="text/javascript" src="resource/jquery.countTo.js"></script>
		<!-- wow Animation -->
		<script src="resource/WOW-master/dist/wow.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>		

	</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from unifytheme.com/html/farm/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
</html>