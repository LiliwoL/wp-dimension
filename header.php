<html xmlns:og="http://ogp.me/ns#">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta property="og:url" content="https://www.facebook.com/campus.cesi.nantes/"/>
		<meta property="og:title" content="Page facebook du CESI Nantes">
		<meta property="og:description" content="Mettez des pousses bleu, des likes.">
		<meta property="og:image" content="/image/cesi.jpg">


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