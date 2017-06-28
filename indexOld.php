<?php get_header(); ?>
  <main class="row">

      <div class="col-sm-12 blog-main">
        <section class="features"><!-- features -->
          <div class="row hero-feature"> <!-- hero feature -->
            <div class="col-sm-12">
              
              <div id=logo class="col-sm-6">
                  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('logo')) : else : ?>
                  <div class="pre-widget">
                    <p><strong>Logo Area</strong></p>
                    <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be the Korero Wellington logo</p>
                  </div><?php endif; 
                 ?>
              </div>

              <div id="head-feature-area" class="col-sm-6">
                
                  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('head-feature-area')) : else : ?>
                  <div class="pre-widget">
                    <p><strong>Headline Feature Area</strong></p>
                    <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be Korero Wellingtons hero image link to out latest/biggest feature story</p>
                  </div><?php endif; ?>
          
              </div>
            </div>
          </div><!-- /hero feature -->
          <div class="row"> <!-- minor feature wrapper-->
            
              <!-- 2nd feature -->
              <div id="secondary-feature" class="col-sm-6 blog-main">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('secondary-feature')) : else : ?>
                <div class="pre-widget">
                  <p><strong>Secondary Feature Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
                </div><?php endif; ?>
              </div>
         


          
              <!-- 3rd feature -->
              <div id="tertiary-feature" class="col-sm-6 blog-main">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('tertiary-feature')) : else : ?>
                <div class="pre-widget">
                  <p><strong>Tertiary Feature Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
                </div><?php endif; ?>
              </div>
           <!-- /3rd feature -->

          </div><!-- /minor feature wrapper -->
        </section><!-- /features -->
        <nav class="row">
    
          <div class="blog-nav col-sm-12">

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

          </div>
    
  </nav>

          <!-- blog roll and categories -->
        <section class="row">
              <div class="col-sm-8 pad-right-zero">
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
              <div class="col-sm-4 pad-left-zero">
                <?php get_sidebar(); ?>
              </div>
        </section>


    </div>
  </main>
<?php get_footer(); ?>
