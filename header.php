<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package portalplanet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" />

<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Pacifico|Ubuntu|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<style>
.sprite {
  background-image: url("<?php echo get_template_directory_uri();?>/assets/img/sprite-2.png");
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/app.js"></script>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'body_open' ); ?>
<div id="page" class="container hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'portalplanet' ); ?></a>
<?php //  <div id="main-header" class="header">?>
	<nav id="masthead" class="ccontainer ccblog-masthead navbar navbar-default nnnavbar-fixed-top" role="navigation">
		<div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
		  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/portal-planet.png" alt="<?php bloginfo( 'name' ); ?>" />
                  </a>
		</div>
		<div id="navbar" class="collapse navbar-collapse nnnav mmmain-navigation" role="navigation">
 		  <?php wp_nav_menu( array('theme_location' => 'primary', 'menu' => 'Main', 'container' => '', 'items_wrap' => '<ul id="mymenu" class="nav navbar-nav">%3$s</ul>' )); ?>
		  <?php get_search_form();?>
		</div><!-- #site-navigation -->
	</nav><!-- #masthead -->
<?php //  </div>?>
<?php 
$jumbotron = get_post_meta( get_the_ID(), 'jumbotron', true );
// check if the custom field has a value
if( ! empty( $jumbotron ) ) {
//  echo "<div class=\"container\">\n".$jumbotron."</div>\n";
  echo $jumbotron;
} 
?>
<div class="ccontainer">
  <div class="row">
	<div id="content" class="col-sm-8 blog-page">
