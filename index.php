<?php get_header(); ?>
    <!-- features -->

        <!-- Logo and top story feature row-->      
          
        <div class="row"> <!-- minor feature wrapper-->
            
              <!-- 2nd feature -->
              <div id="secondary-feature" class="col-sm-6">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('secondary-feature')) : else : ?>
                <div class="pre-widget">
                  <p><strong>Secondary Feature Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
                </div><?php endif; ?>
              </div>
         


          
              <!-- 3rd feature -->
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
      <?php get_sidebar(); ?>
    </section>
  </main>
<?php get_footer(); ?>
