<?php get_header(); ?>

	<div class="error-wrapper">

		<div class="error-container">
			<div class="tac container">
				<img class="error-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" alt="Dentavox page not found">
				<h2>Sorry, Page Was Not Found. <br> Maybe You Are Looking for One of Our Latest Posts.</h2>
			</div>

    		<div class="section-slider-posts">
	    		<div class="slider-posts-inner">

		    		<div class="flickity slider-posts">
		    			<?php $args = array(
							'posts_per_page'   => 6,
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'orderby'          => 'id',
							'order'            => 'DESC',
						);
						$latest_posts = get_posts( $args );

						foreach ($latest_posts as $l_post) { 
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $l_post->ID ), 'medium', false ); ?>

			    			<div class="post">
			    				<div class="post-inner">
				    				<a href="<?php the_permalink($l_post->ID); ?>" class="post-image cover" style="background-image: url(<?php echo $src[0] ?>); background-position: 50% <?php echo !empty(get_field('featured_image_position', $l_post->ID)) || get_field('featured_image_position', $l_post->ID) === '0' ? get_field('featured_image_position', $l_post->ID).'%' : '50%' ?>"></a>
			    					<div class="hover-top">
					    				<div class="post-info">
						    				<?php foreach (wp_get_post_categories( $l_post->ID ) as $k => $l_cat_id) {
					    						if($k == 0) { ?>
					    							<a href="<?php echo get_category_link($l_cat_id); ?>" class="cat">
														<?php echo get_category($l_cat_id)->name; ?>
													</a>
												<?php }
											} ?>
						    				<span class="date"><?php echo get_the_date('M j, Y (D)', $l_post->ID); ?></span> 
						    			</div>
						    			<a href="<?php the_permalink($l_post->ID); ?>"><h4><?php echo get_the_title($l_post->ID); ?></h4></a>
						    		</div>
						    		<div class="bottom-container">
						    			<p>
						    				<?php echo get_the_excerpt($l_post->ID); ?>
						    			</p>
				    					<a href="<?php the_permalink($l_post->ID); ?>" class="read-more"><?php _e("Read more",'blog'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/read-arrow.png"></a>
						    		</div>
					    		</div>
			    			</div>
			    		<?php } ?>
		    		</div>
		    	</div>
	    	</div>
			<div class="tac">
	    		<a href="<?php echo get_site_url(); ?>" class="blue-button"><?php _e("Back to home page", 'blog'); ?></a>
	    	</div>
		</div>
	</div>

<?php get_footer(); ?>