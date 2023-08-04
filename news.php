<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from unifytheme.com/html/farm/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
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
						<h3>Latest news</h3>
						<ul>
							<li><a href="index.php" class="">Home</a></li>
							<li>.</li>
							<li><span>Blog</span></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /inner-page-banner -->

			<!-- 
			=============================================
				Blog-vs2 page
			============================================== 
			-->
			<article class="blog-vs2-page blog-details">
				<div class="container">
					<div class="row">
				        <div class="blog-images-categories imges-categories col-md-8 col-xs-12 float_right">
					        <div class="left-blog">
						    	
								<div class="text-blog">
								    <h3><a href="#" class="tran3s">Agri Loans up to Rs 1 lakh for Farmers at Zero Interest!</a></h3>
							 	    <p>Post by <span>Chander Mohan</span> in Uncategorized  <span>10 April, 2019 11:20 AM</span></p>
								    <p>The Government in power introduced new ways and means to please the farming community in their party manifesto two days ahead of the first phase of General Elections 2019 starting on 11th April 2019 for the 91 seats in selected states.  

The present BJP government is committed to solving the problems of farmers as a gift if selected again! Will these pleasing announcements help the present Government to win the election?  

For rural development, the BJP promised to spend Rs 25 lakh crore in the next five years. "Will give Rs 6,000 yearly income support to farmers and pension to small and marginal farmers above 60 years of age," Singh said. If the BJP is voted to power, it will ensure that all the farmers get Rs 6,000 per year as income support, the party said. 

The BJP has also promised that Pradhan Mantri Kisan Samman Nidhi Yojana will be extended to all. "We have launched Pradhan Mantri Kisan Samman Nidhi Yojana to ensure financial support to farmers owning land up to 2 hectares. We will further expand the coverage of the scheme to all the farmers in the country." 

 </p>
									<div class="float_left img-box"><img src="images/download (1).jpg" alt="img"></div>
									<div class="float_right img-box"><img src="images/adv.jpg" alt="img"></div>
									<div class="clear_fix"></div>
							        <p>Organic farming system in India is not new and is being followed from ancient time. It is a method of farming system which primarily aimed at cultivating the land and raising crops in such a way, as to keep the soil alive and in good health by use of organic wastes (crop, animal and farm wastes, aquatic wastes) and other biological materials along with beneficial microbes (biofertilizers) to release nutrients to crops for increased sustainable production in an eco friendly pollution free environment
					As per the definition of the United States Department of Agriculture (USDA) study team on organic farming “organic farming is a system which avoids or largely excludes the use of synthetic inputs (such as fertilizers, pesticides, hormones, feed additives etc) and to the maximum extent feasible rely upon crop rotations</p>
									<div class="recipess">
									<h5>Food facts</h5>
									<p>Fresh French beans are an excellent source of dietary fibre, vitamins A, B1, B6, C, antioxidants and lots of minerals. They are also very low in cholesterol, sodium and fat</p>
									<h5>Recipes</h5>
									<p>I only really use recipes as a guide, as for me, it all depends on what you have in the fridge. Use what you have and don’t be afraid of experimenting and substituting things, this can lead to great new ideas and combinations. Learn the techniques and apply them to your cooking!</p>
									</div><!-- /.recipes -->
									<div class="img images-hover">
									<img src="images/blog/blog-details4.png" alt="images" class="tran3s">
								    </div><!-- /.img -->
								    <div class="recipess recipess-bottom">
								    <ul>
								    	<li><p>1. Bring a medium sized pan of water to the boil. Add salt (I was taught that beans should be cooked in water as salty as the sea - this seems a lot of salt but gives a great flavour and helps to keep them green)</p></li>
								    	<li><p>2. Place your beans in the pan, cover and cook for 4 minutes, test to make sure they are cooked through but not overdone.</p></li>
								    	<li><p>3. At the same time heat up a medium frying pan and add the butter or oil and the garlic, cook gently until it starts to soften but be careful that it doesn’t burn or it will turn bitter.</p></li>
								    	<li><p>3. At the same time heat up a medium frying pan and add the butter or oil and the garlic, cook gently until it starts to soften but be careful that it doesn’t burn or it will turn bitter.</p></li>
								    	<li><p>5. Serve.</p></li>
								    </ul>
								    <h5>4 minutes for test</h5>
									<ul>
										<li><p>1. Bring a medium sized pan of water to the boil. Add salt.</p></li>
										<li><p>2. Place your beans, cover the pan and cook for 4 minutes, test to make sure they are cooked through but not overdone.</p></li>
										<li><p>3. Remove from the boiling water and place into cold water for a few minutes. This is to stop them cooking (and is called refreshing).</p></li>
										<li><p>4. Place the beans in a bowl along with the other ingredients, toss together and season to taste. If in doubt add less of the seasonings you can always add more…</p></li>
									</ul>
									</div><!-- /.text-blog -->
									<div class="link-details">
										<ul>
											<li><a href="#">Facebook</a></li>
											<li><a href="#">Twitter</a></li>
											<li><a href="#">Linkedin</a></li>
											<li><a href="#">Google+</a></li>
											<li class="float_right"><a href="blog.php" class="last-one"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;food, organic food, meet</a></li>
										</ul>
									</div><!-- /.link-details -->
								    <div class="comments_area">
	        						<h5>Comments (03)</h5>
	        						<div class="single_comment clear_fix ">
	        							<img src="images/blog/comments.jpg" alt="images" class="img-responsive float_left">
	        							<div class="comment float_right">
	        								<h6>Riad M</h6>
	        								<span>24/01/2017 at 1:59 am</span>
	        								<p>We invite you to tour our web site, send us an email, find us on social media, or give us a call to learn more about our unique angle on local, integrated, natural, sustainable and humane animal production systems</p>
	        								<a href="#" class="tran3s hvr-shutter-out-horizontal round-border">Reply</a>
	        							</div> <!-- End of .comment -->
	        							<div class="clear_fix border"></div>
	        					    </div><!-- /.single_comment -->
	        						<div class="single_comment clear_fix ">
	        							<img src="images/blog/comments.jpg" alt="images" class="img-responsive float_left">
	        							<div class="comment float_right">
	        								<h6>Gec Celic</h6>
	        								<span>24/01/2017 at 1:59 am</span>
	        								<p>Are you a Locavore?  A Locavore (n) is a person who attempts to buy and eat only foods grown, produced and processed close to their home.  Animals in the farm Meats program are born and raised in the Pacific Northwest </p>
	        								<a href="#" class="tran3s hvr-shutter-out-horizontal round-border">Reply</a>
	        							</div> <!-- End of .comment -->
	        							<div class="clear_fix border"></div>
	        						</div><!-- /.single_comment -->
	        						<div class="single_comment clear_fix border_fix">
	        							<img src="images/blog/comments.jpg" alt="images" class="img-responsive float_left">
	        							<div class="comment float_right">
	        								<h6>Gec Celic</h6>
	        								<span>24/01/2017 at 1:59 am</span>
	        								<p>Are you a Locavore?  A Locavore (n) is a person who attempts to buy and eat only foods grown, produced and processed close to their home.  Animals in the farm Meats program are born and raised in the Pacific Northwest </p>
	        								<a href="#" class="tran3s hvr-shutter-out-horizontal round-border">Reply</a>
	        							</div> <!-- End of .comment -->
	        						</div><!-- /.single_comment -->
	        					</div><!-- /.comments_area -->
	        					
	        					</div><!-- /.text-blog -->
							</div><!-- /.left-blog -->	.
							
					    </div><!-- /.blog-images-categories -->
					    <div class="categories-sidebar col-md-4 col-sm-6 col-xs-12">
						     <!-- /.search -->
					    <div class="left-about" style="height:800px;">
						    <h2>Latest News</h2>
							<marquee direction="up">
								<img src="images/m1.jpg" width="250" height="300" " >
								<br>	
								<img src="images/m2.jpg" width="250" height="300" " >
							</marquee >
							<label style="padding-left: 70px; color:gray;">	Aastha</label>
						</div><!-- /.left-about -->
						<div class="sidebar-recent-news">
							<h2>Some Recent Post</h2>
							<div class="single-recent-news clear_fix">
								<img src="images/blog/recent1.png" alt="image" class="float_left">
								<div class="post float_left">
									<h6><a href="#" class="tran3s">The Farm Organic Cuisine  team would like</a></h6>
									<p>January 27, 2017  by <span>Ghost</span></p>
								</div> <!-- /.post -->
							</div> <!-- /.single-recent-news -->
							<div class="single-recent-news clear_fix">
								<img src="images/blog/recent2.png" alt="image" class="float_left">
								<div class="post float_left">
									<h6><a href="#" class="tran3s">The Organic Farm Shop a social enterprise business</a></h6>
									<p>January 27, 2017  by <span>Mahfuz</span></p>
								</div> <!-- /.post -->
							</div> <!-- /.single-recent-news -->
							<div class="single-recent-news clear_fix">
								<img src="images/blog/recent3.png" alt="image" class="float_left">
								<div class="post float_left">
									<h6><a href="#" class="tran3s">Enjoy a different shopping experience.</a></h6>
									<p>January 27, 2017  by <span>Riad</span></p>
								</div> <!-- /.post -->
							</div> <!-- /.single-recent-news -->
						</div> <!-- /.sidebar-recent-news -->
					    <!-- /.left-about -->
						<div class="sidebar-keywords">
									<video width="350" height="500" controls>
  									<source src="images/video/wv.mp4" type="video/mp4">
  									
								</video>
								</div> <!-- /.sidebar-keywords -->
				        </div><!-- /categories-sidebar -->
					</div><!-- /row -->
				</div><!-- /container -->
			</article><!-- /news-vs2-page -->

			<!-- 
			=============================================
			partners section
			==============================================
			-->
			<div class="partners-section">
				<div class="container">
				    <div class="row">
						<div id="partners" class="owl-carousel owl-theme owl-partners">
							<div class="item"><img src="images/logo/prtn-logo-1.png" alt="partners"></div><!-- /.item-->
							<div class="item"><img src="images/logo/prtn-logo-2.png" alt="partners"></div><!-- /.item-->
							<div class="item"><img src="images/logo/prtn-logo-3.png" alt="partners"></div><!-- /.item-->
							<div class="item"><img src="images/logo/prtn-logo-4.png" alt="partners"></div><!-- /.item-->
						</div><!-- /.owl-partners-->
					</div><!-- /.row-->
				</div><!-- /.container-->
			</div><!-- /.partners-section-->

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
								
							</div> <!-- /.footer-logo -->
						</div> <!-- /.col- -->

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-Useful-Links">
								<h5>Important Links</h5>
							</div> <!-- /.footer-Useful-Links -->
						</div> <!-- /.col- -->

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-Update">
								<h5>News Update</h5>
								<div class="footer-News">
								    
                                </div> <!-- /.footer-News- -->
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
		<!-- bootstrap js -->
		<script src="resource/bootstrap/js/bootstrap.min.js"></script>
		<!-- Owl carousel css-->
		<script src="resource/OwlCarousel/dist/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="resource/jquery.mixitup.min.js"></script>
		<!-- wow Animation -->
		<script src="resource/WOW-master/dist/wow.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>		

	</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from unifytheme.com/html/farm/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 06:58:36 GMT -->
</html>