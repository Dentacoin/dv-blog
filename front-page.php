<?php 
get_header();

	while ( have_posts() ) {
	the_post();	?>

		<div class="main-section">
    		<div class="container">
    			<h1><?php _e("Free Dental Market Statistics Powered by Blockchain", 'blog'); ?></h1>
    		</div>
    	</div>

    	<div class="front-info container">
    		<?php 
			$query = new WP_Query( array( 
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'posts_per_page' => -1,
			) );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
			    	$query->the_post(); 
			    	if(get_field('featured', $featured->ID) === true) {
			        	$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large', false ); ?>

			    		<a href="<?php the_permalink(); ?>" class="main-image cover" style="background-image: url(<?php echo $src[0]; ?>); background-position: 50% <?php echo !empty(get_field('featured_image_position')) || get_field('featured_image_position') === '0' ? get_field('featured_image_position').'%' : '50%' ?>"></a>
			    		<div class="main-post">
			    			<div class="post-wrapper">
			    				<img class="star" src="<?php echo get_stylesheet_directory_uri(); ?>/img/star.png" alt="Dentavox blog featured star icon">
				    			<div class="post-info">
				    				<?php foreach (wp_get_post_categories( get_the_ID() ) as $k => $f_cat_id) {
			    						if($k == 0) { ?>
			    							<a href="<?php echo get_category_link($f_cat_id); ?>" class="cat">
												<?php echo get_category($f_cat_id)->name; ?>
											</a>
										<?php }
									} ?>
				    				<span class="date"><?php echo get_the_date('M j, Y (D)'); ?></span> 
				    			</div>
				    			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				    			<?php the_excerpt(); ?>
				    			<a href="<?php the_permalink(); ?>" class="read-more"><?php _e("Read more", 'blog'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/read-arrow.png"></a>
				    		</div>
			    		</div>
			    		<?php break;
		    		}
		    	}
		    	wp_reset_postdata();
		    } ?>
    	</div>

    	<?php $args = array(
			'posts_per_page'   => 20,
            'orderby'           => 'post_date',
            'order'             => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'cat'			   => 14
		);
		$stats_posts = get_posts( $args ); ?>

		<?php if (!empty($stats_posts)) { ?>
	    	<div class="section-slider-posts">
	    		<h2 class="section-title"><span><?php echo get_cat_name(14); ?></span></h2>

	    		<div class="slider-posts-inner">

		    		<div class="flickity slider-posts">
						<?php foreach ($stats_posts as $h_post) { 
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $h_post->ID ), 'medium', false ); ?>

			    			<div class="post">
			    				<div class="post-inner">
				    				<a href="<?php the_permalink($h_post->ID); ?>" class="post-image cover" style="background-image: url(<?php echo $src[0] ?>); background-position: 50% <?php echo !empty(get_field('featured_image_position', $h_post->ID)) || get_field('featured_image_position', $h_post->ID) === '0' ? get_field('featured_image_position', $h_post->ID).'%' : '50%' ?>"></a>
			    					<div class="hover-top">
					    				<div class="post-info">
						    				<?php foreach (wp_get_post_categories( $h_post->ID ) as $k => $h_cat_id) {
					    						if($k == 0) { ?>
					    							<a href="<?php echo get_category_link($h_cat_id); ?>" class="cat">
														<?php echo get_category($h_cat_id)->name; ?>
													</a>
												<?php }
											} ?>
						    				<span class="date"><?php echo get_the_date('M j, Y (D)', $h_post->ID); ?></span> 
						    			</div>
						    			<a href="<?php the_permalink($h_post->ID); ?>"><h4><?php echo get_the_title($h_post->ID); ?></h4></a>
						    		</div>
						    		<div class="bottom-container">
						    			<p>
						    				<?php echo get_the_excerpt($h_post->ID); ?>
						    			</p>
				    					<a href="<?php the_permalink($h_post->ID); ?>" class="read-more"><?php _e("Read more",'blog'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/read-arrow.png"></a>
						    		</div>
					    		</div>
			    			</div>
			    		<?php } ?>
		    		</div>
		    	</div>

		    	<div class="tac">
		    		<a href="<?php echo get_category_link(14); ?>" class="gray-button">See all</a>
		    	</div>
	    	</div>
	    <?php } ?>

    	<?php $args = array(
			'posts_per_page'   => 20,
            'orderby'           => 'post_date',
            'order'             => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'cat'			   => 19
		);
		$stats_posts = get_posts( $args ); ?>

		<?php if (!empty($stats_posts)) { ?>
	    	<div class="section-slider-posts">
	    		<h2 class="section-title"><span><?php echo get_cat_name(19); ?></span></h2>

	    		<div class="slider-posts-inner">

		    		<div class="flickity slider-posts">
						<?php foreach ($stats_posts as $h_post) { 
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $h_post->ID ), 'medium', false ); ?>

			    			<div class="post">
			    				<div class="post-inner">
				    				<a href="<?php the_permalink($h_post->ID); ?>" class="post-image cover" style="background-image: url(<?php echo $src[0] ?>); background-position: 50% <?php echo !empty(get_field('featured_image_position', $h_post->ID)) || get_field('featured_image_position', $h_post->ID) === '0' ? get_field('featured_image_position', $h_post->ID).'%' : '50%' ?>"></a>
			    					<div class="hover-top">
					    				<div class="post-info">
						    				<?php foreach (wp_get_post_categories( $h_post->ID ) as $k => $h_cat_id) {
					    						if($k == 0) { ?>
					    							<a href="<?php echo get_category_link($h_cat_id); ?>" class="cat">
														<?php echo get_category($h_cat_id)->name; ?>
													</a>
												<?php }
											} ?>
						    				<span class="date"><?php echo get_the_date('M j, Y (D)', $h_post->ID); ?></span> 
						    			</div>
						    			<a href="<?php the_permalink($h_post->ID); ?>"><h4><?php echo get_the_title($h_post->ID); ?></h4></a>
						    		</div>
						    		<div class="bottom-container">
						    			<p>
						    				<?php echo get_the_excerpt($h_post->ID); ?>
						    			</p>
				    					<a href="<?php the_permalink($h_post->ID); ?>" class="read-more"><?php _e("Read more",'blog'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/read-arrow.png"></a>
						    		</div>
					    		</div>
			    			</div>
			    		<?php } ?>
		    		</div>
		    	</div>

		    	<div class="tac">
		    		<a href="<?php echo get_category_link(19); ?>" class="gray-button">See all</a>
		    	</div>
	    	</div>
	    <?php } ?>

    	<div class="section-news" <?php echo empty($stats_posts) ? 'style="margin-top: 100px;"' : '' ?>>
    		<h2 class="section-title"><span><?php _e("Other News", 'blog'); ?></span></h2>

    		<div class="container">
	    		<div class="news-wrapper">
		    		<script type="text/javascript">
			            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

			            jQuery(document).ready(function($){
				            function cvf_load_all_posts(page){
						        // Start the transition
						        $(".cvf_pag_loading").fadeIn().css('background','#ccc');

						        // Data to receive from our server
						        // the value in 'action' is the key that will be identified by the 'wp_ajax_' hook 
						        var data = {
						            page: page,
						            action: "demo-pagination-load-posts"
						        };

						        // Send the data
						        $.post(ajaxurl, data, function(response) {
						            // If successful Append the data into our html container
						            $(".cvf_universal_container").html('').append(response);
						            // End the transition
						            $(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
						        });
						    }

						    // Load page 1 as the default
						    cvf_load_all_posts(1);

						    // Handle the clicks
						    $('.cvf_universal_container .cvf-universal-pagination li.active').live('click',function(){
						        var page = $(this).attr('p');
						        $('.cvf-pagination-nav').first().remove();
						        cvf_load_all_posts(page);


						        $('html, body').animate({
						            scrollTop: $('.section-news').offset().top - 90
						        }, 500);
						    });
						});
			        </script>
			        <div class = "cvf_pag_loading">
			            <div class = "cvf_universal_container">
			                <div class="cvf-universal-content flex wrap"></div>
			            </div>
			        </div>
	    		</div>
	    	</div>
    	</div>

	    <div class="blue-ribbon">
	    	<div class="logged-dentist user-status">
				<div class="container flex">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stats.png" alt="Dentavox dental statistics icon">
					<div class="ribbon-box">
						<h2>
							<?php _e("Curious to see our dental survey stats?", 'blog'); ?>
						</h2>
					</div>
					<a href="https://dentavox.dentacoin.com/en/dental-survey-stats" target="_blank" class="white-transparent-button"><?php _e("Check Stats", 'blog'); ?></a>
				</div>
			</div>
	    	<div class="logged-patient not-logged user-status">
				<div class="container flex">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stats-home.png" alt="Dentavox take dental surveys icon">
					<div class="ribbon-box">
						<h2>
							<?php _e("Browse all survey topics and start earning DCN!", 'blog'); ?>
						</h2>
					</div>
					<a href="https://dentavox.dentacoin.com/en/paid-dental-surveys/" target="_blank" class="white-transparent-button"><?php _e("Take surveys", 'blog'); ?></a>
				</div>
			</div>
		</div>
	</div>

	<?php } 
get_footer(); ?>