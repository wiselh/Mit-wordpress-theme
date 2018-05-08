<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/logo.png" width="70px" alt="">
        </a>
      </div>
       <div class="wp-navbar collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
      </div>
    </div>
  </nav>
