<?php 
ob_start();
$page_title = "Contact Page";
include "includes/header.php";


 ?>
 	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- contact-section -->
	<!--contact-->
	 <div class="w3layouts-contact-section">
	    <div class="container">
				<div class="agileits-contact-main">
					<div class="col-md-6 w3ls-map">
						<p class="loc">Our Location</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-6 wthree-contact-in">
						<p class="sed-para"> Contact Information</p>
						<p class="para1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
						<div class="w3-address"> 
								<address>
								  <strong>London Adress</strong><br>
								  Praisgate Homes LTD, 4 Kinglake Street<br>
								   London<br>	
								   SE17 2LH<br>								  
								  <abbr title="Phone">P:</abbr> +442077032572, +447469928016		
								  </address>
								<address>
								  <strong>Email</strong><br>
								  <a href="mailto:info(at)estategroup.com">info(at)estategroup.com</a>
							   </address>
						  </div>
					</div>
						<div class="clearfix"> </div>
			      </div>
				 <div class="agileinfo-contact-bottom">
		        <h3 class="text-center find">Drop Your Message</h3>
				<p class="contactpara1 text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				
							<form action="#" method="get">
			   <div class="col-md-6 w3layouts-contact-grid">
								<p class="your-para">Your Name:</p>
								<input type="text" placeholder="" name="your name" required="" />
								<p class="your-para">Your Mail:</p>
								<input type="text" placeholder="" name="email" required="" />
								<p class="your-para">Phone:</p>
								<input type="text" placeholder="" name="tel" required="" />
								<p class="your-para">Company Name:</p>
								<input type="text" placeholder="" name="company name" required="" />		
				</div>
				  <div class="col-md-6 w3layouts-contact-grid">
								<p class="your-para">Subject:</p>
								<input type="text" placeholder="" name="sub" required="" />
								<p class="your-para">Your Message:</p>
								<textarea placeholder="" name="Message" required=""></textarea>
								<div class="send">
									<input type="submit" value="Send" >
								</div>			
				</div>
				<div class="clearfix"> </div>
							</form>	
			</div>
	   </div>
     </div>
<!--//contact-->

<!-- contact-section  -->

	</div>
<!-- //main-content -->
<?php include "includes/footer.php"; ?>
</body>
</html>