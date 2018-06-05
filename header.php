<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <!-- Twitter Open Graph Integration -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta property="og:url" content="<?php bloginfo( 'url' ); ?>" />
        <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
        <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
        <meta property="og:image" content="<?php header_image(); ?>" />

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<?php
			// Un chiffre au hasard
			$rand =  rand(1, 9);

			// Url du fichier de background
			$imagebg = get_bloginfo('template_url') . "/images/background/$rand.jpg";
		?>
		<style>
		#bg:after {background-image: url("<?php echo $imagebg; ?>");}
		</style>
		
		<?php wp_head(); ?>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">