<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Awful Kid is an assortment of artists who create with honesty, ambition, and perserverance.">
    <meta name="author" content="Dan Maiman & Ryan Kachikis">
    <link rel="icon" href="favicon.ico">

    <title>Awful Kid</title>

    <?php wp_head(); ?>

    <!-- Bootstrap core CSS -->
    <!--<link href="dist/css/bootstrap.min.css" rel="stylesheet"> Kept for reference-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> Kept for reference-->

    <!-- Custom styles for this template -->
    <!--<link href="starter-template.css" rel="stylesheet"> Kept for reference-->

    <!-- Font Oswald -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="assets/js/ie-emulation-modes-warning.js"></script> Kept for reference-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>

    <div class="container">

      <a href="<?php echo get_settings('home'); ?>"><h1 class="awkLogo">AWFUL <br>KID</h1></a>


<div class="nav-cont">
  <nav class="nav nav-pills nav-stacked hidden-xs hidden-sm"> 
    <ul class="nav nav-pills nav-stacked"> 
      <?php wp_list_pages('title_li=&depth=1'); ?>
    </ul>
  </nav>
</div>



<div class="awk_content animated bounceInRight">
  <?php
    while(have_posts()) : the_post(); ?>

      <p><?php the_content(''); ?></p>

  <?php endwhile; wp_reset_query(); ?>
</div>



<!-- Nav bar collapse for mobile
<div id="navbar" class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</div>--><!--/.nav-collapse -->

