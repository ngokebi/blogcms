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
	<link rel="stylesheet" href="A.fonts%2c%2c_icomoon%2c%2c_style.css%2bfonts%2c%2c_flaticon%2c%2c_font%2c%2c_flaticon.css%2bcss%2c%2c_tiny-slider.css%2bcss%2c%2c_glightbox.min.css%2bcss%2c%2c_aos.css%2bcss%2c%2c_style.css%2cMcc.CgyIJPOVwv.css.pagespeed.cf.0" />
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<title>Crea8t</title>
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
						<form action="#" class="search-form">
							<span class="icon-search2"></span>
							<input type="search" class="form-control" placeholder="Search...">
						</form>
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
						<a href="categories.php">Categories</a>
						<?php include "cat_sidebar.php"; ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="section post-section pt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<!-- <div class="text-center">
						<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image" class="author-pic img-fluid rounded-circle mx-auto">
					</div> -->
					<?php
					$post_id = intval($_GET['post_id']);
					$sql = "SELECT posts.id, posts.title as title, posts.short_desc as short_desc, posts.views as views, posts.long_desc as long_desc, posts.author as author, DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, posts.cat_id as cat_id, image.image_url as image_url FROM posts 
					INNER JOIN image ON posts.id = image.post_id WHERE posts.id = :post_id";
					$stmt = $database->prepare($sql);
					$stmt->bindParam(':post_id', $post_id, PDO::PARAM_STR);
					$stmt->execute();
					$data = $stmt->fetchAll(PDO::FETCH_OBJ);
					if ($stmt->rowCount() > 0) {
						foreach ($data as $results) {
					?>
							<input type="hidden" name="views" id="views" value="<?php echo htmlentities($results->views) ?>">
							<span class="d-block text-center"><?php echo htmlentities($results->author) ?></span>
							<span class="date d-block text-center small text-uppercase text-black-50 mb-5"><?php echo htmlentities($results->published_date) ?></span>
							<h2 class="heading text-center" id="see"><?php echo htmlentities($results->title) ?></h2>
							<p class="lead mb-4 text-center"><?php echo $results->short_desc ?></p>
							<img src="admin/post_images/<?php echo htmlentities($results->image_url) ?>" alt="Image" class="img-fluid rounded mb-4" width="800" height="700">
							<p><?php echo $results->long_desc ?></p>
							<!-- <blockquote>
								<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
							</blockquote> -->
							<!-- <div class="row g-1 my-5">
								<div class="col-lg-4">
									<a href="images/post_lg_1.jpg" class="glightbox"><img src="images/xpost_lg_1.jpg.pagespeed.ic.vC5886c_pL.jpg" alt="Image" class="img-fluid rounded"></a>
								</div>
								<div class="col-lg-4">
									<a href="images/post_lg_2.jpg" class="glightbox"><img src="images/xpost_lg_2.jpg.pagespeed.ic.YbC8FwTKmr.jpg" alt="Image" class="img-fluid rounded"></a>
								</div>
								<div class="col-lg-4">
									<a href="images/post_lg_3.jpg" class="glightbox"><img src="images/xpost_lg_3.jpg.pagespeed.ic.qhXWgmNnIn.jpg" alt="Image" class="img-fluid rounded"></a>
								</div>
								<div class="col-lg-4">
									<a href="images/post_lg_4.jpg" class="glightbox"><img src="images/xpost_lg_4.jpg.pagespeed.ic.oJIp7wddWl.jpg" alt="Image" class="img-fluid rounded"></a>
								</div>
								<div class="col-lg-4">
									<a href="images/post_lg_1.jpg" class="glightbox"><img src="images/xpost_lg_1.jpg.pagespeed.ic.vC5886c_pL.jpg" alt="Image" class="img-fluid rounded"></a>
								</div>
								<div class="col-lg-4">
									<a href="images/post_lg_2.jpg" class="glightbox"><img src="images/xpost_lg_2.jpg.pagespeed.ic.YbC8FwTKmr.jpg" alt="Image" class="img-fluid rounded"></a>
								</div>
							</div>
							<p>
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
							</p> -->
					<?php }
					} ?>

					<div class="row mt-5 pt-5 border-top">
						<div class="col-12">
							<span class="fw-bold text-black small mb-1">Share</span>
							<ul class="social list-unstyled">
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="heading">Related</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
				$post_id = intval($_GET['post_id']);
				$cat_id = $results->cat_id;
				// echo "<script>alert('$cat_id')</script>";
				$sql = "SELECT posts.id as posts_id, posts.title as title, posts.short_desc as short_desc, posts.long_desc as long_desc, posts.author as author, category.category_name as category_name,
				DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, image.image_url as image_url FROM posts 
				INNER JOIN image ON posts.id = image.post_id
				INNER JOIN category ON posts.cat_id = category.id
				WHERE posts.id != :post_id AND posts.cat_id = :cat_id
				ORDER BY posts_id DESC
				LIMIT 4 ";
				$stmt = $database->prepare($sql);
				$stmt->bindParam(':post_id', $post_id, PDO::PARAM_STR);
				$stmt->bindParam(':cat_id', $cat_id, PDO::PARAM_STR);
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_OBJ);
				if ($stmt->rowCount() > 0) {
					foreach ($data as $results) {
				?>
						<div class="col-lg-12">
							<div class="post-entry d-md-flex small-horizontal mb-5">
								<div class="me-md-5 thumbnail mb-3 mb-md-0">
									<input type="hidden" name="id" id="post_id" value="<?php echo intval($_GET['post_id']) ?>">
									<img src="admin/post_images/<?php echo htmlentities($results->image_url) ?>" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-3">
										<a href="#" class="category"><?php echo htmlentities($results->category_name) ?></a> &mdash;
										<span class="date"><?php echo htmlentities($results->published_date) ?></span>
									</div>
									<h2 class="heading"><a href="single.php?post_id=<?php echo htmlentities($results->posts_id) ?>"><?php echo htmlentities($results->title) ?></a></h2>
									<p><?php echo htmlentities($results->short_desc) ?></p>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="text">
											<strong><?php echo htmlentities($results->author) ?></strong>
											<?php
											$author = $results->author;
											$sql = "SELECT COUNT(*) as total FROM posts WHERE author = :author";
											$stmt = $database->prepare($sql);
											$stmt->bindParam(':author', $author, PDO::PARAM_STR);
											$stmt->execute();
											$data = $stmt->fetchAll(PDO::FETCH_OBJ);
											if ($stmt->rowCount() > 0) {
												foreach ($data as $result) {
											?>
													<span>Author, <?php echo htmlentities($result->total) ?> published post</span>
											<?php
												}
											} ?>
										</div>
									</a>
								</div>
							</div>
						</div>
				<?php
					}
				} ?>
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
		<script src="js/glightbox.min.js%2baos.js%2bnavbar.js%2bcounter.js%2bcustom.js.pagespeed.jc.B7bFTsJZUK.js"></script>
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
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71f592cd69fc7501","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
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
								$("#email").val("");

							} else if (response == false) {
								alert("Error, Incorrect Details");
								$("#add_email").val("Subscribe");
							}
						},
					});
				});
				return false;
			});

			$(document).ready(function() {

				var id = $("#post_id").val();
				$.ajax({
					type: "POST",
					url: "admin/process.php",
					data: {
						action: "viewPost",
						id: id,
					},
					success: function(response) {
						// alert(response);
						return true;
					}
				});
			});

				$(document).ready(function() {

				var id = $("#post_id").val();
				var views = $("#views").val();
				$.ajax({
					type: "POST",
					url: "admin/process.php",
					data: {
						action: "addView",
						id: id,
						views: views
					},
					success: function(response) {
						if (response == true) {
							return true;
						} else {
							return false;
						}
						// alert(response);
					}
				});
			});
		</script>
</body>

</html>