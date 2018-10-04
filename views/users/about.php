<?php 
ob_start();
$page_title = "About Us ";
include "includes/header.php";

	$conn = new Database();
	$db = $conn->getConnection();
	//instantiating new user.
	$admin = new Admin($db);
	$stmt = $admin->selectALL();


 ?>

	<!-- main-content -->
	<div class="main-content">
	<!-- about-page -->
		<!-- welcome -->
		<div class="welcome-top">
			<div class="container">
				<div class="col-md-6 welcome_top_left">
					<h3>WELCOME</h3>
					<h5>TO OUR PraiseGate Homes Limited </h5>
					<p>PraiseGate is a Real Estate Company that is ready to attend to all your property needs be it houses, lands, Estates, etc.</p>
				</div>
				<div class="col-md-6 welcome_top_right">
					<h3>WE'RE OPEN</h3>
					<h5>Please Feel free to contact us</h5>
					<div class="welcome_right_location">
						<div class="location_img">
							<img src="images/loc.jpg" alt="">
						</div>

						<div class="location">
							 <strong>London Adress</strong><br>
								<p>Praisgate Homes LTD, 4 Kinglake Street</p>
								 <strong>Nigeria Adress</strong><br>
								 <p>Suite S12, 2nd floor Feson Mail, Wuse Zone 4 Abuja</p>
								 
							<p class="location_text"><span class="glyphicon glyphicon-dashboard"></span>Mon to Fri 8:30am - 4:30pm</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- /welcome -->

		<!-- OUR AGENTS -->
		<section class="team-w3ls">
			<div class="container">
				<div class="agileits-team text-center">
					<h3>MEET OUR TEAM</h3>
					<p>Contact any of us by clicking the profile picture.</p>

					<?php  while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
							extract($row);
							if ($file_path == NULL) {
								$file_path = "images/agent-1.jpg";
							}
							
					?>		
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src=<?php echo $file_path; ?> alt="" />
								<div class="overlay">
									<h4><?php echo $name; ?></h4>
									<p> 
										<a href="#" data-toggle="modal" <?php echo "data-target= #".$hash_id; ?> >Contact me</a>
									</p> 
								</div>
						</div>
					</div>	
					<?php } ?>					
						
					<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-2.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent2">Contact me</a>
									</p> 
								</div>
						</div>
					</div>	
								
							
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-3.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent3">Contact me</a>
									</p> 
								</div>
						</div>
					</div>					
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-4.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent4">Contact me</a>
									</p> 
								</div>
						</div>
					</div>	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-5.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent5">Contact me</a>
									</p> 
								</div>
						</div>
					</div>	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-6.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent6">Contact me</a>
									</p> 
								</div>
						</div>
					</div>	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-7.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent7">Contact me</a>
									</p> 
								</div>
						</div>
					</div>	
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">
							<img class="img-responsive" src="images/agent-8.jpg" alt="" />
								<div class="overlay">
									<h4>Agent name</h4>
									<p> 
										<a href="#" data-toggle="modal" data-target="#agent8">Contact me</a>
									</p> 
								</div>
						</div>
					</div>	 -->
					<div class="clearfix"></div>
				</div>
			</div>
		</section>	
			<!-- modal-for agent1-details -->
			<?php  while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
							extract($row);
					?>	
				<div class="modal fade modal-about" id=<?php echo $hash_id; ?> tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span><?php echo $name; ?> </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li><?php echo $phonenumber; ?></li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"><?php  echo $email; ?></a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
					<?php } ?>
			<!-- //modal-for agent1-details -->
			<!-- modal-for agent2-details -->
				
<!-- 				<div class="modal fade modal-about" id="agent2" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left">
										<img src="images/agent-2.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>M. John Bean </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->

			<!-- //modal-for agent2-details -->
			<!-- modal-for agent3-details -->
<!-- 				<div class="modal fade modal-about" id="agent3" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-3.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>K. Smith </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->
			<!-- //modal-for agent3-details -->
			<!-- modal-for agent4-details -->
	<!-- 			<div class="modal fade modal-about" id="agent4" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-4.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>R. Micahel </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->
			<!-- //modal-for agent4-details -->
			<!-- modal-for agent5-details -->
		<!-- 		<div class="modal fade modal-about" id="agent5" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-5.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>Johnny Cage </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->
			<!-- //modal-for agent5-details -->
			<!-- modal-for agent6-details -->
<!-- 				<div class="modal fade modal-about" id="agent6" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left">
										<img src="images/agent-6.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>Thomson Doe </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->
			<!-- //modal-for agent6-details -->
			<!-- modal-for agent7-details -->
<!-- 				<div class="modal fade modal-about" id="agent7" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-7.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>P. Edward Crisp </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->
			<!-- //modal-for agent7-details -->
			<!-- modal-for agent8-details -->
	<!-- 			<div class="modal fade modal-about" id="agent8" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-8.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>S. Smith Kevin</span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div> -->
			<!-- //modal-for agent8-details -->
	<!-- //	OUR AGENTS -->
	<!-- //about-page -->
	</div>
<!-- //main-content -->
<?php include "includes/footer.php"; ?>
</body>
</html>