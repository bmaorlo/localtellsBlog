<div class="blog-area single-recent-blog" data-aos="fade-up" data-aos-duration="1500" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<figure class="blog_img" data-aos="zoom-in" data-aos-duration="1800">
		<?php $esole_default_img = array('class' => "img-responsive");
			if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('',$esole_default_img);?> </a>
				<?php } else { ?>
					<a href="<?php the_permalink(); ?>"><?php echo '<img alt="" src="'. esc_url(get_template_directory_uri()) . '/images/placeholder.png' .'">';?></a>
				<?php } ?>	
		  <div class="blog-showcase-overlay">
			<div class="blog-showcase-overlay-inner">
				<div class="blog-showcase-icons">							
					<a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
		  </div>
	</figure>
			 
	<div class="srb-content gray-container">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				
		<ul class="post-meta">
			<li><a href="#"><i class="fa fa-calendar"></i><span><?php echo get_the_date('j'); ?></span><?php echo get_the_date('M'); ?></a></li>
			<li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?> </a></li>
			<li><a href="<?php the_permalink(); ?>"><i class="fa fa-tags"></i><?php the_tags('', ', '); ?></a></li>
			<li><a href="#"><i class="fa fa-comments"></i> <?php comments_popup_link( '0', '1', '%', '', '-'); ?></a></li>
		</ul>
		<p><?php the_excerpt(); ?></p>
		<a class="read_more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','esol'); ?> <i class="fa fa-angle-double-right"> </i></a>
		
	</div>
</div>

	<?php wp_link_pages( array( 'before' => '<div class="blog-pagination" data-aos="fade-right" data-aos-duration="1200">' . __( 'Pages:', 'esol' ), 'after' => '</div>' ) ); ?>

