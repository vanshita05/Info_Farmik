<?php 
if(isset($_SESSION['id']))
{
		$id=$_SESSION['id'];
		require 'dbconnect.php';
		$qry_u="SELECT * FROM user_tbl where id=$id";
		$rs_u=mysqli_query($con,$qry_u);
		$row_u=mysqli_fetch_assoc($rs_u);
}
?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
	
	</script>
	<script type="text/javascript">
	function googleTranslateElementInit() {
  	new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<header>
				<div class="container">
				    <div class="address-list float_left">
						
					</div> <!-- /.address-list -->

					<div class="social-icon float_right">
						<ul>
							
							<div id="google_translate_element" style="height: 30px"></div>
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
							       			
							       			<li><a href="video.php">Video</a></li>
							       			</ul>
							       </li>
							       
							       
							       <li class="dropdown-holder"><a href="news.php">Latest News</a>
							       </li>
							       <?php
							       if(isset($_SESSION['id']))
							       {
							       ?>
							       <li class="dropdown-holder"><a href="expertlist.php">Ask To Expert</a></li>

							       <?php
							       	}
							       ?>
							        <li><a href="contact.php">Contact us</a></li>
							        <?php
							        if(isset($_SESSION['id']) || isset($_SESSION['id']))
							        {
							        ?>
							        
							        <li class="dropdown-holder">
							        	<a href="logout.php">Logout</a>
							       </li>
							       <a href="userprofile.php">
							       <li>
							       	<img style="margin-top:40px; margin-left:50px; border-radius: 50%; " src="<?php echo $row_u['profile_pic'];?>" height="50" width="50">
							       </li></a>
							      		<?php }
							       	?>
							       	
							    	<?php
							    		if(!isset($_SESSION['id'])){
							    	?>   
							       
							    
							       		<li class="dropdown-holder">
							        	<a href="login.php">Login</a>
							       </li>
							         	<?php
							         }?>
							     </ul>
							   </div><!-- /.navbar-collapse -->

							  
							   <div class="clear_fix"></div>
							</nav><!-- /.theme-main-menu -->
							<div class="clear_fix"></div>
						</div><!-- /.theme-main-menu -->
			        </div><!-- /.container -->
			    </div><!-- /.main-container -->
	        </header>