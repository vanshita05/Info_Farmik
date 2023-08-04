<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unifytheme.com/html/farm/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:51:44 GMT -->
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
                $id=$_SESSION['eid'];    
                $qry="SELECT * FROM expert_tbl where id=$id";
                $rs=mysqli_query($conn,$qry);
                $row=mysqli_fetch_assoc($rs);
                $usertype=$row['usertype'];
                    if($usertype=='2'){
                    require 'header2.php';
                }
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
		<section class="inner-page-banner inner-page-banner-vs2">
			<div class="opacity">
				<div class="container">
					<h3>Gallery</h3>
					<ul>
						<li><a href="index.php" class="">Home</a></li>
						<li>.</li>
						<li><span>Gallery</span></li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.opacity -->
		</section> <!-- /inner-page-banner -->

			<!-- 
			=============================================
				Our project 
			============================================== 
		-->



		<section class="gallery-section">
			<div class="container">
				<div class="row">
					<div class="gallery_item_wrapper row">
						 <!-- /.single-project -->
					</div>
					 <!-- /.mix -->
					 <?php
					 require 'dbconnect.php';
					 $qry="SELECT * FROM media where Isactive=1";
					 $rs=mysqli_query($con,$qry);
					 if(mysqli_num_rows($rs)>0)
					 {
					 	while($row=mysqli_fetch_assoc($rs))
					 	{
					 ?>
					<div class="col-xs-6">
						<div class="single-project">
							<div class="img">
								<img src="admin/<?php echo $row['photos'];?>" alt="Image" height="500" width="500">
								<div class="opacity tran3s"></div> <!-- /.opacity -->
								<ul class="icon">
									<li><a href="gallery-details.php" class="tran3s" title="View details"></a></li>
									<li><a data-fancybox="project" href="images/gallary/gallry2.png" class="tran3s fancybox" title="Farm Frsh Villa"></a></li>
								</ul>
							</div> <!-- /.img -->
						</div> <!-- /.single-project -->
					</div>
					<?php
						}
					}?>
				 <!-- /.mix -->
					 <!-- /.mix -->
				</div> <!-- /.project-slider -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.project-section -->

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
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="footer-logo">



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
		<!-- Bootstrap js -->
		<script src="resource/bootstrap/js/bootstrap.min.js"></script>
		<!-- Owl carousel css-->
		<script src="resource/OwlCarousel/dist/owl.carousel.min.js"></script>
		<!-- Fancybox -->
		<script type="text/javascript" src="resource/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- wow Animation -->
		<script src="resource/WOW-master/dist/wow.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>		

	</div> <!-- /.main-page-wrapper -->
</body>

<!-- Mirrored from unifytheme.com/html/farm/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:53:12 GMT -->
</html>