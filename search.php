<?php
/*
Template Name: Search Results Page
*/
?>
<?php get_header(); ?>
<div class="container-fluid container-body">
<main class="blog-main">
<div class="row">
  <section class="col-sm-8 blog-roll pad-right-zero">
    <h2 class="latest-post">Search Results</h2>
    <div class="blog-list">
      <div class="blog-post"> 
        <h2 class="blog-post-title"><?php echo $wp_query->found_posts . ' results found for "'?><?php echo get_search_query().'".' ?></h2>
      </div>
      <?php

      if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content', get_post_format() );

      endwhile; endif; 
      ?>
    </div>
    </section> 

  <?php get_sidebar('sidebar'); ?>


  </div> <!-- /.row -->
</main> 
<?php get_footer(); ?>