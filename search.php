<?php
/*
Template Name: Search Results Page
*/
?>
<?php get_header(); ?>

<main class="row blog-main">

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

  <section class="col-sm-4 pad-left-zero">

   <div class="blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
      <h2>Categories</h2>
      <ul class="list-items categories">

        <?php $category_ids = get_all_category_ids(); ?>
        <?php
        $args = array(
          'orderby' => 'slug'
          );
        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
          if($category->term_id == 52){
            // Temp icon for transport
            echo '<li>
            <a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">
              <div class="fa fa-bus fa-lg fa-fw  cat-icon"></div>
              ' . $category->name . '</a>
            </li>';
          }
          else {  
            echo '<li>
            <a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">
              <img class="cat-icon" src="https://talkwellington.org.nz/wp-content/uploads/2017/07/'.$category->term_id .'.svg " />
              <p>' . $category->name . '</p></a>
            </li>';
            //NOTE: when working locally, image src or category IDs will be at a different path. 
          } 
        }
        ?>      
      </ul>
    </div>
  </div>

</section>

</div> <!-- /.row -->
</main> 
<?php get_footer(); ?>