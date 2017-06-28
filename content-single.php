<!--   
 The template for displaying content-single - content-single.php
 
 The area of the page that contains comments and the comment form. -->

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
					<p class="blog-post-meta">
						<a href="#"><?php the_author(); ?></a> | <?php the_date(); ?> 
					</p>
				</div>	
				<?php the_content(); ?>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 categories">
			<h3>Categorised under:</h3>
				<p class=""><?php the_category( ' , ' ); ?></p>
			</div>
		</div>	
	</div>
</div><!-- /.blog-post -->