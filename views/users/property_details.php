<?php 
ob_start();
$page_title = "properties Details";
include "includes/header.php";
	if (isset($_GET['hash_id'])) {
		$hash_id = $_GET['hash_id'];
	}
	$conn = new Database();
	$db = $conn->getConnection();
	$property = new Properties($db);
	$property->hash_id = $hash_id; 
	$stmt = $property->selectOne();
 	$row = $stmt->fetch(PDO::FETCH_BOTH);
 	extract($row);
 ?>

	
	<!-- main-content -->
	<div class="main-content">
		<!-- property-details -->
		<div class="agileits-property-details">
			<div class="container">
						<div class="col-md-6 w3ls-property-images">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<img class="img-responsive" src=<?php echo $file_path; ?> alt="" />
									</div>
								<!-- 	<div class="item">
										<img class="img-responsive" src="images/view-2.jpg" alt="" />
									</div>
									<div class="item">
										<img class="img-responsive" src="images/view-3.jpg" alt="" />
									</div> -->
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>
						</div>
						<div class="col-md-6 ins-details">
							<div class="ins-name">
								<h3><?php echo $property ?></h3>
									<h6 style="color:black"><?php echo $status; ?></h6>
									<h6 style="color:#a52a2a"><?php echo $category; ?></h6>
								<h6><span>&#8358;</span><?php echo $price ?></h6>
								<p><?php echo $description; ?></p>
								
							<!-- </div>
							<div class="span span1">
								<p class="left">Number of bedrooms</p>
								<p class="right">: 3</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span2">
								<p class="left">Number of bathrooms/ensuites</p>
								<p class="right">: 5</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span1">
								<p class="left">Parking</p>
								<p class="right">: Available</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span4">
								<p class="left">Size of garden/outside space</p>
								<p class="right">: 1,433 sqft</p>
								<div class="clearfix"></div>
							</div> -->
						</div>
						<div class="clearfix"></div>			
			</div>
		</div>
		<!-- property-details -->
		<!-- related-properties -->
		<!-- <div class="wthree-related-properties text-center">
			<div class="container">
				<h3 class="w3l-heading">Related Properties</h3>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img1.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img2.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img3.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img4.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="clearfix"></div>
			</div> -->
		</div>
		<!-- //related-properties -->
	</div>
<!-- //main-content -->
<?php include "includes/footer.php"; ?>
</body>
</html>