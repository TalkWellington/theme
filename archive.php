<?php
/*
Template Name: Archives
*/
get_header(); ?> 
<div class="container-fluid container-body"> <!-- Container for whole page -->
<header>  
<div class="row start ">             
    <!-- // Define our WP Query Parameters -->
    <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
     
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
            $featured_image = 'https://talkwellington.org.nz/wp-content/uploads/2017/07/resized-optimised-to35percent-Porirua-train-station-mural-up-stairs-photo-jontynz.jpg';           
          }  
          
          if(0 == $the_query->current_post) {


           echo '<div class="col-sm-12 feature-container">
                    <a href= " '.$post_link.' " > 
                      <div class="top-feature col-sm-6" style="background:url('.$featured_image.') no-repeat center center; background-size: cover;" >
                      </div>
                      <div class="col-sm-6 feature-titles">
                             <h2 class="first-feature-title"> '.$post_title.'</h2>
                             <h3> by '.$post_author.'</h3>  
                             <p> '.$post_excerpt.' </p>      
                         
                      </div>
                    </a>
                 </div>
                </div> <!-- row start end ?-->
              <div class="row second">';

            
          } else {
            echo ' <a href= " '.$post_link.' " >
                      <div class="col-sm-4 feature-container">
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
    <h2 class="latest-post">Results</h2>
    <div class="blog-list">

    	<p>The following posts are filed under: <span class="search-result"><?php single_cat_title(); ?>.</span></p>



      <?php 

      if ( have_posts() ) :
         while ( have_posts() ) : the_post();
     
            get_template_part( 'content', get_post_format() );

         endwhile; 

        echo '<div class="page-links">
                <div class="nav-previous alignleft">';
                    next_posts_link( 'Older posts' );
        echo '  </div>
                 <div class="nav-next alignright">';
                    previous_posts_link( 'Newer posts' );      
        echo '  </div>
              </div>';

      endif; 

      ?>


    </div>
  </section><!-- the loop -->          

 <?php get_sidebar('sidebar'); ?>

</main>
<?php get_footer(); ?>
