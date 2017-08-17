<!--  The template for displaying Content excerpts - content.php -->
<div class="blog-post"> 
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_author(); ?></a> | <?php the_date(); ?></a></p>

	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>">Read More</a>
<!-- repeats for rest of the content in loop-->
</div><!-- /.blog-post -->