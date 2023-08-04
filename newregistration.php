
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->

	
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Info Farmic - Organic Farming &amp; Eco Farm </title>

		<!-- Favicon -->
		<link rel="icon" type="imges/jpg" sizes="56x56" href="images/logo/lg.png">

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="resource/html5shiv.js"></script>
			<script src="resource/respond.js"></script>
		<![endif]-->
			
	</head>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#animal").hide(0.1);
		$("#crop_reg").click(function(){
			
			$("#crop").show(0.1);
			$("#animal").hide(0.1);
		});
		$("#animal_reg").click(function(){
			
			$("#animal").show(0.1);
			$("#crop").hide(0.1);
		});
		});

	</script>
	<script type="text/javascript">
    	$(document).ready(function(){
    		
    		$(document).on('change','#txt_dis',function(e){
    			e.preventDefault();
    			search_city();
    		});
        function search_city()
        {
            var sid=document.getElementById("txt_dis").value;
            // alert(sid);s
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","search_city.php?ctr="+sid,false);
            xmlhttp.send(null);
            var res=xmlhttp.responseText;

            document.getElementById("txt_tal").innerHTML=res;

        }
    });
    </script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		
    		$(document).on('change','#txt_state',function(e){
    			e.preventDefault();
    			search_city();
    		});
        function search_city()
        {
            var sid=document.getElementById("txt_state").value;
            // alert(sid);s
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","search_city.php?ctr="+sid,false);
            xmlhttp.send(null);
            var res=xmlhttp.responseText;

            document.getElementById("txt_city").innerHTML=res;

        }
    });
    </script>
	<style type="text/css">
		input[type=radio] {
    border: 0px;
    width: 10%;
    height: 2em;
}
	</style>
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
	          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
	
	</script>
	<script type="text/javascript">
	function googleTranslateElementInit() {
  	new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

	       		<?php
   				 if(isset($_SESSION['eid']))
  				  {
                $id=$_SESSION['eid'];    
                $qry="SELECT * FROM expert_tbl where id=$id";
                $rs=mysqli_query($con,$qry);
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
?><!-- /.end header -->

			<!-- 
			=============================================
				Inner Page Banner
			============================================== 
			-->
			<section class="inner-page-banner inner-page-banner-vs2">
				<div class="opacity">
					<div class="container">
						<h3>REGISTRATION</h3>
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

<body>	
	

 
<section class="contact-section">
				<div class="container ">
				    
				    <div class="row">
				      	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col-md-offset-2">
				      		<div class="contact-us-section">
				      			<h2>Farmer's Registration Here !..</h2>
				      							      			<a href="#" id="crop_reg" class="tran3s active round-border wow fadeInLeft animated hvr-shutter-out-horizontal-two btn btn-primary" data-wow-delay="1s" >Crop Registration</a>
				      							      			<a href="#" id="animal_reg" class="tran3s active round-border wow fadeInLeft animated hvr-shutter-out-horizontal-two btn btn-primary" data-wow-delay="1s">Animal Registration</a>

				      			<form action="cropsubmit.php" class="theme-form-two form-validation" id="crop" autocomplete="off" method="post" enctype="multipart/form-data" >
				      				
				      				<input type="text" placeholder="Enter Your First Name" name="txt_fn" required>
				      				<div class="row">
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="Enter Your Last Name" name="txt_ln" required>
				      					</div><!-- /.col -->

				      					<div class="col-md-12 col-sm-12">
				      						<input type="date" placeholder="Enter Your Date of Birth" name="txt_bd" required>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="email" placeholder="Enter Your email id" name="temail" >
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="number" placeholder="Enter Your Contact number" name="tphone" required>
				      					</div>
				      					
				      					<div class="col-md-4 col-sm-4">
				      					<select name="rd_gen">
				      						<option value="Male">Male</option>
				      						<option value="Female">Female</option>
				      					</select>
				      					</div>
				      					<div class="col-md-4 col-sm-4">
				      						<select name="state" id="txt_dis" onchange="search_city()">
				      							<option> Select State</option>
				      						<?php
									require 'dbconnect.php';
									$query = "SELECT * FROM  state_tbl";
									$rs = mysqli_query($con, $query);
									while($row = (mysqli_fetch_assoc($rs)))
									{
								?>
								<option value="<?php echo $row['state_id']; ?>"><?php echo $row['statename']; ?></option>
								<?php
									}
								?>
				      					</select>
				      					</div>
				      					<div class="col-md-4 col-sm-4">
				      						<select name="city" id="txt_tal">
				      							<option> Select City</option>
				      					
				      					</select>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<textarea placeholder="Enter Your Address" name="address"></textarea>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      					
				      							<label>Choose File for your profile pic</label>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="file" name="fileToUpload">			
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="Which crop is used currently?" name="txt_crop">
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="which fertilizer you used?" name="txt_fer">
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<select name="soil" style="margin-bottom: 20px;">
				      							<option>--which Type of Soil ?--</option>
				      						<option value="Alluvia Soils">Alluvia Soils</option>
											<option value="Black(or Reggur Soils)">Black(or Reggur Soils)</option>
											<option value="Red and Yellow Soils">Red and Yellow Soils</option>
											<option value="Laterite Soils">Laterite Soils</option>
											<option value="Arid and Desert Soils">Arid and Desert Soils</option>
											<option value="Salina and Alkaline Soils">Salina and Alkaline Soils</option>
											<option value="Peaty and Marshy Soils">Peaty and Marshy Soils</option>
											<option value="Forest and Mountain Soils">Forest and Mountain Soils</option>
				      					</select>
				      				
				      					</div>
				      			
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="Total Turn Over" name="txt_tt">			
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<select name="supply_tech" style="margin-bottom: 20px;" >
				      							<option>--Water Supply Technique--</option>
				      						<option value="Alluvia Soils">Drip or micro-irrigation</option>
											<option value="Black(or Reggur Soils)">bottel-irrigation ad pitcher-irrigation</option>
											<option value="Red and Yellow Soils">using recycles bottel for bottel micro-irrigation</option>
											<option value="Laterite Soils">zai pits</option>
											<option value="Arid and Desert Soils">ripper-furrower planning system</option>
											<option value="Salina and Alkaline Soils">Acequias</option>
											<option value="Peaty and Marshy Soils">subsurface irrigation system</option>
											<option value="Forest and Mountain Soils">water storage</option>
				      					</select>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="Water Producing Timing" name="txt_wt">
				      						
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="password" placeholder="Password" name="txt_pass">
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="password" placeholder="Confirm Password" name="txt_cpass">
				      					</div>

				      				</div><!-- /.row -->
				      				<div class="buttonDiv">
										<input class="hvr-shutter-out-horizontal-two round-border" type="submit" name="btn_crop" value="Register">
								    </div><!-- /buttonDiv -->
								    
				      			</form> <!-- /.theme-form-two -->



				      			<form action="animalsubmit.php" class="theme-form-two form-validation" id="animal" autocomplete="off" method="post" enctype="multipart/form-data">
				      				
				      				<input type="text" placeholder="Enter Your First Name" name="txt_fn" required>
				      				<div class="row">
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="Enter Your Last Name" name="txt_ln" required>
				      					</div><!-- /.col -->

				      					<div class="col-md-12 col-sm-12">
				      						<input type="date" placeholder="Enter Your Date of Birth" name="txt_bd" required>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="email" placeholder="Enter Your email id" name="txt_email" >
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="number" placeholder="Enter Your Contact number" name="tphone" required>
				      					</div>
				      					
				      					<div class="col-md-4 col-sm-4">
				      					<select name="rd_gen">
				      						<option value="Male">Male</option>
				      						<option value="Female">Female</option>
				      					</select>
				      					</div>
				      					<div class="col-md-4 col-sm-4">
				      						<select name="state" id="txt_state" onchange="search_city()">
				      							<option> Select State</option>
				      									<?php
									require 'dbconnect.php';
									$query = "SELECT * FROM  state_tbl";
									$rs = mysqli_query($con, $query);
									while($row = (mysqli_fetch_assoc($rs)))
									{
								?>
								<option value="<?php echo $row['state_id']; ?>"><?php echo $row['statename']; ?></option>
								<?php
									}
								?>
				      					</select>
				      					</div>
				      					<div class="col-md-4 col-sm-4">
				      						<select name="city" id="txt_city">
				      							<option> Select City</option>
				      					
				      					</select>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<textarea placeholder="Enter Your Address" name="txt_add"></textarea>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      					
				      							<label>Choose File for your profile pic</label>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="file" name="fileToUpload">			
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="Which Animal?" name="txt_animal">
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="which type of food you feed?" name="txt_food">
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<label>Animal's Birth Date</label>
				      						<input type="date" name="txt_dob" placeholder="Date of Birth" style="margin-bottom: 20px;" >
				      							
				      					</div>
				      					<div class="col-md-4 col-sm-4">
				      						<label>Gender</label>
				      					<select name="rda_gen">
				      						<option value="Male">Male</option>
				      						<option value="Female">Female</option>
				      					</select>
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" name="txt_return" placeholder="What it produce?" style="margin-bottom: 20px;" >
				      							
				      					</div>
				      			
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="How much?" name="txt_quantity">			
				      					</div>
				      					
				      					<div class="col-md-12 col-sm-12">
				      						<input type="text" placeholder="It has any Disease?" name="txt_disease">
				      						
				      					</div>

				      					<div class="col-md-12 col-sm-12">
				      						<input type="password" placeholder="Password" name="txt_pass">
				      					</div>
				      					<div class="col-md-12 col-sm-12">
				      						<input type="password" placeholder="Confirm Password" name="txt_cpass">
				      					</div>

				      				</div><!-- /.row -->
				      				<div class="buttonDiv">
										<input class="hvr-shutter-out-horizontal-two round-border" type="submit" name="btn_animal" value="Register">
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
			</section>

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

<!-- Mirrored from unifytheme.com/html/farm/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
</html>