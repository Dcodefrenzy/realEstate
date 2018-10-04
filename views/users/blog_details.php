<?php 
ob_start();
$page_title = "Blog Details";
include "includes/header.php";
	if (isset($_GET['hash_id'])) {
		$hash_id = $_GET['hash_id'];
	}
	$conn = new Database();
	$db = $conn->getConnection();
	$blog = new Blog($db);
	$blog->hash_id = $hash_id;
	$stmt = $blog-> selectOne();
	$row = $stmt->fetch(PDO::FETCH_BOTH);
 	extract($row);
 ?>

	<!-- main-content -->
	<div class="main-content">
		<!-- blogs -->
		<div class="agileits-blog-posts">
		<div class="container">
			<div class="blog col-md-9">
				<!-- Single-page -->
					<div class="blog-to1 service_info">		
					
						<img class="img-responsive sin-on" src=<?php echo $file_path ?> alt="" />
							<div class="blog-top">
							<div class="blog-left">
								<span><?php echo $date_created; ?></span>
							</div>
							<div class="top-blog">
								<a class="fast" href="#"><?php  echo $title; ?></a>
								<p>Posted by <a href="#"><?php echo $author; ?></a> 
								<p class="sed"><?php echo $body; ?></p> 
									 
							<!-- 	<div class="col-md-6 md-in">
						<ul class="grid-part">
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Sed ut perspiciatis unde omnis</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Lorem ipsum dolor sit amet,  </a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Sed ut perspiciatis unde omnis</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Lorem ipsum dolor sit amet,  </a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Sed ut perspiciatis unde omnis</a></li>
						</ul>
						</div>
						<div class="col-md-6 md-in">
						<ul class="grid-part">
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Sed ut perspiciatis unde omnis</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Lorem ipsum dolor sit amet,  </a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Sed ut perspiciatis unde omnis</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Lorem ipsum dolor sit amet,  </a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Sed ut perspiciatis unde omnis</a></li>
						</ul>
						</div> -->
						<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>	
		<div class="single-middle">
			
			<h3>3 Comments</h3>
				<div class="media">
				  <div class="media-left">
					<a href="#">
					  <img class="media-object" src="images/co.png" alt="">
					</a>
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">Richard Spark</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit .</p>
				  </div>
				</div>
				<div class="media in-media">
				  <div class="media-left">
					<a href="#">
					  <img class="media-object" src="images/co.png" alt="">
					</a>
				  </div>
				   <div class="media-body">
					<h4 class="media-heading"><a href="#">Joseph Goh</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit .</p>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
					<a href="#">
					  <img class="media-object" src="images/co.png" alt="">
					</a>
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">Melinda Dee</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit .</p>
				  </div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="single-bottom">
		
			<h3>Leave your Comment</h3>
				<form action="#" method="post">
						<div class="col-md-4 comment">
						<input type="text" placeholder="Name" name="name" required="" />
						</div>
						<div class="col-md-4 comment">
						<input type="text" placeholder="Email" name="email" required="" />
						</div>
						<div class="col-md-4 comment">
						<input type="text" placeholder="Subject" name="sub" />
						</div>
						<div class="clearfix"> </div>
						<textarea placeholder="Message" name="Message" required=""></textarea>
						
							<input type="submit" value="Send" >
						
				</form>
			</div>
<!-- //Single-page -->
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
		 <!--  <div class="w3l-blog-list">
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
	</div>
	<!-- //blogs -->
	</div>	
<!-- //main-content -->
<?php  include "includes/footer.php"; ?>
</body>
</html>