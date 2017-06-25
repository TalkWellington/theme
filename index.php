<?php get_header(); ?>
  <main class="row">
    <!-- <div class="row"> -->
      <div class="col-sm-12 blog-main">
        <section class="features"><!-- features -->
          <div class="row hero-feature"> <!-- hero feature -->
            <div class="col-sm-12">
              <div id="head-feature-area">
                
                  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('head-feature-area')) : else : ?>
                  <div class="pre-widget">
                    <p><strong>Headline Feature Area</strong></p>
                    <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be Korero Wellingtons hero image link to out latest/biggest feature story</p>
                  </div><?php endif; ?>
          
              </div>
            </div>
          </div><!-- /hero feature -->
          <div class="row"> <!-- minor feature wrapper-->
            <div class="col-sm-6 blog-main">
              <!-- 2nd feature -->
              <div id="secondary-feature">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('secondary-feature')) : else : ?>
                <div class="pre-widget">
                  <p><strong>Secondary Feature Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
                </div><?php endif; ?>
              </div>
            </div><!-- 2nd feature -->
            <div class="col-sm-6 blog-main">
              <!-- 3rd feature -->
              <div id="tertiary-feature">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('tertiary-feature')) : else : ?>
                <div class="pre-widget">
                  <p><strong>Tertiary Feature Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
                </div><?php endif; ?>
              </div>
            </div><!-- /3rd feature -->
          </div><!-- /minor feature wrapper -->
        </section><!-- /features -->
        
          <!-- blog roll and categories -->
        <section class="row">
              <div class="col-sm-8">
                  <section class="blog-roll">
                    <h2 class="latest-post">Latest</h2>
                    <div class="blog-list">
                      <?php 

                                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                                    get_template_part( 'content', get_post_format() );
                                    
                                    endwhile; endif; 
                      ?>
                    </div>
                  </section><!-- the loop and sidbar-->
              </div>
              <div class="col-sm-4">
                <?php get_sidebar(); ?>
              </div>
        </section>


    </div>
  </main>
<?php get_footer(); ?>
