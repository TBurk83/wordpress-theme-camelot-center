<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
  <meta name="google-site-verification" content="6la29E4-8moXwEA9zfMB_oh1UEUt6JO_fc8nizrYwd0" />s
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-toggleable-md navbar-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
      <?php bloginfo('name'); ?>
      <?php the_custom_logo(); ?>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php
      wp_nav_menu( array(
        'theme_location'		=> 'navbar',
        'container'         => false,
        'menu_class'				=> '',
        'fallback_cb'				=> '__return_false',
        'items_wrap'				=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'							=> 2,
        'walker'            => new camelot_walker_nav_menu()
        ) );
        ?>      
        <div class="pull-right">

          <?php get_template_part('navbar-search'); ?>    
          
        </div>
      </div>

    </nav>

<?php /*
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in theme/css/camelot.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
*/ ?>
