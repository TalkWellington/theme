<?php get_header(); ?>
</header>
<!--   The template for displaying a single post - single.php -->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );

					if ( comments_open() || get_comments_number() ) :
					  comments_template();
					endif;

				endwhile; endif; 
			?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>			