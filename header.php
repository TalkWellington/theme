<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500i,400,700|Open+Sans:600" rel="stylesheet">
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>
<body>

<div class="container"> <!-- Container for whole page -->
   	<?php get_template_part('nav'); ?>     
<!-- <div id="hide"> -->
	<header>
		<div class="row"> <!-- Logo and top story feature row-->
			   <div id="head-feature-area" class="col-sm-12">
              <div id="logo">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('logo')) : else : ?>
                    <div class="pre-widget">
                    <p><strong>Logo Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be the Korero Wellington logo</p>
                  </div>
                <?php endif; 
                ?>
            </div>
              <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('head-feature-area')) : else : ?>
                <div class="pre-widget">
                  <p><strong>Headline Feature Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be Korero Wellingtons hero image link to out latest/biggest feature story</p>
                </div>
              <?php endif; ?>
     
          </div>  

        </div>
			

<!-- </div> -->