<div class="col-sm-4 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h3>Categories</h3>
		<ul class="list-items categories">
			<?php $category_ids = get_all_category_ids(); ?>
			<?php
			$args = array(
			'orderby' => 'slug'
			);
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
			echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"><i class="ss-icon" aria-hidden="true">' . $category->name . '</i>' . '' . $category->description . '</a></li>';
			}
			?>
		</ul>
 	</div>
	<div class="sidebar-module sidebar-module-inset">
		<h3>Subscribe</h3>
		<p>Enter you email below to reviece updates.</p>	
	</div>
</div><!-- /.blog-sidebar -->