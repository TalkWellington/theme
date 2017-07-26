<?php
/*
Template Name: Links page - links.php
*/
?>

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
						<!-- <h2 class="blog-post-title">Content</h2>
						<p class="blog-post-meta">Browse posts by category</p> -->
		<!-- 				
							<ul class="list-items content-categories">
								<?php 
							//	$categories = get_terms( 'category');						 								
								// $categories = get_categories( $args );
							//	foreach ( $categories as $category ) {
							//	echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"><p>' . $category->name . '</p></a></li>';
								}
								?>
							</ul> -->

						<h2 class="blog-post-title">Links</h2>
						<p class="blog-post-meta">Sites we draw on regularly </p>
						<ul class="list-items content-categories">
							<li><a href="http://architecture.org.nz/blog/"><p>Architecture Centre</p></a></li>
							<li><a href="https://www.citylab.com/"><p>Citylab</p></a></li>
							<li><a href="https://congestionfreewellington.org.nz/"><p>Congestion Free Wellington </a>
							<li><a href="https://cycwell.wordpress.com/">	<p>Cycle Aware Wellington </p></a></li>
							<li><a href="https://e-tangata.co.nz/">	<p> e-Tangata </p></a></li>
							<li><a href="https://sciblogs.co.nz/blogs/the-dismal-science/">	<p>The Dismal Science </p></a> </li>
							<li><a href="http://eyeofthefish.org/">	<p>Eyeofthefish</p></a></li>
							<li><a href="https://www.greaterauckland.org.nz/"><p>Greater Auckland</p></a></li>								 
							<li><a href="http://www.islandbaycycleway.org.nz/blog/archives/08-2014"><p>Island Bay Cycleway </p></a></li>
							<li><a href="https://motu.nz/"><p>	Motu</p></a></li>
							<li><a href="https://nzinitiative.org.nz/">	<p>New Zealand Initiative</p></a></li>
							<li><a href="http://www.productivity.govt.nz/"><p>Productivity Commission</p></a></li> 
							<li><a href="https://thespinoff.co.nz/"><p>The Spinoff</p></a></li>
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