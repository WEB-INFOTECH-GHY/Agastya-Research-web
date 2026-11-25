<?php
// Set these on each page BEFORE including this file, e.g.
// $page_title = 'About Us'; $meta_desc = '...';
$site_name  = 'Agastya Research';
$page_title = isset($page_title) ? $page_title . ' | ' . $site_name : $site_name . ' | Quality Pharmaceutical Products Since 2008';
$meta_desc  = isset($meta_desc) ? $meta_desc : 'Agastya Research Health Products - quality-driven pharmaceutical company serving India since 2008. Head office in Delhi, regional office and depot in Guwahati. Explore our Main, OPG and USR divisions.';

// Site address: set by products-data.php on product pages; worked out here for all other pages.
if (!isset($site_url)) {
    $h = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    $site_url = (strpos($h, 'localhost') !== false || strpos($h, '127.0.0.1') !== false)
        ? 'http://' . $h . '/'
        : 'https://www.YOURDOMAIN.com/';   // <-- CHANGE THIS (same domain as in products-data.php)
}
// Image used when a page does not set its own (put a logo image of about 1200x630 at this path)
$og_image = isset($og_image) ? $og_image : $site_url . 'web/og-default.jpg';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">

	<!-- Canonical, Open Graph (link previews) and structured data -->
	<?php if (!empty($canonical)): ?>
	<link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
	<meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
	<?php endif; ?>
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>">
	<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
	<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<?php if (!empty($json_ld)): ?>
	<script type="application/ld+json"><?php echo $json_ld; ?></script>
	<?php endif; ?>

	<meta name="keywords" content="Agastya Research, pharmaceutical company, pharma distributor Guwahati, pharma company Delhi, medicines, Main Division, OPG Division, USR Division">
	<meta name="author" content="Agastya Research">
	<!-- Page Title -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/png" href="web/fav.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="web/fav.png" alt="Agastya Research"></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index.php">
						<img src="web/logo.png" alt="Agastya Research" style="max-height:70px; width:auto;">
					</a>
					<!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="products.php">Products</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="products.php">All Products</a></li>
                                        <li class="nav-item"><a class="nav-link" href="products.php?division=main">Main Division</a></li>
                                        <li class="nav-item"><a class="nav-link" href="products.php?division=opg">OPG Division</a></li>
                                        <li class="nav-item"><a class="nav-link" href="products.php?division=usr">USR Division</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="quality.php">Quality &amp; Compliance</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="contact.php#enquiry">Trade Enquiry</a></li>
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="contact.php#enquiry" class="btn-default btn-highlighted">Trade Enquiry</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->