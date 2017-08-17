<?php get_header(); ?>     
<div class="row">             
  <div id="secondary-feature" class="col-sm-6">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('secondary-feature')) : else : ?>
      <div class="pre-widget">
        <p><strong>Secondary Feature Area</strong></p>
        <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
      </div><?php endif; ?>
    </div>
    <div id="tertiary-feature" class="col-sm-6">
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('tertiary-feature')) : else : ?>
        <div class="pre-widget">
          <p><strong>Tertiary Feature Area</strong></p>
          <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </div><?php endif; ?>
      </div>          
    </div>
  </header>     

  <main class="row blog-main"> <!-- blog roll and categories -->
   <section class="col-sm-8 blog-roll pad-right-zero">
    <h2 class="latest-post">Latest</h2>
    <div class="blog-list">
      <?php 

      if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content', get_post_format() );

      endwhile; endif; 
      ?>
    </div>
  </section><!-- the loop and sidbar-->          

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
</main>
<?php get_footer(); ?>
