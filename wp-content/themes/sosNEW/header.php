<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="chrome=1">

	<meta name="viewport" content="width=device-width">

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>

	<title><?php wp_title(''); ?></title>

	<link rel="shortcut icon" href="/favicon.png">

	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
	
	<?php
	  // e.g. jQuery
	  wp_head();
	?>

	<!--[if !IE]><!-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v1.1">
  <!--<![endif]-->
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/oldie.css">
  <![endif]-->
  <!--[if IE 9]>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v1.1">
  <![endif]-->
  
</head>

<body <?php body_class("user-$user_ID"); ?>>

  <?php include("parts/header.php"); ?>

  <div class="page-wrap">

    <?php include("parts/nav.php"); ?>
