<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/html/themes/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
     
      }
    </style>
    <link href="<?php echo get_template_directory_uri(); ?>/html/themes/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/html/themes/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/html/themes/css/custom.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/html/themes/css/jquery.fancybox.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<?php wp_head(); ?>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1><a class="brand" href="<?php echo get_bloginfo("home"); ?>">Project name</a></h1>
          <!--
		  <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="speakers">Speakers</a></li>
              <li><a href="agenda">Agenda</a></li>
              <li><a href="venue">Venue</a></li>
              <li><a href="benefits">Benefits</a></li>
              <li><a href="supporters">Who's in</a></li>
            </ul>
            <a href="tickets" class="buy pull-right">Purchase tickets!</a>
          </div>
		  -->
		  <?php
			$defaults = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'nav-collapse collapse',
			'container_id'    => '',
			'menu_class'      => 'nav',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
			);

			wp_nav_menu( $defaults );
		  ?>
		  <!--/.nav-collapse -->
		  <a href="tickets" class="buy pull-right">Purchase tickets!</a>
        </div>
      </div>
    </div>
