<?php get_header(); ?>

<div class="row">
 <div class="col-sm-12 blog-main">

    <div class="features">
      <div class="row hero-feature">
        <div class="col-sm-12">
          <div id="head-feature-area"> <!-- make this min height 500px -> 250 on breakpoint -->
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('head-feature-area')) : else : ?>
            <div class="pre-widget">
              <p><strong>Headline Feature Area</strong></p>
              <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be Korero Wellingtons hero image link to out latest/biggest feature story</p>
            </div>

            <?php endif; ?>
          </div>
       </div> 
      </div>  

      <div class="row"> <!-- remove marign in mobile-->
        <div class="col-sm-6 blog-main">  
          <div id="secondary-feature">

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('secondary-feature')) : else : ?>

              <div class="pre-widget">
                <p><strong>Secondary Feature Area</strong></p>
                <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
              </div>

            <?php endif; ?>

          </div>
        </div> 
        <div class="col-sm-6 blog-main">
          <div id="tertiary-feature">

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('tertiary-feature')) : else : ?>

              <div class="pre-widget">
                <p><strong>Tertiary Feature Area</strong></p>
                <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
              </div>

            <?php endif; ?>

          </div>
        </div>
      </div> <!-- row -->
      </div> <!-- features -->


    <div class="row blog-roll">
      <div class="col-sm-8">
        
          <?php 

          if ( have_posts() ) : while ( have_posts() ) : the_post();

          get_template_part( 'content', get_post_format() );
          
          endwhile; endif; 
          ?>
        
      </div> <!-- the loop and sidbar-->
      <?php get_sidebar(); ?>
    </div>

  </div> <!-- /.blog-main -->
</div> <!-- /.row -->

<?php get_footer(); ?>