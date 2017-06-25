<div class="post">
<!-- 
this works but must use min-height on the div as well.. not sure why not working, will need break points if this. Depending on how it looks, might have to use inline style of 500px, then 250px@ breakpoint -->
	<?php 
	$image_url;
	if ( has_post_thumbnail() ) {
		$image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

	}else{
		$image_url = 'http://www.kiwiwise.co.nz/img/cache/photo/centreport-wellington-700--.jpg';
	}			

	echo '<div class="col-sm-12 blog-main post-header-image" 
					 style="min-height: 250px; 
					 		background:url('.$image_url.') no-repeat center center; 
					 		background-size: cover;" >
		</div>';
	
	?>
    <div class="post-body">
	    <div class="post-header-text">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<p class="blog-post-meta">
				<a href="#"><?php the_author(); ?></a> | <?php the_date(); ?> 
			</p>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
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
<!-- the rest of the content -->

</div><!-- /.blog-post -->