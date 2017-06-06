<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500i,400,700|Open+Sans:600" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>
<body>	
<header>
	<div class="container">
			<div class="blog-header">
				<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>
	</div>		
</header>
<div class="container">
		<div class="blog-masthead">
			<div class="row">
				<nav class="blog-nav col-sm-12">
					<ul id="menu">
						<div class="menu-div">
							<?php wp_list_pages('&title_li=')?>									
						</div>
						<div class="menu-div text-right"> 
							<li class="social"><a class="icon fa-twitter" href="#" aria-hidden="true"></a>
							<li class="social"><a class="icon fa-facebook" href="#" aria-hidden="true" ></a>
							<li id="hide-mobile"> <div class="icon fa-search" href="#" aria-hidden="true"></div><?php get_search_form(); ?></li>
							<li id="x-button"><div class="icon fa-times text-right" aria-hidden="true"></div>
						</div>				
					</ul>

					<div class="mobile-head">
						<div class="mobile-search"><?php get_search_form(); ?></div>
						<div id="slide-menu-button">MENU</div>
					</div>
				</nav>
			</div>	
		</div>

