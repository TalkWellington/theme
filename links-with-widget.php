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
						<h2 class="blog-post-title">Links</h2>
						<p class="blog-post-meta">Sites we draw on regularly </p>
						<div id="links-widget-area">
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('links-widget-area')) : else : ?>
                    <div class="pre-widget">
                    <p><strong>Links Area</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin. Generally this will be links</p>
                  </div>
                <?php endif; 
                ?>
						</div>
						<p>links text widget? goes here</p>
					</div>
				</div>
			</div>
		</div>

	  </div>
	</div>
</main>
</div>
<?php get_footer(); ?>