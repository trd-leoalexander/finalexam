<?php
/*
 Template Name: Island Life Page
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
		<title>Caohagan Island | Island Life</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/top.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mediaquery.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/queryLoader.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/PIE.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/chg.balloons.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/chg.index.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/chg.framework.js"></script>
	</head>
	<body>
		<?php 
			global $wp_query;
			echo $wp_query->queried_object->post_content;
		?>
	</body>
</html>

