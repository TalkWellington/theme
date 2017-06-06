<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">
    <h1>Search: <?php echo get_search_query(); ?></h1>
    <h2><?php echo $wp_query->found_posts . ' results found.'?></h2>

     <?php
     
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        get_template_part( 'content', get_post_format() );
  
      endwhile; endif; 
      ?>

    </div> <!-- /.blog-main -->
    
    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>