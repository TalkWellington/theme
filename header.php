<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TalkWellington - Wellington Regional News Blog">
	<meta name="author" content="">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Raleway" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<?php wp_head();?>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
  <div class="container"> <!-- Container for whole page -->
    <nav>
      <div class="row">
        <div class="col-sm-12">

          <div id="menu">
           <div id="x-button">
                  <div aria-hidden="true" class="icon fa-times text-right"></div>
                </div>
            <ul class="links">
              <?php wp_list_pages('&title_li=')?>
            </ul>
            <ul class="social-search">
              <li class="social">
                <a aria-hidden="true" class="icon fa-twitter" href="https://twitter.com/TalkWelly" target="_blank" rel="noopener"></a>
              </li>
              <li class="social">
                <a aria-hidden="true" class="icon fa-facebook" href="https://www.facebook.com/K%C5%8Drero-Wellington-114945545789718/" target="_blank" rel="noopener"></a>
              </li>
      
              <li>
                <div id="hide-mobile">
                  <?php get_search_form(); ?>
                </div>
              </li>
            </ul> 
          </div>

          <div class="mobile-head">
            <div class="mobile-search">
              <form class="" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <div aria-hidden="true" class="icon fa-search"></div>       
                <input type="text" value="" name="s" id="s" placeholder="Search..." aria-label="Search"/>
              </form>            
            </div>
            <div id="slide-menu-button">
              MENU
            </div>
          </div>
        </div>
      </div>
    </nav>     

    <header>
      <div class="row"> <!-- Logo and slider row -->
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
              <p><strong>Hero Image Area</strong></p>
              <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be Korero Wellingtons hero image slider</p>
            </div>
          <?php endif; ?>

        </div>  

      </div>
