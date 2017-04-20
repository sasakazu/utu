<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>

  </head>
  <body>

    <h1 id="logo">
<a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
</h1>
<p id="description"><?php bloginfo('description'); ?></p>
