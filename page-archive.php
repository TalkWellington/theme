<?php
/* 
Template Name: Archives
*/
get_header(); ?>
<main class="row">		
		    <div class="col-sm-12">
		    	<div class="post">
		    	<div class="post-header-text">
		    		<h2 class="blog-post-title">Posts</h2>
		    		<p class="blog-post-meta">Our 1000 latest posts</p>
		    	</div>
		    	<div class="row">	
		    		<div class="col-sm-10 col-sm-offset-1">
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
</main>
<?php get_footer(); ?>		