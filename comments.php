
<!--   
 The template for displaying Comments - comments.php
 
 The area of the page that contains comments and the comment form. -->

<?php if ( post_password_required() ) {
	return;
} ?>
			<?php if ( have_comments() ) : ?>
			<div class="container">
				<div class="row">
						<div class="col-sm-12">
								<h3 class="comments-title">
									<?php
									printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
										number_format_i18n( get_comments_number() ), get_the_title() );
									?>
								</h3>
							<div class="comments-body">
								<div id="comments" class="comments-area">
										<ul class="comment-list">
											<?php 
											wp_list_comments( array(
												'short_ping'  => true,
												'avatar_size' => 50,
											) );
											?>
										</ul>
							<?php endif; ?>
							<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
									<p class="no-comments">
										<?php _e( 'Comments are closed.' ); ?>
									</p>
								<?php endif; ?>
								</div>
							</div>
								
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
									<?php comment_form(array('title_reply'=>'Leave a comment')); ?>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
