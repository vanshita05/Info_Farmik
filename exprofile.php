
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
	co Farm HTML Template</title>

	<!-- Favicon -->
	<link rel="icon" type="imges/jpg" sizes="56x56" href="images/logo/fab-icon.jpg">

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
		<?php
		require 'dbconnect.php';
		
								
		$id = $_GET['id'];

			$qry="SELECT * FROM `expert_tbl` WHERE `eid`='".$id."'";
				$rs = mysqli_query($con,$qry);
				$row=mysqli_fetch_assoc($rs);

	 ?>
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
									<li class="dropdown-holder active"><a href="index1.php">Home</a>
									</li>
									<li class="dropdown-holder"><a href="about-us.php">AboutUs</a>
									</li>
									<li class="dropdown-holder"><a href="gallery.php">Gallery</a>
										<ul class="sub_menu">
											<li><a href="gallery.php">Images</a></li>

											<li><a href="gallery-vs3.php">Video</a></li>
										</ul>
									</li>

									<li class="dropdown-holder"><a href="expertlist.php">Ask to Expert</a>
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

			<div class="container">
			=============================================
				Expert Profile
			======================================================= 
			<br/><br/>
			</div>
			<div class="container">
	<div class="row">
		<div class="col-md-3 ">
				<?php require "sidebar.php"; ?>	     
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
		                 	<div class="container">
  <div class="row">
    <div class="col-md-4 img">
      <img src="<?php  echo $row['profile_pic']?>"  class="img-rounded" width="400" heigth="300">
    </div>
    
    <div class="col-md-6 details">
      <blockquote>
        <h5><?php echo $row['firstname']?></h5>
        <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
     

      <table class="table table-bordered">
      	
			
			        <tbody>

				           
				    			<tr>
				    				<td>First name</td>
				    				<td><?php echo $row['firstname']?></td>
				    			</tr>
				    			<tr>
				    				<td>Last name</td>
				    				<td><?php echo $row['lastname']?></td>
				    			</tr>
				    			<tr>
				    				<td>Email</td>
				    				<td><?php echo $row['email']?></td>
				    			</tr>
				    			<tr>
				    				<td>Date of Birth</td>
				    				<td><?php echo $row['dob']?></td>
				    			</tr>
				    			<tr>
				    				<td>Gender</td>
				    				<td><?php echo $row['gender']?></td>
				    			</tr>
				    			<tr>
				    				<td>Specialized In</td>
				    				<td><?php echo $row['specialization']?></td>
				    			</tr>
				    		
				    		</tbody>      	</table>

							
    <a href="askque.php?id=<?php echo $row['eid']?>">  	<input type="submit" name="askque" class="btn btn-primary" value="Ask Question"></a>
    </div>
  </div>
</div></div>
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
		</footer>

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