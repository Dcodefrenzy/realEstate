<?php 
ob_start();
$page_title = "Properties";
include "includes/header.php"; 


	$conn = new Database();
	$db = $conn->getConnection();
	$property = new Properties($db);
	$stmt = $property->selectALL();
	
				
		
				

?>
	<!-- main-content -->
	<div class="main-content">
		<!-- gallery -->
	<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery_gds">
			<ul class="simplefilter ">

                <li class="active" data-filter="all">All</li>
                <li data-filter="1">Commercial</li>
                <li data-filter="2">Residential</li>
                <li data-filter="3">Luxury</li>
            </ul> 
            <div class="filtr-container " style="padding: 0px; position: relative; height: 858px;">
             	<?php while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
							extract($row);
			 		$des = previewBody($description, 50);
						 ?>
            	
				<div class="col-md-4 col-ms-6 jm-item first filtr-item"  data-sort="Busy streets" >
					<div class="jm-item-wrapper">
					
							<div class="jm-item-image">
								<div style="background:url('<?php echo $file_path?>'); height:200px; width: 400px; background-size: cover; background-position: center; background-repeat: no-repeat;" class="">
								</div>
								<span class="jm-item-overlay"> </span>
								<div class="jm-item-button"><a <?php echo "href=property_details?hash_id=".$hash_id."'"; ?>>View Details</a></div>
							</div>	
							<div class="jm-item-title"><span>&#8358;</span><?php echo $price; ?></div>
							<h4 align="center" style="color: #06a598"><b><?php echo $property; ?></b></h4>
							<p class="w3ls-p-text" style="color:#a52a2a"><b><?php echo "Category: ".$category; ?></b></p>
							<p class="w3ls-p-text" style="color:#232323"><b><?php echo "Property Name: ".$status; ?></b></p>
							<p class="w3ls-p-text" style="color:#232323" ><?php echo $des; ?></p>
						
					</div>
				</div>
				<?php } ?>

				
				<!-- <div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 5" data-sort="Luminous night" style="opacity: 1; transform: scale(1) translate3d(380px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g2.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>380</div>
						<a class="agile-its-property-title" href="property-details.html">Property 2</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 4" data-sort="City wonders" style="opacity: 1; transform: scale(1) translate3d(760px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g3.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>410</div>
						<a class="agile-its-property-title" href="property-details.html">Property 3</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3" data-sort="In production" style="opacity: 1; transform: scale(1) translate3d(0px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g4.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>580</div>
						<a class="agile-its-property-title" href="property-details.html">Property 4</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="3, 4" data-sort="Industrial site" style="opacity: 1; transform: scale(1) translate3d(380px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g5.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>310</div>
						<a class="agile-its-property-title" href="property-details.html">Property 5</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 4" data-sort="Peaceful lake" style="opacity: 1; transform: scale(1) translate3d(760px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g6.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>810</div>
						<a class="agile-its-property-title" href="property-details.html">Property 6</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3" data-sort="City lights" style="opacity: 1; transform: scale(1) translate3d(0px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g7.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>599</div>
						<a class="agile-its-property-title" href="property-details.html">Property 7</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 4" data-sort="Dreamhouse" style="opacity: 1; transform: scale(1) translate3d(380px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g8.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>699</div>
						<a class="agile-its-property-title" href="property-details.html">Property 8</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>-->
	<!-- 			<div class="col-md-4 col-ms-6 jm-item first filtr-item"  data-sort="Dreamhouse" style="opacity: 1; transform: scale(1) translate3d(760px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g3.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.html">View Details</a></div>
						</div>	
						<div class="jm-item-title"><span>&#8358;</span>699</div>
						<a class="agile-its-property-title" href="property-details.html">Property 9</a>
						<p class="w3ls-p-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>  -->
               <div class="clearfix"> </div>

               
            </div>


		</div>


	</div>	

	</div>

	<!--//gallery-->
	</div>
<!-- //main-content -->
<?php include "includes/footer.php"; ?>
</body>
</html>