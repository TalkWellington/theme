<div class="blog-post"> <!-- consider removing sol-sm 8 -->
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_author(); ?></a> | <?php the_date(); ?></a></p>

	<?php the_excerpt(); ?>

<!-- repeats for rest of the content -->
</div><!-- /.blog-post -->