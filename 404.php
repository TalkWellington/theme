<?php get_header(); ?>     
 <div class="container-fluid container-body"> <!-- Container for whole page -->
<header>  
<div class="row start ">             
    <!-- // Define our WP Query Parameters -->
    <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
     
    <!-- // Start our WP Query -->
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        
        <?php 
          $post_link = get_the_permalink();
          $post_author = get_the_author();
          $post_title = get_the_title();
          $post_excerpt = get_the_excerpt();

          $featured_image;
          if ( has_post_thumbnail() ) {
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          }else{
            $featured_image = 'http://www.kiwiwise.co.nz/img/cache/photo/centreport-wellington-700--.jpg';
          }  
          
          if(0 == $the_query->current_post) {


           echo '<div class="feature-container col-sm-12">
                    <a href= " '.$post_link.' " > 
                      <div class="top-feature col-sm-6" style="background:url('.$featured_image.') no-repeat center center; background-size: cover;" >
                      </div>
                      <div class="feature-titles col-sm-6">
                             <h2> '.$post_title.'</h2>
                             <h3> by '.$post_author.'</h3>  
                             <p> '.$post_excerpt.' </p>      
                         
                      </div>
                    </a>
                 </div>
                </div> <!-- row start end ?-->
              <div class="row second">';

            
          } else {
            echo ' <a href= " '.$post_link.' " >
                      <div class="feature-container col-sm-6">
                          <div class="small-feature"  style="background:url('.$featured_image.') no-repeat center center;   background-size: cover;" >
                          </div>    
                          <div class="feature-titles">
                             <h2> '.$post_title.'</h2>
                             <h3> by '.$post_author.'</h3>  
                             <p> '.$post_excerpt.' </p>      
                          </div>
                      </div>
                    </a> 
                    ';
          }
         ?>

    <!-- Repeat the process and reset once it hits the limit -->
    
    <?php 
        endwhile;
        wp_reset_postdata();
    ?>

  </div>  <!-- row second end -->
</header>  
<main class="row blog-main"> <!-- blog roll and categories -->
   <section class="col-sm-8 blog-roll pad-right-zero">
    <h2 class="latest-post">Page Not Found</h2>
    <div class="blog-list">
    	<h2>Sorry, there was an error (404) finding that page.</h2>
    	<p>Check the URL in the address bar is valid or try reloading the page.</p>

    </div>
  </section>  

<?php get_sidebar('sidebar'); ?>

</main>
<?php get_footer(); ?>
