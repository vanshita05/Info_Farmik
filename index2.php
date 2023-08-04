<?php 
session_start();
if(isset($_SESSION['eid']))
{
$id=$_SESSION['eid'];
require 'dbconnect.php';
$qry_u="SELECT * FROM expert_tbl where eid=$id";
$rs_u=mysqli_query($con,$qry_u);
$row_u=mysqli_fetch_assoc($rs_u);
}
?>
<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Info Farmic &amp; Eco Farm HTML Template</title>

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
	        <header>
				<div class="container">
				    <div class="address-list float_left">
						
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
			        			<img src="images/logo/lg.png" height=90px width=90px alt="logo" class="img-circle"></a>
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
							       <li class="dropdown-holder"><a href="gallery.php">Gallery</a>
										<ul class="sub_menu">
							       			<li><a href="gallery.php">Images</a></li>
							       			
							       			<li><a href="gallery-vs3.php">Video</a></li>
							       			</ul>
							       </li>
							       
							       
							       <li class="dropdown-holder"><a href="news.php">Latest News</a>
							       </li>
							        <li><a href="contact.php">Contact us</a></li>
							        
							        <li><a href="exprofilemng.php">Profile</a></li>
							        <li class="dropdown-holder">
							        	<a href="logout.php">Logout</a>
							       </li>
							        <a href="exprofilemng.php">
							       <li>
							       <img style="margin-top:40px; margin-left:50px; border-radius: 50%; " src="<?php echo $row_u['profile_pic'];?>" height="50" width="50">
							       </li></a> 	
							     </ul>
							   </div><!-- /.navbar-collapse -->

							  
							   <div class="clear_fix"></div>
							</nav><!-- /.theme-main-menu -->
							<div class="clear_fix"></div>
						</div><!-- /.theme-main-menu -->
			        </div><!-- /.container -->
			    </div><!-- /.main-container -->
	        </header><!-- /.end header -->


     		<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner">
				<div data-src="images/home/bgh1.jpg">
					<div class="camera_caption">
						<div class="container">
						    <p class="wow fadeInUp animated"></p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.5s">Info Farmic</h1>
							<h3 class="wow fadeInUp animated" data-wow-delay="1s">Fresh, Organic and Seasonal Food for a healthy lifestyle</h3>
							
							

							
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="images/home/home-page1.jpg">
					<div class="camera_caption">
						<div class="container">
						    <p class="wow fadeInUp animated"></p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.5s">Info Farmic</h1>
							<h3 class="wow fadeInUp animated" data-wow-delay="1s">Fresh, Organic and Seasonal Food for a healthy lifestyle</h3>
							<a href="shop.php" class="tran3s round-border wow fadeInLeft animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Shop Now</a>
							<a href="contact.php" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Get Product</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="images/home/bgh1.jpg">
					<div class="camera_caption">
						<div class="container">
						    <p class="wow fadeInUp animated"></p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.5s">Info Farmic</h1>
							<h3 class="wow fadeInUp animated" data-wow-delay="1s">Fresh, Organic and Seasonal Food for a healthy lifestyle</h3>
							
							<a href="contact.php" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Get Product</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			</div> <!-- /#theme-main-banner -->

            <!-- 
			=============================================
				Sample-section
			============================================== 
			--><br>
            <section class="sample-section">
            	<div class="container">
            		<div class="row">

            		    <div class="col-md-4 col-sm-6 col-xm-12">
            		        <div class="single-content tran3s">

            		            <img src="images/k6.jpg" alt="img"  height="300" width="377" style="margin-top: 25px;">
            		            <div class="text">
	            		            <h5>Crop Farming</h5>
	            		            <p>We have over 15 years of experience</p>
            		            </div><!-- /#text -->
            		        </div><!-- /#single-content -->	
            		    </div><!-- /#col -->
            		    <br>
                        <div class="col-md-4 col-sm-6 col-xm-12">
            		    	<div class="single-content tran3s">
            		            <img src="images/k7.jpg" alt="img" height="300" width="377">
                                <div class="text text2">
	            		            <h5>Animal Farming</h5>
	            		            <p>Naturix deal of the day</p>	
            		            </div><!-- /#text -->
            		        </div><!-- /#single-content -->
            		    </div><!-- /#col -->
            		    <div class="col-md-4 col-sm-6 col-xm-12 hidden-sm">
            		    	<div class="single-content tran3s">
            		            <img src="images/k8.jpg" alt="img" height="300" width="377">
            		            <div class="text text2">
	            		            <h5>Fish Farming</h5>
	            		            <p>We have over 15 years of experience</p>
            		            </div><!-- /#text -->	
            		        </div><!-- /#single-content -->
            		    </div><!-- /#col -->
            		</div><!-- /#row -->
            	</div><!-- /#container -->
            </section><!-- /#sample-section -->

            <!-- 
			=============================================
				Farm Fresh Section
			============================================== 
			-->
            <section class="farm-fresh">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-6 col-xm-12">
            			    <h2>We are Info Farmic</h2>
            			    <h6>We produce the best Agro-Expert with the help of Agro-Expert.We provide here the most trending Fertilizer details and also about its availability list in perticular shops. Also provide most update videoes, Krishimela Details.We filtered the Agro-Expert's list into two forms: 1.Crop & 2.Animal so that you can get exect suggestions from the best experts.</h6>
            			    <a href="about-us.php" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Know More</a>
            			</div><!-- /#col -->
            			<div class="col-md-6 col-xm-12">
            				<img src="images/blog/b1.jpg" height="350px" width="550px" alt="img">
            			</div><!-- /#col -->
            		</div><!-- /#Row -->
            	</div><!-- /#container -->
            </section><!-- /#farm-fresh -->

          
			<section class="best-sale">
				<div class="container">
				<h2>Most Trending Video</h2>
			    <h6>We produce lots of vegetables in our Farm, you will get everything Fresh. Also, the cows produce lots of Milk. We rely on<br> healthy methods to nurture our cows. We are currently producing 150 liters of Milk every day. Also, for Gardening, our<br> farmers are skilled, they understand very well how to grow organic foods.</h6>
				    <div id="client-slider" class="owl-carousel owl-theme owl-best-sale">
						<div class="item">
								<video width="1000" height="500" controls>
  									<source src="images/video/wv.mp4" type="video/mp4">
  									
								</video>
						</div> <!-- /.item -->
						<div class="item">
								<video width="1000" height="500" controls>
  									<source src="images/video/ev.mp4" type="video/mp4">
  									
								</video>

						</div> <!-- /.item -->
					</div><!-- /.client-slider -->	
					<a href="about-us.php" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">View More >></a>
				</div><!-- /.container -->
			</section><!-- /.best-sale -->

            <!-- 
			=============================================
			  Product Section
			============================================== 
			-->
			<section class="Organice-Product">
				<div class="container">
				<h2>Our Organice Product</h2>
        		    
        		    <div class="gallery_item_wrapper row" id="mixitup_list">		
	        			<!-- Single Item -->
	        			<div class="col-md-4 col-xs-6 mix Fruits Vegetables">
	        			    <div class="Product tran3s">
        			    		
		        				<div class="single_item_wrapper">
		        					<img src="images/a1.jpg" height="300px" width="500px"alt="Image">
		        				</div> <!-- End of .single_item_wrapper -->
		        				<div class="value-info">
		        					<h4><a href="shop.php" class="tran3s">Dr.Sunil Kumar</a></h4>
		        			    	<h6 class="">Expert</h6>
		        			    </div><!-- value-info -->
	        			    </div> <!-- Product -->
	        			</div> <!-- col -->

	        			<!-- Single Item -->
	        			<div class="col-md-4 col-xs-6 mix Juices Beef"> 
	       
	        		        <div class="Product tran3s">
        		        	    
		        				<div class="single_item_wrapper">
		        					<img src="images/a2.jpg" height="300px" width="500px" alt="Image">
		        				</div> <!-- End of .single_item_wrapper -->
		        				<div class="value-info">
		        					<h4><a href="shop.php" class="tran3s">Joyus Nicolus</a></h4>
		        					<h6 >Expert</h6>
		        			    </div><!-- value-info -->
	        			    </div> <!-- Product -->
	        			</div> <!-- col -->

	        			<!-- Single Item -->
	        			<div class="col-md-4 col-xs-6 mix Fruits Milk"> 
		
	        		        <div class="Product tran3s">
        		        		
		        				<div class="single_item_wrapper">
		        					<img src="images/a3.jpg" height="300px" width="500px" alt="Image">
		        				</div> <!-- End of .single_item_wrapper -->
		        				<div class="value-info">
		        					<h4><a href="shop.php" class="tran3s">S.Jaykumar</a></h4>

		        					<h6>Expert</h6>
		        			    </div><!-- value-info -->
	        			    </div> <!-- Product -->
	        			</div> <!-- col -->

	        			
        		    </div> <!-- End of .gallery_item_wrapper -->
				</div><!-- /.container -->
			</section><!-- /.Organice-Product -->

			<!-- 
			=============================================
				Testimonial Section
			============================================== 
			-->
			<section class="testimonial">
			    <div class="opacity">
	        	    <div class="container">
		        		<div class="main_title">
			        		<h2>What Farmer Say?</h2>
			        	</div> <!-- End of .main_title -->
		        		<div class="owl-carousel owl-theme" id="testimonial-slider">
		        			<div class="item">
		        				<div class="info_wrapper">
		        					<div class="client_info">
		        						<img src="images/inner-page/testimonial-1.jpg" alt="client" class="border_round float_left">
		        						<div class="name float_left">
		        							<h6>Mahfuz Riad</h6>
		        							<span>CEO, Company</span>
		        						</div> <!-- End of .name -->
		        						<div class="clear_fix"></div>
		        					</div> <!-- End of .client_info -->
		        					<div class="brief-content">
		        					    <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
		        					    <span></span>
		        					    <span></span>
		        					</div><!-- End of .brief-content -->
		        				</div> <!-- End of .info_wrapper -->
		        			</div> <!-- End of .item -->
		        			<div class="item">
		        				<div class="info_wrapper">
		        					<div class="client_info">
		        						<img src="images/inner-page/testimonial-2.jpg" alt="client" class="border_round float_left">
		        						<div class="name float_left">
		        							<h6>Zuber All Hasan</h6>
		        							<span>CEO, Developer</span>
		        						</div> <!-- End of .name -->
		        						<div class="clear_fix"></div>
		        					</div> <!-- End of .client_info -->
		        					<div class="brief-content">
		        					    <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
		        					    <span></span>
		        					    <span></span>
		        					</div><!-- End of .brief-content -->
		        				</div> <!-- End of .info_wrapper -->
		        			</div> <!-- End of .item -->
		        			<div class="item">
		        				<div class="info_wrapper">
		        					<div class="client_info">
		        						<img src="images/inner-page/testimonial-1.jpg" alt="client" class="border_round float_left">
		        						<div class="name float_left">
		        							<h6>Mahfuz Riad</h6>
		        							<span>CEO, Company</span>
		        						</div> <!-- End of .name -->
		        						<div class="clear_fix"></div>
		        					</div> <!-- End of .client_info -->
		        					<div class="brief-content">
		        					    <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
		        					    <span></span>
		        					    <span></span>
		        					</div><!-- End of .brief-content -->
		        				</div> <!-- End of .info_wrapper -->
		        			</div> <!-- End of .item -->
		        			<div class="item">
		        				<div class="info_wrapper">
		        					<div class="client_info">
		        						<img src="images/inner-page/testimonial-2.jpg" alt="client" class="border_round float_left">
		        						<div class="name float_left">
		        							<h6>Zuber All Hasan</h6>
		        							<span>CEO, Developer</span>
		        						</div> <!-- End of .name -->
		        						<div class="clear_fix"></div>
		        					</div> <!-- End of .client_info -->
		        					<div class="brief-content">
		        					    <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
		        					    <span></span>
		        					    <span></span>
		        					</div><!-- End of .brief-content -->
		        				</div> <!-- End of .info_wrapper -->
		        			</div> <!-- End of .item -->
		        		</div><!-- End of .testimonial-slider -->
	        	    </div><!-- End of .container -->
	        	</div><!-- End of .container -->    
            </section><!-- End of .container -->	

            <!-- 
			=============================================
				Latest News Section
			============================================== 
			-->		
			<section class="latest-news">
			    <div class="container">
			        <div class="latest-title">
			            <h2>Latest News</h2>	
			        </div><!-- /.latest-title-->
			        <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
					        <div class="latest-single-content">
							    <img src="images/te.jpg" alt="latest" height="321" width="370">
							    <div class="news-single-content wow fadeInUp animated">
								    <h4><a href="blog-details.php" class="tran3s">Farmer's Training</a></h4>
								    <p>13 /04 /17</p>
								    <p class="tran3s">At Krishimela, Experts give kowledge about current evolution in crop Farming </p>
								</div><!-- /.news-single-content-->   
						    </div><!-- /.latest-single-content--> 	
					    </div><!-- /.col- -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
					        <div class="latest-single-content">
							    <img src="images/im.jpg" alt="latest" height="321" width="370">
							    <div class="news-single-content wow fadeInUp animated">
								    <h4><a href="blog-details.php" class="tran3s">India eats and farms</a></h4>
								    <p>13 /04 /17</p>
								    <p class="tran3s">At Andhrapradesh, Minister of Agriculture, Gajendra Singh was opening the Krishimela </p>
								</div><!-- /.news-single-content-->   
						    </div><!-- /.latest-single-content--> 	
					    </div><!-- /.col- -->

				        <div class="col-md-4 col-sm-6 col-xs-12 hidden-sm">
					        <div class="latest-single-content">
							    <img src="images/km.jpg" alt="latest" height="319" width="370">
							    <div class="news-single-content wow fadeInUp animated">
								    <h4><a href="blog-details.php" class="tran3s">Promoting agriculture Market</a></h4>
								    <p>13 /04 /17</p>
								    <p class="tran3s">The Agriculture Market at Mumbai's Thane was established in January, 2011, in response to food access issues in the neighboring town of Mumbai,</p>
								</div><!-- /.news-single-content-->   
						    </div><!-- /.latest-single-content--> 	
					    </div><!-- /.col- -->			        	
			        </div><!-- /.row- -->     	
			    </div><!-- /.container-->	
			</section><!-- /.latest-news-->

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
		<!-- Camera js -->
		<script src="resource/Camera-master/scripts/camera.min.js"></script>
		<script src="resource/Camera-master/scripts/jquery.easing.1.3.js"></script>
		<!-- Owl carousel css-->
		<script src="resource/OwlCarousel/dist/owl.carousel.min.js"></script>
	    <!-- js count to -->
		<script type="text/javascript" src="resource/jquery.appear.js"></script>
		<script type="text/javascript" src="resource/jquery.countTo.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="resource/jquery.mixitup.min.js"></script>
		<!-- fancy box -->
	    <script type="text/javascript" src="resource/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- wow Animation -->
		<script src="resource/WOW-master/dist/wow.js"></script>
		<!-- Custom Js -->
		<script src="js/custom.js"></script>		

	</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from unifytheme.com/html/farm/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:48:34 GMT -->
</html>	