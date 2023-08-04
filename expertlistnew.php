<?php
session_start();
require 'dbconnect.php';
$id=$_SESSION['id'];
$qry_u="SELECT * FROM user_tbl where id=$id";
$rs_u=mysqli_query($con,$qry_u);
$row_u=mysqli_fetch_assoc($rs_u);
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Info Farmic</title>

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
		<style type="text/css">
		.box{
			box-shadow: 3px 3px 23px yellowgreen,3px 3px 23px yellowgreen inset; 
			height: 120px;
		}
	</style>
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

							<a href="index1.php"><img src="images/logo/lg.png" height="70" width="70" alt="logo" class="img-circle"></a>
							<b>INFO FARMIC</b>
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
									<li class="dropdown-holder active"><a href="index1.php">Home</a>
									</li>
									<li class="dropdown-holder"><a href="about-us.php">AboutUs</a>
									</li>
									<li class="dropdown-holder"><a href="gallery.php">Gallery</a>
										
									</li>
									
									
								</li>
								<li class="dropdown-holder"><a href="news.php">Latest News</a>
								</li>
								<li><a href="contact.php">Contact us</a></li>
								<li><a href="logout.php">Logout</a></li>
								 <a href="userprofile.php">
							       <li>
							       <img style="margin-top:40px; margin-left:50px; border-radius: 50%; " src="<?php echo $row_u['profile_pic'];?>" height="50" width="50">
							       </li></a>
								
								<!DOCTYPE html>
							</li>
							
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
				Footer
			============================================== 
		-->

		
							<section class="Organice-Product">
				<div class="container">
				<h2>Our Experts</h2>
        		    
        		    <div class="gallery_item_wrapper row" id="mixitup_list">		
	        			<!-- Single Item -->
	        			<?php
		require 'dbconnect.php';
		$select_ex = "SELECT * FROM expert_tbl WHERE `Isactive`=1";
		$rs_ex = mysqli_query($con,$select_ex);
		if(mysqli_num_rows($rs_ex)>0)
		{
			while($row=mysqli_fetch_assoc($rs_ex))
			{
				?>
	        			<div class="col-md-4 col-xs-6 mix Fruits Vegetables">
	        			    <div class="Product tran3s">
        			    		
		        				<div class="single_item_wrapper">
		        					<img src="<?php echo $row['profile_pic'];?>" height="300px" width="500px"alt="Image">
		        				</div> <!-- End of .single_item_wrapper -->
		        				<div class="value-info">
		        					<h4><a href="exprofile.php" class="tran3s"><?php echo $row['firstname']." ".$row['lastname'];?></a></h4>
		        			    	<a href="exprofile.php?id=<?php echo $row['eid'];?>"><h6>Profile</h6>
							</a>
		        			    </div><!-- value-info -->
	        			    </div> <!-- Product -->
	        			</div> <!-- col -->
	        				<?php
	        			}

	        		}
	        		?>
	        			

	        			
        		    </div> <!-- End of .gallery_item_wrapper -->
				</div><!-- /.container -->
			</section><!-- /.Organice-Product -->





			<!--	<div class="container box" >
					<row>
						<div class="col-lg-2"><br>
							<img src="<?php //echo $row['profile_pic']?>" class="img-circle img-thumnail color-primrry" height="90" width="90">
						</div>

						<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12 ">
							Name:<?php// echo $row['firstname']." ".$row['lastname'];?><br>
							Experties:<?php //echo $row['specialization'];?><br>
							Contact:<?php //echo $row['mobileno'];
							$eid //= $row['eid'];
							?><br>
							
							
						</div>
						

					</row> 
				</div><br>-->
				

		

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
<div class="modal fade" tabindex="-1" role="dialog" id="dd">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="askque.php" method="POST" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Ask your questions here !..</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label> Upload Photo</label>
						<input type="file" name="fileToupload" class="form-control">
					</div>
					<div class="form-group"> 
						<textarea class="form-control" name="txt_prob"> </textarea>
					</div>	
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" class="btn btn-primary" value="Share" name="submit">
					</div>
				</div><!-- /.modal-content -->
			</form>
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Mirrored from unifytheme.com/html/farm/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:48:34 GMT -->

	</html>	