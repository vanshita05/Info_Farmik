
				<br><br>

			<center>	<section class="">
					<div class="container">
						<div class="row">
							<center><div class="col-md-12 ">
								
												<h4>Your Profile</h4></div></center>
												<div class="container box" >

				<center><row>
					<div class="col-lg-12"><br>
							   <img src="images\gallary\a1.jpg"  class="img-circle img-thumnail color-primrry"height="200" width="200">
					  </div>

												<!--<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="gallary/a1.jpg"></a></div>-->
    </div>
    							
											</div>
										</div>
										
<!--value side start-->
<br>
	<div class="row" >

		<div class=" col-md-12">
			<div class="col-md-6 col-lg-6 col-md-offset-3">
						<table class="table bootstrap-datatable countries" style="text-align: center;">	
								<form>
								<?php
								$id = $_GET['id'];
								$qry="SELECT * FROM `expert_tbl` WHERE `eid`='".$id."'";
				$rs = mysqli_query($con,$qry);
				?>
				        <tbody>

				            <?php
				            if(mysqli_num_rows($rs)>0)
				            {					
				                while($row=mysqli_fetch_assoc($rs))
				                {

				            ?>
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
				    				<td><?php echo $row['specializedin']?></td>
				    			</tr>
				    			<tr>
				    				<td>Email</td>
				    				<td><?php echo $row['email']?></td>
				    			</tr>
				    			<tr>
				    				<td>Email</td>
				    				<td><?php echo $row['email']?></td>
				    			</tr>
				    			<tr>
				    				<td>Email</td>
				    				<td><?php echo $row['email']?></td>
				    			</tr>
				    		</tbody>
				            
																	</form></table>

													<?php
												}
											}
											?>
										</div>
												</div>
											</div>




<!--value side finish-->





													<div class="form-group row">
														<div class="offset-4 col-8">
															<input type="submit" name="submit" class="btn btn-primary" value="Ask Question" >
														</div>
													</div>
												</form>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
