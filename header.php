<!DOCTYPE html>
<html lang="en">

<!-- COMMON TAGS -->
<meta charset="utf-8">
<title><?php if(is_single()) { 
          the_title(); 
        } ?> 
        Talk Wellington - Kōrero Shaping Wellington</title>
<!-- Search Engine -->
<meta name="description" content="Kōrero Shaping Wellington">
<!-- Schema.org for Google -->
<meta itemprop="name" content="Talk Wellington">
<meta itemprop="description" content="Kōrero Shaping Wellington">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Talk Wellington">
<meta name="twitter:description" content="Kōrero Shaping Wellington">
<meta name="twitter:site" content="@TalkWelly">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="Talk Wellington">
<meta name="og:description" content="Kōrero Shaping Wellington">
<meta name="og:url" content="https://www.talkwellington.org.nz">
<meta name="og:site_name" content="Talk Wellington">
<meta name="og:locale" content="en_NZ">
<meta name="og:type" content="website">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">




  <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Raleway" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <?php wp_head();?>
</head>
<body>
  <?php include_once("analyticstracking.php") ?> 
  
<nav class="container-fluid nav-bar">

    <a class="home-link" href="https://talkwellington.org.nz"> 

      <div id="logo" class="logo">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('logo')) : else : ?>
          <div class="pre-widget">
            <p><strong>Logo Area</strong></p>
            <p>This panel is for the Korero Wellington logo. Upload via the WordPress backend under "Widgets"</p>
          </div>
        <?php endif; ?>
      </div>

    </a>       
    <div id="slide-menu-button">MENU</div>        
    <div id="menu" class="menu">
      <div id="x-button" class="icon fa-times text-right" aria-hidden="true"></div>

      <ul class="links">
       <?php wp_list_pages('&title_li=')?>
     </ul>

     <ul class="social-search">
      <li class="social"><a aria-hidden="true" class="icon fa-twitter" href="https://twitter.com/TalkWelly" target="_blank" rel="noopener"></a></li>
      <li class="social"><a aria-hidden="true" class="icon fa-facebook" href="https://www.facebook.com/K%C5%8Drero-Wellington-114945545789718/" target="_blank" rel="noopener"></a></li>
      <li class="social">
        <?php get_search_form(); ?>     
      </li>
    </ul>
  </div>   

</nav>    


