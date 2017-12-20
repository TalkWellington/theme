 <?php
/*
Template Name: Sidebar
*/
 ?>

  <section class="col-sm-4 pad-left-zero">

   <div class="blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
      <h2>Categories</h2>
      <ul class="list-items categories">

        <?php 

        // $category_ids = get_all_category_ids();
        // $category_ids = get_terms('category');
        
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
            echo '
            <li>
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
    <div class="sidebar-module sidebar-module-inset">
    <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>

      <h2>Popular Tags</h2>
      <ul class="list-items categories">
      <li><?php wp_tag_cloud( 'smallest=12&largest=24' ); ?></li>
      </ul>

    <?php endif; ?>
    </div>
  </div>

</section>