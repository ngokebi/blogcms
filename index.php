<?php
error_reporting(0);

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
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<link rel="stylesheet" href="A.fonts%2c%2c_icomoon%2c%2c_style.css%2bfonts%2c%2c_flaticon%2c%2c_font%2c%2c_flaticon.css%2bcss%2c%2c_tiny-slider.css%2bcss%2c%2c_glightbox.min.css%2bcss%2c%2c_aos.css%2bcss%2c%2c_style.css%2cMcc.CgyIJPOVwv.css.pagespeed.cf.0" />
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
<<<<<<< HEAD
						<?php include "cat_sidebar.php"; ?>
=======
						<ul class="dropdown">
							<?php
							$sql = "SELECT * FROM category WHERE status = 'Active'";
							$query = $database->prepare($sql);
							$query->execute();
							$data = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($data as $result) {
							?>
									<li><a href="categories.php?cat_id=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->category_name); ?></a></li>
							<?php $cnt++;
								}
							} ?>
						</ul>
>>>>>>> cf0da052f53dfbc13f5632682421592692375219
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
							<div class="item">
								<div class="post-entry d-lg-flex">
									<div class="me-lg-5 thumbnail mb-4 mb-lg-0">
										<a href="single.php">
											<img src="images/xpost_lg_1.jpg.pagespeed.ic.vC5886c_pL.jpg" alt="Image" class="img-fluid">
										</a>
									</div>
									<div class="content align-self-center">
										<div class="post-meta mb-3">
											<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
											<span class="date">July 2, 2020</span>
										</div>
										<h2 class="heading"><a href="single.php">Your most unhappy customers are your
												greatest source of learning.</a></h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove right at the coast of the Semantics, a large language ocean.
										</p>
										<a href="#" class="post-author d-flex align-items-center">
											<div class="author-pic">
												<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
											</div>
											<div class="text">
												<strong>Sergy Campbell</strong>
												<span>CEO and Founder</span>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="post-entry d-lg-flex">
									<div class="me-lg-5 thumbnail mb-4 mb-lg-0">
										<a href="single.php">
											<img src="images/xpost_lg_2.jpg.pagespeed.ic.YbC8FwTKmr.jpg" alt="Image" class="img-fluid">
										</a>
									</div>
									<div class="content align-self-center">
										<div class="post-meta mb-3">
											<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
											<span class="date">July 2, 2020</span>
										</div>
										<h2 class="heading"><a href="single.php">Your most unhappy customers are your
												greatest source of learning.</a></h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove right at the coast of the Semantics, a large language ocean.
										</p>
										<a href="#" class="post-author d-flex align-items-center">
											<div class="author-pic">
												<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
											</div>
											<div class="text">
												<strong>Sergy Campbell</strong>
												<span>CEO and Founder</span>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="post-entry d-lg-flex">
									<div class="me-lg-5 thumbnail mb-4 mb-lg-0">
										<a href="single.php">
											<img src="images/xpost_lg_3.jpg.pagespeed.ic.qhXWgmNnIn.jpg" alt="Image" class="img-fluid">
										</a>
									</div>
									<div class="content align-self-center">
										<div class="post-meta mb-3">
											<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
											<span class="date">July 2, 2020</span>
										</div>
										<h2 class="heading"><a href="single.php">Your most unhappy customers are your
												greatest source of learning.</a></h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove right at the coast of the Semantics, a large language ocean.
										</p>
										<a href="#" class="post-author d-flex align-items-center">
											<div class="author-pic">
												<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
											</div>
											<div class="text">
												<strong>Sergy Campbell</strong>
												<span>CEO and Founder</span>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="post-entry d-lg-flex">
									<div class="me-lg-5 thumbnail mb-4 mb-lg-0">
										<a href="single.php">
											<img src="images/xpost_lg_4.jpg.pagespeed.ic.oJIp7wddWl.jpg" alt="Image" class="img-fluid">
										</a>
									</div>
									<div class="content align-self-center">
										<div class="post-meta mb-3">
											<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
											<span class="date">July 2, 2020</span>
										</div>
										<h2 class="heading"><a href="single.php">Your most unhappy customers are your
												greatest source of learning.</a></h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove right at the coast of the Semantics, a large language ocean.
										</p>
										<a href="#" class="post-author d-flex align-items-center">
											<div class="author-pic">
												<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
											</div>
											<div class="text">
												<strong>Sergy Campbell</strong>
												<span>CEO and Founder</span>
											</div>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-4">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_2.jpg.pagespeed.ic.tehDa3FPWy.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_3.jpg.pagespeed.ic.MzyTwPvJuu.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_4.jpg.pagespeed.ic.5BNsTZBCHP.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="#">Your most unhappy customers are your greatest source of
									learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_4.jpg.pagespeed.ic.5BNsTZBCHP.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="#">Your most unhappy customers are your greatest source of
									learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_5.jpg.pagespeed.ic.aehNfINE2q.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="#">Your most unhappy customers are your greatest source of
									learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_6.jpg.pagespeed.ic.Kuzv9hw150.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="#">Your most unhappy customers are your greatest source of
									learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-7 text-center">
					<h2 class="heading">Most Popular Posts</h2>
				</div>
			</div>
		</div>
		<div class="most-popular-slider-wrap px-3 px-md-0">
			<div id="most-popular-nav">
				<span class="prev" data-controls="prev">Prev</span>
				<span class="next" data-controls="next">Next</span>
			</div>
			<div class="most-popular-slider" id="most-popular-center">
				<div class="item">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_7.jpg.pagespeed.ic.w5W5PuCxbQ.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_2.jpg.pagespeed.ic.tehDa3FPWy.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_3.jpg.pagespeed.ic.MzyTwPvJuu.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_4.jpg.pagespeed.ic.5BNsTZBCHP.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_5.jpg.pagespeed.ic.aehNfINE2q.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="post-entry d-block small-post-entry-v">
						<div class="thumbnail">
							<a href="single.php">
								<img src="images/ximg_6.jpg.pagespeed.ic.Kuzv9hw150.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="content">
							<div class="post-meta mb-1">
								<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a>
								&mdash;
								<span class="date">July 2, 2020</span>
							</div>
							<h2 class="heading mb-3"><a href="single.php">Your most unhappy customers are your greatest
									source of learning.</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<a href="#" class="post-author d-flex align-items-center">
								<div class="author-pic">
									<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
								</div>
								<div class="text">
									<strong>Sergy Campbell</strong>
									<span>CEO and Founder</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-6">
					<div class="row mb-4">
						<div class="col-12">
							<h2 class="h4 fw-bold">Sports</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="post-entry d-md-flex xsmall-horizontal mb-5">
								<div class="me-md-3 thumbnail mb-3 mb-md-0">
									<img src="images/ximg_2.jpg.pagespeed.ic.tehDa3FPWy.jpg" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
										<span class="date">July 2, 2020</span>
									</div>
									<h2 class="heading"><a href="single.php">Your most unhappy customers are your
											greatest source of learning.</a></h2>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="author-pic">
											<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
										</div>
										<div class="text">
											<strong>Sergy Campbell</strong>
											<span>Author, 26 published post</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="post-entry d-md-flex xsmall-horizontal mb-5">
								<div class="me-md-3 thumbnail mb-3 mb-md-0">
									<img src="images/ximg_3.jpg.pagespeed.ic.MzyTwPvJuu.jpg" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
										<span class="date">July 2, 2020</span>
									</div>
									<h2 class="heading"><a href="single.php">Your most unhappy customers are your
											greatest source of learning.</a></h2>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="author-pic">
											<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
										</div>
										<div class="text">
											<strong>Sergy Campbell</strong>
											<span>Author, 26 published post</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="post-entry d-md-flex xsmall-horizontal mb-5">
								<div class="me-md-3 thumbnail mb-3 mb-md-0">
									<img src="images/ximg_4.jpg.pagespeed.ic.5BNsTZBCHP.jpg" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
										<span class="date">July 2, 2020</span>
									</div>
									<h2 class="heading"><a href="single.php">Your most unhappy customers are your
											greatest source of learning.</a></h2>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="author-pic">
											<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
										</div>
										<div class="text">
											<strong>Sergy Campbell</strong>
											<span>Author, 26 published post</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row mb-4">
						<div class="col-12">
							<h2 class="h4 fw-bold">Business</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="post-entry d-md-flex xsmall-horizontal mb-5">
								<div class="me-md-3 thumbnail mb-3 mb-md-0">
									<img src="images/ximg_2.jpg.pagespeed.ic.tehDa3FPWy.jpg" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
										<span class="date">July 2, 2020</span>
									</div>
									<h2 class="heading"><a href="single.php">Your most unhappy customers are your
											greatest source of learning.</a></h2>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="author-pic">
											<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
										</div>
										<div class="text">
											<strong>Sergy Campbell</strong>
											<span>Author, 26 published post</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="post-entry d-md-flex xsmall-horizontal mb-5">
								<div class="me-md-3 thumbnail mb-3 mb-md-0">
									<img src="images/ximg_3.jpg.pagespeed.ic.MzyTwPvJuu.jpg" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
										<span class="date">July 2, 2020</span>
									</div>
									<h2 class="heading"><a href="single.php">Your most unhappy customers are your
											greatest source of learning.</a></h2>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="author-pic">
											<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
										</div>
										<div class="text">
											<strong>Sergy Campbell</strong>
											<span>Author, 26 published post</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="post-entry d-md-flex xsmall-horizontal mb-5">
								<div class="me-md-3 thumbnail mb-3 mb-md-0">
									<img src="images/ximg_4.jpg.pagespeed.ic.5BNsTZBCHP.jpg" alt="Image" class="img-fluid">
								</div>
								<div class="content">
									<div class="post-meta mb-1">
										<a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
										<span class="date">July 2, 2020</span>
									</div>
									<h2 class="heading"><a href="single.php">Your most unhappy customers are your
											greatest source of learning.</a></h2>
									<a href="#" class="post-author d-flex align-items-center">
										<div class="author-pic">
											<img src="images/xperson_1.jpg.pagespeed.ic.ku-D0yMWz5.jpg" alt="Image">
										</div>
										<div class="text">
											<strong>Sergy Campbell</strong>
											<span>Author, 26 published post</span>
										</div>
									</a>
								</div>
							</div>
						</div>
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
			<form action="#" class="row">
				<div class="col-md-8">
					<div class="mb-3 mb-md-0">
						<input type="email" class="form-control" placeholder="Enter your email">
					</div>
				</div>
				<div class="col-md-4 d-grid">
					<input type="submit" class="btn btn-primary" value="Subscribe">
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
							</script> All rights reserved | <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" rel="nofollow noopener">Crea8t</a>
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
		<script>
			let n = sessionStorage.setItem('email', $('#email').val());
			sessionStorage.setItem('name', $('#name').val());
			console.log(n);
		</script>
</body>

</html>