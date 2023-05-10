<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "classes/Database.php";
$database = new Database();
$database = $database->getConnection();

?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/main.css"> -->
	<link rel="stylesheet" href="A.fonts%2c%2c_icomoon%2c%2c_style.css%2bfonts%2c%2c_flaticon%2c%2c_font%2c%2c_flaticon.css%2bcss%2c%2c_tiny-slider.css%2bcss%2c%2c_glightbox.min.css%2bcss%2c%2c_aos.css%2bcss%2c%2c_style.css%2cMcc.CgyIJPOVwv.css.pagespeed.cf.0" />
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<title>Crea8t </title>
</head>

<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<div class="row">
					<div class="col-md-6 text-center order-1 order-md-2 mb-3 mb-md-0">
						<a href="index.php" class="logo m-0 text-uppercase">Crea8t</a>
					</div>
					<div class="col-md-3 order-3 order-md-1">
						<!-- <form action="#" class="search-form">
							<span class="icon-search2"></span>
							<input type="search" class="form-control" placeholder="Search...">
						</form> -->
					</div>
					<div class="col-md-3 text-end order-2 order-md-3 mb-3 mb-md-0">
						<div class="d-flex">
							<ul class="list-unstyled social me-auto">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block" data-toggle="collapse" data-target="#main-navbar">
								<span></span>
							</a>
						</div>
					</div>
				</div>
				<ul class="js-clone-nav d-none d-lg-inline-none text-start site-menu float-end">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="has-children">
						<a href="#">Categories</a>
						<?php include "cat_sidebar.php"; ?>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<div class="section pt-5 pb-0">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-7 text-center">
					<h2 class="heading">Trending</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="posts-slide-wrap">
						<div class="posts-slide" id="posts-slide">
							<?php

							$sql = "SELECT posts.id as posts_id, posts.title as title, posts.short_desc as short_desc, posts.long_desc as long_desc, posts.author as author, category.id as cat_id, category.category_name as category_name,
									DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, image.image_url as image_url FROM posts 
									INNER JOIN image ON posts.id = image.post_id
									INNER JOIN category ON posts.cat_id = category.id
									ORDER BY posts_id DESC
									LIMIT 4 ";
							$stmt = $database->prepare($sql);
							$stmt->execute();
							$data = $stmt->fetchAll(PDO::FETCH_OBJ);
							if ($stmt->rowCount() > 0) {
								foreach ($data as $results) {
							?>
									<div class="item">
										<div class="post-entry d-lg-flex">
											<div class="me-lg-5 thumbnail mb-4 mb-lg-0">
												<a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>">
													<img src="admin/post_images/<?php echo htmlentities($results->image_url) ?>" alt="Image" class="img-fluid" width="900" height="700">
												</a>
											</div>
											<div class="content align-self-center">
												<div class="post-meta mb-3">
													<a href="categories.php?cat_id=<?php echo htmlentities($results->cat_id) ?>" class="category"><?php echo htmlentities($results->category_name) ?></a> &mdash;
													<span class="date"><?php echo htmlentities($results->published_date) ?></span>
												</div>
												<h2 class="heading"><a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>"><?php echo htmlentities($results->title) ?></a></h2>
												<p><?php echo htmlentities($results->short_desc) ?>
												</p>
												<i class="post-author d-flex align-items-center">
													<div class="text">
														<strong><?php echo htmlentities($results->author) ?></strong>
														<span>Author</span>
													</div>
												</i>
											</div>
										</div>
									</div>
							<?php
								}
							} ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row g-5">
				<?php
				$sql = "SELECT posts.id as posts_id, posts.title as title, posts.short_desc as short_desc, posts.author as author, DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, category.id as cat_id, category.category_name as category_name, image.image_url as image_url FROM posts 
					INNER JOIN image ON posts.id = image.post_id 
					INNER JOIN category ON posts.cat_id = category.id
					WHERE post_id BETWEEN 5 AND 10
					ORDER BY posts.id DESC";
				$stmt = $database->prepare($sql);

				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_OBJ);
				if ($stmt->rowCount() > 0) {
					foreach ($data as $results) {
				?>
						<div class="col-lg-4">
							<div class="post-entry d-block small-post-entry-v">
								<div class="thumbnail">
									<a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>">
										<img src="admin/post_images/<?php echo htmlentities($results->image_url) ?>" alt="Image" width="280" height="190" class="img-fluid">
									</a>
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="categories.php?cat_id=<?php echo htmlentities($results->cat_id) ?>" class="category"><?php echo htmlentities($results->category_name) ?></a>
										&mdash;
										<span class="date"><?php echo htmlentities($results->published_date) ?></span>
									</div>
									<h2 class="heading mb-3"><a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>"><?php echo htmlentities($results->title) ?></a></h2>
									<p><?php echo htmlentities($results->short_desc) ?></p>
									<i class="post-author d-flex align-items-center">
										<div class="text">
											<strong><?php echo htmlentities($results->author) ?></strong>
											<span>Author</span>

										</div>
									</i>
								</div>
							</div>
						</div>
				<?php
					}
				} ?>
			</div>
		</div>
	</div>
	<div class="section" id="popular">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-7 text-center">
					<h2 class="heading">Most Popular Posts</h2>
					<?php
					$sql = "SELECT COUNT(*) as total from posts LEFT JOIN image ON posts.id = image.post_id WHERE image.image_url IS NULL AND posts.status = 'Active' AND views >= 10";
					$query = $database->prepare($sql);
					$query->execute();
					$data = $query->fetch();
					if ($query->rowCount() > 0) {
					?>
						<input type="hidden" value="<?php echo htmlentities($data['total']) ?>" id="count">
					<?php
					} ?>
				</div>
			</div>
		</div>
		<div class="most-popular-slider-wrap px-3 px-md-0">
			<div id="most-popular-nav">

				<span class="prev" data-controls="prev">Prev</span>
				<span class="next" data-controls="next">Next</span>
			</div>
			<div class="most-popular-slider" id="most-popular-center">
				<?php
				$sql = "SELECT posts.id as posts_id, posts.title as title, posts.views as views, posts.short_desc as short_desc, posts.author as author, DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, category.id as cat_id, category.category_name as category_name, image.image_url as image_url FROM posts 
					INNER JOIN image ON posts.id = image.post_id 
					INNER JOIN category ON posts.cat_id = category.id
					WHERE views >= 10
					ORDER BY posts.id LIMIT 5";
				$stmt = $database->prepare($sql);
				$stmt->bindParam(':post_id', $post_id, PDO::PARAM_STR);
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_OBJ);
				if ($stmt->rowCount() > 0) {
					foreach ($data as $results) {
				?>
						<div class="item">
							<div class="post-entry d-block small-post-entry-v">
								<div class="thumbnail">
									<input type="hidden" name="views" id="views" value="<?php echo htmlentities($results->views) ?>">
									<a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>">
										<img src="admin/post_images/<?php echo htmlentities($results->image_url) ?>" alt="Image" width="600" height="400" class="img-fluid">
									</a>
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="categories.php?cat_id=<?php echo htmlentities($results->cat_id) ?>" class="category"><?php echo htmlentities($results->category_name) ?></a>
										&mdash;
										<span class="date"><?php echo htmlentities($results->published_date) ?></span>
									</div>
									<h2 class="heading mb-3"><a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>"><?php echo htmlentities($results->title) ?></a></h2>
									<p><?php echo htmlentities($results->short_desc) ?></p>
									<i class="post-author d-flex align-items-center">

										<div class="text">
											<strong><?php echo htmlentities($results->author) ?></strong>
											<span>Author</span>
										</div>
									</i>
								</div>
							</div>
						</div>
				<?php
					}
				} ?>
			</div>
		</div>
	</div>
	<div class="section" id="cat_id">
		<div class="container">
			<?php
			$sql = "SELECT count(posts.cat_id) as total FROM posts 
					INNER JOIN category ON category.id = posts.cat_id
					WHERE posts.cat_id > 0
					GROUP BY posts.cat_id";
			$query = $database->prepare($sql);
			$query->execute();
			$data = $query->fetch();
			if ($query->rowCount() > 0) {
			?>
				<input type="hidden" value="<?php echo htmlentities($data['total']) ?>" id="count_cat">
			<?php
			} ?>
			<div class="row g-5">
				<div class="col-lg-6">
					<div class="row mb-4">
						<div class="col-12">
							<?php
							$sql = "SELECT count(posts.cat_id) as total, posts.id as posts_id, posts.cat_id as cat_id, category.category_name as category_name FROM posts 
							INNER JOIN category ON category.id = posts.cat_id
							GROUP BY posts.cat_id
							ORDER BY total DESC
							LIMIT 1";
							$stmt = $database->prepare($sql);
							$stmt->execute();
							$data = $stmt->fetchAll(PDO::FETCH_OBJ);
							if ($stmt->rowCount() > 0) {
								foreach ($data as $results) {
							?>
									<h2 class="h4 fw-bold"><?php echo htmlentities($results->category_name) ?></h2>
									<input type="hidden" name="" id="" value="">
							<?php
								}
							} ?>
						</div>
					</div>

					<div class="row justify-content-center">
						<?php
						$cat_id = $results->category_name;
						$sql = "SELECT posts.id as posts_id, posts.title as title, posts.short_desc as short_desc, posts.long_desc as long_desc, posts.author as author, category.id as cat_id, category.category_name as category_name,
						DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, image.image_url as image_url FROM posts 
						INNER JOIN image ON posts.id = image.post_id
						INNER JOIN category ON posts.cat_id = category.id
						WHERE category_name = :category_name
							LIMIT 3";
						$stmt = $database->prepare($sql);
						$stmt->bindParam(':category_name', $cat_id, PDO::PARAM_STR);
						$stmt->execute();
						$data = $stmt->fetchAll(PDO::FETCH_OBJ);
						if ($stmt->rowCount() > 0) {
							foreach ($data as $result_1) {
						?>
								<div class="col-lg-12">
									<div class="post-entry d-md-flex xsmall-horizontal mb-5">
										<div class="me-md-3 thumbnail mb-3 mb-md-0">
											<img src="admin/post_images/<?php echo htmlentities($result_1->image_url) ?>" alt="Image" class="img-fluid">
										</div>
										<div class="content">
											<div class="post-meta mb-1">
												<a href="categories.php?cat_id=<?php echo htmlentities($result_1->cat_id) ?>" class="category"><?php echo htmlentities($result_1->category_name) ?></a>&mdash;
												<span class="date"><?php echo htmlentities($result_1->published_date) ?></span>
											</div>
											<h2 class="heading"><a href="single.php?post_id=<?php echo htmlentities($result_1->posts_id) ?>"><?php echo htmlentities($result_1->title) ?></a></h2>
											<i class="post-author d-flex align-items-center">
												<div class="text">
													<strong><?php echo htmlentities($result_1->author) ?></strong>
													<span>Author</span>
												</div>
											</i>
										</div>
									</div>
								</div>
						<?php
							}
						} ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row mb-4">
						<div class="col-12">
							<?php
							$cat_id = $results->category_name;
							$sql = "SELECT count(posts.cat_id) as total, posts.id as posts_id, posts.cat_id as cat_id, category.category_name as category_name FROM posts 
							INNER JOIN category ON category.id = posts.cat_id
							WHERE category_name != :category_name
							GROUP BY posts.cat_id
							ORDER BY total DESC
							LIMIT 1";
							$stmt = $database->prepare($sql);
							$stmt->bindParam(':category_name', $cat_id, PDO::PARAM_STR);
							$stmt->execute();
							$data = $stmt->fetchAll(PDO::FETCH_OBJ);
							if ($stmt->rowCount() > 0) {
								foreach ($data as $result) {
							?>
									<h2 class="h4 fw-bold"><?php echo htmlentities($result->category_name) ?></h2>
							<?php
								}
							} ?>
						</div>
					</div>
					<div class="row justify-content-center">
						<?php
						$cat_id = $result->category_name;
						// echo "<script>alert('$cat_id')</script>";
						$sql = "SELECT posts.id as posts_id, posts.title as title, posts.short_desc as short_desc, posts.long_desc as long_desc, posts.author as author, category.id as cat_id, category.category_name as category_name,
						DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, image.image_url as image_url FROM posts 
						INNER JOIN image ON posts.id = image.post_id
						INNER JOIN category ON posts.cat_id = category.id
						WHERE category_name = :category_name
							LIMIT 3";
						$stmt = $database->prepare($sql);
						$stmt->bindParam(':category_name', $cat_id, PDO::PARAM_STR);
						$stmt->execute();
						$data = $stmt->fetchAll(PDO::FETCH_OBJ);
						if ($stmt->rowCount() > 0) {
							foreach ($data as $result_2) {
						?>
								<div class="col-lg-12">
									<div class="post-entry d-md-flex xsmall-horizontal mb-5">
										<div class="me-md-3 thumbnail mb-3 mb-md-0">
											<img src="admin/post_images/<?php echo htmlentities($result_2->image_url) ?>" alt="Image" class="img-fluid">
										</div>
										<div class="content">
											<div class="post-meta mb-1">
												<a href="categories.php?cat_id=<?php echo htmlentities($result_2->cat_id) ?>" class="category"><?php echo htmlentities($result_2->category_name) ?></a>&mdash;
												<span class="date"><?php echo htmlentities($result_2->published_date) ?></span>
											</div>
											<h2 class="heading"><a href="single.php?post_id=<?php echo htmlentities($result_2->posts_id) ?>"><?php echo htmlentities($result_2->title) ?></a></h2>
											<i class="post-author d-flex align-items-center">
												<div class="text">
													<strong><?php echo htmlentities($result_2->author) ?></strong>
													<span>Author</span>
												</div>
											</i>
										</div>
									</div>
								</div>
						<?php
							}
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-5 bg-light mx-md-3 sec-subscribe">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="h4 fw-bold">Subscribe to newsletter</h2>
				</div>
			</div>
			<form method="POST" class="row">
				<div class="col-md-8">
					<div class="mb-3 mb-md-0">
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
					</div>
				</div>
				<div class="col-md-4 d-grid">
					<button type="submit" name="add_email" id="add_email" class="btn btn-primary" value="Subscribe">Subscribe</button>
				</div>
			</form>
		</div>
	</div>
	<div class="site-footer">
		<div class="container">
			<div class="row justify-content-center copyright">
				<div class="col-lg-7 text-center">
					<div class="widget">
						<ul class="social list-unstyled">
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-youtube-play"></span></a></li>
						</ul>
					</div>
					<div class="widget">
						<p>Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved |
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="overlayer"></div>
		<div class="loader">
			<div class="spinner-border" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/glightbox.min.js%2baos.js%2bnavbar.js%2bcounter.js%2bcustom.js.pagespeed.jc.B7bFTsJZUK.js">
		</script>
		<script>
			eval(mod_pagespeed_KpCH1a$C_m);
		</script>
		<script>
			eval(mod_pagespeed_Ej3jj9tqUo);
		</script>
		<script>
			eval(mod_pagespeed_Pkx$Oz4Gi9);
		</script>
		<script>
			eval(mod_pagespeed_9lpIcAXJZV);
		</script>
		<script>
			eval(mod_pagespeed_GIrE68D1a2);
		</script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71f592d729c17501","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
		<script type="text/javascript">
			// Add Email                                                        
			$(document).ready(function($) {

				$("#add_email").click(function(e) {

					e.preventDefault();

					// Email required
					var email = $("#email").val();
					if (email == "") {
						alert("Email is required");
						$("input#email").focus();
						return false;
					}

					$.ajax({
						type: "POST",
						url: "admin/process.php",
						data: {
							action: "newsletter_subscription",
							email: email,
						},
						beforeSend: function() {
							$("#add_email").val("Processing...");
						},
						success: function(response) {
							if (response == true) {
								alert("Email Successfully Subscribed");
								location.reload();

							} else if (response == false) {
								alert("Error, Incorrect Details");
								$("#add_email").val("Subscribe");
							}
						},
					});
				});
				return false;
			});

			$(document).ready(function($) {
				var count = $('#count').val();
				if (count > 0) {
					$("#popular").hide();
				}
			});

			$(document).ready(function($) {
				var count = $('#count_cat').val();
				if (count < 1) {
					$("#cat_id").hide();
				}
			});
		</script>
</body>

</html>