<?php get_header();
	$cur_cat_id = get_cat_id( single_cat_title("",false) ); ?>

		<div class="loader-mask" id="loader">
		    <div class="loader">
		      	"Loading..."
		    </div>
		</div>

		<div class="main-section">
			<div class="container">
				<h1 class="category-title"><?php single_cat_title(); ?></h1>
				<div class="cat-descr">
					<p><?php echo category_description($cur_cat_id); ?></p>
				</div>
			</div>
		</div>
		<div class="category-posts container">
			<?php echo do_shortcode('[ajax_load_more id="4125688348" scroll="false" container_type="div" post_type="post" posts_per_page="6" category="'.get_cat_slug($cur_cat_id).'" images_loaded="true"]'); ?>
		</div>

	    <div class="blue-ribbon">
	    	<div class="logged-dentist not-logged user-status">
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
	    	<div class="logged-patient user-status">
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
	    
<?php get_footer(); ?>