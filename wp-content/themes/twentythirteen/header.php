<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
 	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/footer.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/top.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mediaquery.css" type="text/css">
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/chg.framework.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper-outer">
		<div id="bkObj">

			<div id="bkPhoto1"><img src="<?php bloginfo('template_url'); ?>/images/images/idx-bkphoto1.png"></div>
			<div id="bkPhoto2"><img src="<?php bloginfo('template_url'); ?>/images/images/idx-bkphoto2.png"></div>
			<div id="bkPhoto3"><img src="<?php bloginfo('template_url'); ?>/images/images/idx-bkphoto3.png"></div>
		</div>
		<div id="bln">
			<div id="blnImg1"><img style="height: 250px; margin-left: -62.125748502994px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo1.jpg"></div>
			<div id="blnImg2"><img style="height: 170px; margin-left: -28.031914893617px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo2.jpg"></div>
			<div id="blnImg3"><img style="height: 220px; margin-left: -44.4943820224719px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo3.jpg"></div>
			<div id="blnImg4"><img style="width: 190px; margin-top: -38.76px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo4.jpg"></div>
			<div id="blnImg5"><img style="height: 240px; margin-left: -59.6407185628742px;"src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo5.jpg"></div>
			<div class="blnImg" style="border-radius: 50%; width: 230px; height: 230px; overflow: hidden; -webkit-box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; position: absolute; left: 30px; top: 1950px; background-color: rgb(255, 255, 255);"><img style="height: 230px; margin-left: -57.1556886227545px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo6.jpg"></div>
			<div class="blnImg" style="border-radius: 50%; width: 200px; height: 200px; overflow: hidden; -webkit-box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; position: absolute; left: 300px; top: 2100px; background-color: rgb(255, 255, 255);"><img style="width: 200px; margin-top: -40.4px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo7.jpg"></div>
			<div class="blnImg" style="border-radius: 50%; width: 220px; height: 220px; overflow: hidden; -webkit-box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; position: absolute; left: 600px; top: 2550px; background-color: rgb(255, 255, 255);"><img style="width: 220px; margin-top: -54.56px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo8.jpg"></div>
			<div class="blnImg" style="border-radius: 50%; width: 190px; height: 190px; overflow: hidden; -webkit-box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; position: absolute; left: 780px; top: 2700px; background-color: rgb(255, 255, 255);"><img style="height: 190px; margin-left: -47.2155688622755px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo9.jpg"></div>
			<div class="blnImg" style="border-radius: 50%; width: 300px; height: 300px; overflow: hidden; -webkit-box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; position: absolute; left: 150px; top: 3000px; background-color: rgb(255, 255, 255);"><img style="width: 300px; margin-top: -50.4px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo10.jpg"></div>
			<div class="blnImg" style="border-radius: 50%; width: 200px; height: 200px; overflow: hidden; -webkit-box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 20px; position: absolute; left: 290px; top: 3300px; background-color: rgb(255, 255, 255);"><img style="width: 200px; margin-top: -33.6px;" src="<?php bloginfo('template_url'); ?>/images/photo/bln_photo11.jpg"></div>
		</div>
		<div id="wrapper-inner">
			<header>
				<div id="sitehead">
					<h1><img id="siteImg" src="<?php bloginfo('template_url'); ?>/images/images/idx-sitehead.png" alt="Caohagan Island -カオハガン島オフィシャルサイト-"></h1>
				</div>
			</header>