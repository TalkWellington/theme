<?php get_header(); ?>
</header>
<div class="container">
	<main class="row">
		<div class="col-sm-12">


	<div class="post">
		<?php 
			$image_url;
			if ( has_post_thumbnail() ) {
				$image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

			}else{
				$image_url = 'http://www.kiwiwise.co.nz/img/cache/photo/centreport-wellington-700--.jpg';
			}			

			echo '<div class="col-sm-12 blog-main post-header-image" 
							 style="min-height: 350px; 
							 		background:url('.$image_url.') no-repeat center center; 
							 		background-size: cover;" >
				  </div>';
		  ?>
		<div class="post-body">
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
			
					<div class="post-header">
						<h2 class="blog-post-title"><?php the_title(); ?></h2>
						<p class="blog-post-meta">Our 1000 latest posts</p>
				
	
						<ul class="archive-list">
							<?php 
                                $p = new WP_Query(array('post_type' => 'post')); // check this is proper
                                if ($p->have_posts()) {
                                  while ($p->have_posts()) {
                                    $p->the_post();
                                    // Display      
                                    // Can I use a better way of building strings? 
                                    echo '<li class="blog-post"><a href="';
                                    echo the_permalink(); 
                                    echo '">';
                                    echo '<h3>';
                                    echo the_title(); 
                                    echo '</h3> </a>';
                                    echo the_category( ' / ' );
                                
                                  }
                                } 
                            ?>
						</ul>

					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</main>
</div>
<?php get_footer(); ?>