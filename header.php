<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/fontello.css'); ?>">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon-16x16.png'); ?>">
		
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo theme_url('img/apple-icon-57x57.png'); ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo theme_url('img/apple-icon-60x60.png'); ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo theme_url('img/apple-icon-72x72.png'); ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo theme_url('img/apple-icon-76x76.png'); ?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo theme_url('img/apple-icon-114x114.png'); ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo theme_url('img/apple-icon-120x120.png'); ?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo theme_url('img/apple-icon-144x144.png'); ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo theme_url('img/apple-icon-152x152.png'); ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo theme_url('img/apple-icon-180x180.png'); ?>">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo theme_url('img/android-icon-192x192.png'); ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo theme_url('img/favicon-32x32.png'); ?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo theme_url('img/favicon-96x96.png'); ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo theme_url('img/favicon-16x16.png'); ?>">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo theme_url('img/ms-icon-144x144.png'); ?>">
		<meta name="theme-color" content="#ffffff">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-58716001-1', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="wrap">
					<div class="col-md-12">
						<form id="search" action="<?php echo search_url(); ?>" method="post">
							<input type="search" class="input-search" id="term" name="term" placeholder="Search" value="<?php echo search_term(); ?>" autocomplete="off">
						</form>						
					</div>
				</div>

			</div>

			<header>
				<?php if(has_menu_items()): ?>
				<nav>
					<ul class="a">
						<?php while(menu_items()): ?>
							<li <?php echo (menu_active() ? 'class="active"' : 'class="tray"'); ?>>
								<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
									<?php echo menu_name(); ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>

					<ul class="b">
						<li>
							<!-- <a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="Search my posts"></a> -->
							<a title="Search my posts"class="absolute cross"><div></div></a>
						</li>
					</ul>	
				</nav>
					<h1 class="page-title"><?php echo site_name(); ?></h1>		
				<?php endif; ?>
			</header>

			