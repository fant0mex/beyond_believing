<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <title>
      <?php wp_title('|',true,'right'); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class"navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <?php
            $args = array(
              'menu'       => 'header-menu',
              'menu-class' => 'nav navbar-nav',
              'container'  => 'false'
            );
            wp_nav_menu($args);
          ?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>