<?php 
ob_start();
$page_title = "Blog";
include "includes/header.php";
	$conn = new Database();
	$db = $conn->getConnection();
	$blog = new Blog($db);
	$stmt = $blog-> selectAll();
 ?>

	
	<!-- main-content -->
	<div class="main-content">
		<!-- blogs -->
		<div class="agileits-blog-posts">
		<div class="container">
			<div class="blog col-md-9">
				<div class="single-inline">
					<?php 	while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { 
						extract($row);
						$bd = previewBody($body, 50);
						?>
					<div class="w3layouts-blog-to">			

						<a <?php echo "href=blog_details?hash_id=".$hash_id.""; ?>><img class="img-responsive sin-on" src=<?php echo $file_path; ?> alt="" /></a>
							<div class="blog-top">
							<div class="blog-left">
								<b>14</b>
								<span>Feb</span>
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html"><?php echo $title; ?></a>
								<p>Posted by <a href="single.html"><?php echo $author; ?></a>
								<p class="sed"><?php echo $bd; ?></p> 
								<a  <?php echo "href=blog_details?hash_id=".$hash_id."'"; ?>  class="more">Readmore<span> </span></a>
								
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<?php } ?>
						<!-- <div class="w3layouts-blog-to">							
							<a href="single.html"><img class="img-responsive sin-on" src="images/b2.jpg" alt="" /></a>
								<div class="blog-top">
								<div class="blog-left">
									<b>19</b>
									<span>July</span>
								</div>
								<div class="top-blog">
									<a class="fast" href="single.html">Blog Post Title 2</a>
									<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
									<p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
										 when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
										 and typesetting industry.</p> 
									<a  href="single.html" class="more">Readmore<span> </span></a>
									
								</div>
								<div class="clearfix"> </div>
						</div>
						</div>
						<div class="w3layouts-blog-to">		
					
						<a href="single.html"><img class="img-responsive sin-on" src="images/b3.jpg" alt="" /></a>
							<div class="blog-top">
							<div class="blog-left">
								<b>28</b>
								<span>July</span>
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html">Blog Post Title 3</a>
								<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
								<p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
									 when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
									 and typesetting industry.</p> 
								<a  href="single.html" class="more">Readmore<span> </span></a>
								
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>
					<div class="w3layouts-blog-to">		
					
						<a href="single.html"><img class="img-responsive sin-on" src="images/b4.jpg" alt="" /></a>
							<div class="blog-top">
							<div class="blog-left">
								<b>45</b>
								<span>July</span>
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html">Blog Post Title 4</a>
								<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
								<p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
									 when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
									 and typesetting industry.</p> 
								<a  href="single.html" class="more">Readmore<span> </span></a>
								
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>
					<div class="w3layouts-blog-to">							
							<a href="single.html"><img class="img-responsive sin-on" src="images/b5.jpg" alt="" /></a>
								<div class="blog-top">
								<div class="blog-left">
									<b>25</b>
									<span>Jan</span>
								</div>
								<div class="top-blog">
									<a class="fast" href="single.html">Blog Post Title 5</a>
									<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
									<p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
										 when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
										 and typesetting industry.</p> 
									<a  href="single.html" class="more">Readmore<span> </span></a>
									
								</div>
								<div class="clearfix"> </div>
						</div>
						</div>
						<div class="w3layouts-blog-to">		
					
						<a href="single.html"><img class="img-responsive sin-on" src="images/b6.jpg" alt="" /></a>
							<div class="blog-top">
							<div class="blog-left">
								<b>15</b>
								<span>Sep</span>
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html">Blog Post Title 6</a>
								<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
								<p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
									 when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
									 and typesetting industry.</p> 
								<a  href="single.html" class="more">Readmore<span> </span></a>
								
							</div>
							<div class="clearfix"> </div>
					</div>
					</div> -->
					<div class="clearfix"> </div>
				</div>
				<!-- <nav>
				  <ul class="pagination agileinfo-blog-pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav> -->
			</div>
			<div class="col-md-3 agile-blog-sidebar">
		<!-- <div class="w3l-blog-list">
	     	<h4>Categories</h4>
			<ul>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Lorem Ipsum is simply</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Contrary to popular belief</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>It is a long established</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>There are many variations</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>But I must explain to you</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>At vero eos et accusamus</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>On the other hand</a></li>
			</ul>
			
			<div class="clearfix"> </div>
		 </div> -->
		  <!-- <div class="w3l-blog-list">
	     	<h4>Archives List</h4>
			<ul>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>July (15)</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Oct (20)</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>November (8)</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>December (25)</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>August (9)</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>July (15)</a></li>
				<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Mar (25)</a></li>
			</ul>
		 </div> -->
		 <div class="blog-list1">
	     	<h4>Popular Posts</h4>
			<div class="blog-list-top">
				<div class="blog-img">
					<a href="blog_single.html"><img class="img-responsive" src="images/bo.jpg" alt=""></a>
				</div>
				<div class="blog-text">
					<p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="link">
						Sep 14, 2016
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-list-top">
				<div class="blog-img">
					<a href="blog_single.html"><img class="img-responsive" src="images/bo1.jpg" alt=""></a>
				</div>
				<div class="blog-text">
					<p><a href="blog_single.html">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="link">
						Aug 8, 2016
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-list-top">
				<div class="blog-img">
					<a href="blog_single.html"><img class="img-responsive" src="images/bo2.jpg" alt=""></a>
				</div>
				<div class="blog-text">
					<p><a href="blog_single.html">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="link">
						July 13, 2016
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-list-top">
				<div class="blog-img">
					<a href="blog_single.html"><img class="img-responsive" src="images/bo3.jpg" alt=""></a>
				</div>
				<div class="blog-text">
					<p><a href="blog_single.html">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="link">
						Feb 25 , 2016
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
		 <!--  <div class="blog-list2">
	     	<h4>Tags</h4>
			<ul>
				<li><a href="#">Rental</a></li>
				<li><a href="#">Appartments</a></li>
				<li><a href="#">Selling</a></li>
				<li><a href="#">Buying</a></li>
				<li><a href="#">Real Estate</a></li>
				<li><a href="#">mortgage</a></li>
				<li><a href="#">Properties</a></li>
				<li><a href="#">Plat</a></li>
				<li><a href="#">Asset</a></li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Landscape</a></li>
			</ul>
		 </div> -->
	 </div>
		<div class="clearfix"> </div>
		</div>
	<!-- //blogs -->
	</div>
	</div>
<!-- //main-content -->
<?php include "includes/footer.php"; ?>
</body>
</html>