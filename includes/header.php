<!DOCTYPE html>
<html>
<head>
	<?php
		$current_page = basename($_SERVER['PHP_SELF'], '.php');
		$pages = array('index', 'skis', 'team', 'blog', 'about', 'community');
		$menu_left = array('home', 'skis', 'goods');
		$menu_right = array('family', 'media', 'about');
	?>
	<title>HG Skis :: <?= ucfirst($current_page); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/froogaloop.js"></script>
	<script type="text/javascript" src="js/jquery.fitvid.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
</head>
<body>
	<header class="clearfix">
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="images/logo-white.png" alt="HG Skis" class="img-responsive"></a>
					<a href="#footer-nav" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<ul class="main-nav nav-left clearfix">
					<?php foreach($menu_left as $page): ?>
					<li <?= ($page == $current_page) ? ' class="active"' : ''; ?>><a href="<?= $page.'.php'; ?>"><?= ucfirst($page); ?></a></li> 
					<?php endforeach; ?>
				</ul>
				<ul class="main-nav nav-right clearfix">
					<?php foreach($menu_right as $page): ?>
					<li <?= ($page == $current_page) ? ' class="active"' : ''; ?>><a href="<?= $page.'.php'; ?>"><?= ucfirst($page); ?></a></li> 
					<?php endforeach; ?>
				</ul>
			</div>
		</nav>
	</header>
