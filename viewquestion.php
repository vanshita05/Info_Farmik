<?php
session_start();
require 'dbconnect.php';


	$id=$_SESSION['eid'];

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

	<title>InfoFarmic - Organic Food &amp; E
	co Farm </title>

	<!-- Favicon -->
	<link rel="icon" type="images/jpg" sizes="56x56" href="images/logo/lg.png">

	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="resource/html5shiv.js"></script>
			<script src="resource/respond.js"></script>
		<![endif]-->
		<style type="text/css">

		.container .img{
			text-align:center;
		}
		.container .details{
			border-left:3px solid #ded4da;
		}
		.container .details p{
			font-size:15px;
			font-weight:bold;
		}
		.thumbnail {
			padding:0px;
		}
		.panel {
			position:relative;
		}
		.panel>.panel-heading:after,.panel>.panel-heading:before{
			position:absolute;
			top:11px;left:-16px;
			right:100%;
			width:0;
			height:0;
			display:block;
			content:" ";
			border-color:transparent;
			border-style:solid solid outset;
			pointer-events:none;
		}
		.panel>.panel-heading:after{
			border-width:7px;
			border-right-color:#f7f7f7;
			margin-top:1px;
			margin-left:2px;
		}
		.panel>.panel-heading:before{
			border-right-color:#ddd;
			border-width:8px;
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
					<ul>
						<li>
							<div class="icon"><i class="flaticon-signs header-flat" aria-hidden="true"></i></div> 
						Info Farmic , W 35th St, India</li>
						<li>
							<div class="icon"><i class="flaticon-multimedia  header-flat" aria-hidden="true"></i></div> 
							infofarmic@gmail.com
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

									<li class="dropdown-holder"><a href="exprofilemng.php">Profile</a>
									</li>
									<li class="dropdown-holder"><a href="news.php">Latest News</a>
									</li>
									<li><a href="contact.php">Contact us</a></li>
									<li class="dropdown-holder">
										<a href="logout.php">Logout</a>
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

		<div class="container">
			=============================================
			Expert Profile
			======================================================= 
			<br/><br/>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 ">
					<?php require 'sidebar1.php';?>
				</div>
				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h4>Your Profile</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div class="container">
										
										<div class="row">
											<?php 
												$qry="SELECT * FROM ques_tbl WHERE eid=$id ORDER BY doi DESC";
												$rs=mysqli_query($con,$qry);
												if(mysqli_num_rows($rs)>0)
												{

													while($row=mysqli_fetch_assoc($rs))
													{

													$u_id=$row['id'];
													
													$u_qry="SELECT * FROM user_tbl WHERE id=$u_id";
													$u_rs=mysqli_query($con,$u_qry);
													$u_row=mysqli_fetch_assoc($u_rs);
													?>
													<div class="col-sm-5">
											<div class="col-sm-2">
												<div class="thumbnail">
													<a href="viewuserprofile.php?id=<?php echo $u_id; ?>">
													<img class="img-responsive user-photo" src="<?php echo $u_row['profile_pic'];?>" "width="100" height="100"></a>
												</div><!-- /thumbnail -->
											</div><!-- /col-sm-1 -->

											<div class="col-sm-10">
												<div class="panel panel-default">
													<div class="panel-heading">

														<strong><?php echo $u_row['firstname'];?></strong> <span class="text-muted"></span>
													</div>
													<div class="panel-body">
														
														
														<?php echo $row['question'];?>
														<img src="<?php echo $row['media'];?>" height="100" width="100">
													</div><!-- /panel-body -->
													<div class="panel-body">
														
														<form action="givereply.php" method="post" enctype="multipart/form-data">
														<input type="submit" name="reply" class="btn btn-primary" value="Reply" id="reply"><br><br>
														<textarea class="form-control" placeholder="Enter yout comment" cols="70" rows="3" name="suggestion"></textarea>
														<input type="hidden" name="id" value="<?php echo $u_id;?>">
														<input type="hidden" name="name" value="<?php echo $u_row['firstname'];?>">
														<input type="hidden" name="qid" value="<?php echo $row['qid'];?>">
														
														<input type="file" name="fileToUpload">
															<input type="submit" name="submit"n class="btn btn-primary">
													</form>
													</div>
												</div><!-- /panel panel-default -->
											</div><!-- /col-sm-5 -->
											</div>
											<?php
										}

										}
										?>

										</div><!-- /row -->

									</div><!-- /container -->
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>



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
<script type="text/javascript">
		$(document).ready(function(){
			$("#cr_in").hide();
			$("#cmt_form").hide();
			$("#cr_btn").click(function(){
				$("#cr_in").click();
			});
			$("#btn_cmt").click(function(){
				$("#cmt_form").show();

			});
		})
	</script>	
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
	
	<script src="resource/gmaps.min.js"></script>
	<!-- Validation -->
	<script type="text/javascript" src="resource/contact-form/validate.js"></script>
	<script type="text/javascript" src="resource/contact-form/jquery.form.js"></script>
	<!-- custom js -->
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="js/map-script.js"></script>	
	<script type="text/javascript" src="js.jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#cr_in").hide();
			$("#cr_btn").click(function(){
				$("#cr_in").click();
			});
		})
	</script>	

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
	<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
	</html>