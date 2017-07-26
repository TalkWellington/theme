<!--   
 The template for sidebar content - sidebar.php
 
 The area of the page that contains comments and the comment form. -->

<div class="blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h2>Categories</h2>
		<ul class="list-items categories">

			<?php $category_ids = get_all_category_ids(); ?>
			<?php
			$args = array(
			'orderby' => 'slug'
			);
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
			if($category->term_id == 52){
				echo '<li>
				<a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">
				<div class="fa fa-bus fa-lg fa-fw  cat-icon"></div>
				' . $category->name . '</a>
			  	</li>';


					
				}
			else {	
			echo '<li>
					<a href="' . get_category_link( $category->term_id ) . '" rel="bookmark">
					<img class="cat-icon" src="https://talkwellington.org.nz/wp-content/uploads/2017/07/'.$category->term_id .'.svg " />
					<p>' . $category->name . '</p></a>
				  </li>';
			//NOTE: when working locally, image src or category IDs will be different address. 
			}	
			}
			?>

			
			
		</ul>
 	</div>
	<!-- <div class="sidebar-module sidebar-module-inset">
		<h3>Subscribe</h3>
		<p>Enter you email below to reviece updates.</p>	
	</div> -->
</div><!-- /.blog-sidebar -->

