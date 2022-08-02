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
					<li><a href="index.php">Home</a></li>
					<li class="has-children active">
						<a>Categories</a>
						<?php include "cat_sidebar.php"; ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="section pt-5 pb-0">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-9">
					<span class="fw-normal text-uppercase d-block mb-1">Categories</span>
					<?php
					$cat_id = intval($_GET['cat_id']);
					$sql = "SELECT category_name from CATEGORY WHERE id = :cat_id";
					$query = $database->prepare($sql);
					$query->bindParam(':cat_id', $cat_id, PDO::PARAM_STR);
					$query->execute();
					$data = $query->fetch();
					if ($query->rowCount() > 0) {
					?>
						<h2 class="heading"><?php echo htmlentities($data['category_name']) ?></h2>
					<?php
					} ?>
				</div>
				<?php
				$cat_id = intval($_GET['cat_id']);
				$sql = "SELECT category.id, category.category_name as cat_name, posts.status, posts.id as post_id, title, short_desc, long_desc, author, posts.views as views, DATE_FORMAT(posts.created_at, '%M %d, %Y') as published_date, users.username as username, users.id as uploaded_by  
			        FROM posts 
					INNER JOIN users ON posts.uploaded_by = users.id 
					INNER JOIN category ON posts.cat_id = category.id 
					WHERE posts.status = 'Active' AND category.id = :cat_id 
					ORDER BY posts.id DESC";
				$query = $database->prepare($sql);
				$query->bindParam(':cat_id', $cat_id, PDO::PARAM_STR);
				$query->execute();
				$data = $query->fetchAll(PDO::FETCH_OBJ);
				$cnt = 1;
				if ($query->rowCount() > 0) {
					foreach ($data as $result) {
				?>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="post-entry d-md-flex small-horizontal mb-5">
						<div class="me-md-5 thumbnail mb-3 mb-md-0">
							<?php
							$post_id = $result->post_id;
							$sql = "SELECT * FROM image INNER JOIN posts ON image.post_id = posts.id WHERE post_id = :post_id AND image.short_desc = 'Main Thumb'";
							$query = $database->prepare($sql);
							$query->bindParam(':post_id', $post_id, PDO::PARAM_STR);
							$query->execute();
							$data = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($data as $results) {
							?>
									<img src="admin/post_images/<?php echo htmlentities($results->image_url) ?>" alt="Image" class="img-fluid">
						</div>
				<?php
								}
							} ?>
				<div class="content">
					<div class="post-meta mb-3">
						<i class="category"><?php echo htmlentities($result->cat_name) ?></i>
						&mdash;
						<span class="date"><?php echo htmlentities($result->published_date) ?></span>
					</div>
					<h2 class="heading"><a href="single.php?post_id=<?php echo htmlentities($result->post_id) ?>"><?php echo htmlentities($result->title) ?></a></h2>
					<p><?php echo htmlentities($result->short_desc) ?></p>
					<i class="post-author d-flex align-items-center">
						<!-- <div class="author-pic">
							<img src="author.png" alt="Image">
						</div> -->
						<div class="text">
							<strong><?php echo htmlentities($result->author) ?></strong>
							<?php
							$author = $result->author;
							$sql = "SELECT COUNT(*) as total FROM posts WHERE author = :author";
							$stmt = $database->prepare($sql);
							$stmt->bindParam(':author', $author, PDO::PARAM_STR);
							$stmt->execute();
							$data = $stmt->fetchAll(PDO::FETCH_OBJ);
							if ($stmt->rowCount() > 0) {
								foreach ($data as $results) {
							?>
									<span>Author, <?php echo htmlentities($results->total) ?> published post</span>
							<?php
								}
							} ?>
						</div>
					</i>
				</div>
					</div>
				</div>
		<?php $cnt++;
					}
				} ?>

			</div>
		</div>

	</div>
	<div class="row align-items-center justify-content-center py-5">
		<div class="col-lg-6 text-center">
			<div class="custom-pagination">
				<a href="#">1</a>
				<a href="#" class="active">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
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
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71f592dacf89407e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
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
		</script>
</body>

</html>