<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>A place to put my artwork - Aaron's Sketchbook</title>
	<link rel="stylesheet" href="/assets/styles/main.css">
</head>
<body>
  <div class="wrapper container">
		<!-- Header -->
		<header class="site-header">
	    <div class="logo-container">
	      <a href="/" class="logo">Aaron's Sketchbook</a>
	    </div>

			<a href="#menu" class="nav-toggle"><span>Menu</span></a>

	    <nav class="main-menu">
	      <ul>
	        <li><a class="active" href="/">Home</a></li>
	        <li><a href="/about">About</a></li>
	        <li><a href="/work">Work</a></li>
					<li><a href="/shop">Shop</a></li>
	      </ul>
	    </nav>
	  </header>
		<!-- End Header -->

		<!-- Content -->
		<div class="site-content">

			<!-- Page Intro -->
			<p class="page-intro">With a pen always on hand, I have a tendency to create a lot of <a href="/work">art</a>. This website gives me a place to put that art.</p>

			<!-- Sample Work -->
			<section class="home-work">
				<div class="card-grid">
					<!-- Item 1 -->
					<a href="/work/fox/" class="card-item fox animal" >
						<p class="card-image"><img src="/assets/images/work/work-fox-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">The Fox</h2>
							<p class="card-series">Animal Series</p>
						</div>
					</a>

					<!-- Item 2 -->
					<a href="/work/eyes" class="card-item eyes abstract">
						<p class="card-image"><img src="/assets/images/work/work-eyes-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">To Gaze Upon My Soul</h2>
							<p class="card-series">Sketchbook Series</p>
						</div>
					</a>

					<!-- Item 3 -->
					<a href="/work/hole" class="card-item hole abstract">
						<p class="card-image"><img src="/assets/images/work/work-hole-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">The Hole</h2>
						</div>
					</a>

					<!-- Item 4 -->
					<a href="/work/hair" class="card-item hair abstract">
						<p class="card-image"><img src="/assets/images/work/work-hair-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">Hair Study</h2>
						</div>
					</a>

					<!-- Item 5 -->
					<a href="/work/floral-ball-4" class="card-item floral-ball-4 floral">
						<p class="card-image"><img src="/assets/images/work/work-floral-4-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">Peony Cluster</h2>
							<p class="card-series">Floral Ball Series</p>
						</div>
					</a>

					<!-- Item 6 -->
					<a href="/work/shoes" class="card-item shoes floral">
						<p class="card-image"><img src="/assets/images/work/work-shoes-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">Shoes</h2>
						</div>
					</a>

					<!-- Item 7 -->
					<a href="/work/fawn" class="card-item fawn abstract">
						<p class="card-image"><img src="/assets/images/work/work-fawn-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">Fawn</h2>
						</div>
					</a>

					<!-- Item 8 -->
					<a href="/work/bushman" class="card-item bushman floral">
						<p class="card-image"><img src="/assets/images/work/work-bushman-thumb.jpg" /></p>
						<div class="card-meta">
							<h2 class="card-title">Bush Man</h2>
						</div>
					</a>
				</div>

				<p><a class="btn" href="/work" aria-label="View more artwork">View More</a></p>
			</section>
		</div>
		<!-- End Content -->

		<!-- Footer -->
		<?php include '/assets/includes/site-footer.php'; ?>
		<!-- End Footer -->
	</div>

	<!-- Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">

		$('.nav-toggle').on( 'click', function() {
			$('.main-menu').addClass('active');
		});

	</script>

</body>
</html>
