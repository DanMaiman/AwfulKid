<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Awful Kid is an assortment of artists who create with honesty, ambition, and perserverance.">
    <meta name="author" content="Dan Maiman & Ryan Kachikis">
    <link rel="icon" href="favicon.ico">

    <title>Awful Kid</title>



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

      <a href="<?php echo get_settings('home'); ?>"><img class="logo" src="http://localhost:8888/AwfulKid/wordpress/wp-content/uploads/2016/01/AWFUKIDL.png" width="350"></a>



<div class="nav-cont">
  <nav class="nav nav-pills nav-stacked hidden-xs hidden-sm"> 
    <ul class="nav nav-pills nav-stacked"> 
      <?php wp_list_pages('title_li=&depth=1'); ?>
    </ul>
  </nav>
</div>

<nav class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_settings('home'); ?>">Awfulkid</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php wp_list_pages('title_li=&depth=1'); ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



<div class="awk_content animated bounceInRight">
  <?php
    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
      if ($children) { ?>
        

        <ul class="nav nav-pills nav-stacked nav-music">
          <?php echo $children; ?>
        </ul>
  <?php } ?>

  <?php
    while(have_posts()) : the_post(); ?>

      <p><?php the_content(''); ?></p>
      

    <?php endwhile; wp_reset_query(); ?>
</div>

   </div><!-- /.container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- <script src="dist/js/bootstrap.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>




