<?php get_header(); ?>
<!-- Page heading Section -->
<?php esol_breadcrumbs(); ?>	
<!-- Page heading Section -->

<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<!-- Sidebar Section -->	

			<!-- Blog Area Section -->	
			<div class="col-md-8">
				<?php
				if(have_posts()):
					the_post(); ?>
				<div class="blog-area" data-aos="fade-up" data-aos-duration="1500" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<figure class="blog_img" data-aos="zoom-in" data-aos-duration="1800">
						<?php $default_img = array('class' => "img-responsive");?>
						<?php if(has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('',$default_img);?> </a>
								<?php endif; ?>
					</figure>
					 
					<div class="blog_text">
						<h3 class="content_headings_black"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="blog-poast-info">
							<ul>
							   <li><a href="#"><i class="fa fa-calendar"></i><span><?php echo get_the_date('j'); ?></span>     <?php echo get_the_date('M'); ?></a></li>
								<li><i class="fa fa-user"> </i>
								<a class="admin" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> <?php echo get_the_author(); ?> </a>
								</li>
								<li><i class="fa fa-comment"> </i><a class="p-blog" href="#"><?php comments_popup_link( '0', '1', '%', '', '-'); ?></a></li>
								<?php if(get_the_category_list() != '') { ?>
								<li><i class="fa fa-tags"> </i><a class="p-blog" href="#"><?php the_category(' '); ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<p><?php the_content(); ?></p>
					</div>
					
				</div><!--/.blog-item-->	
				<?php endif; comments_template( '', true ); ?>
			</div>			
			<!-- /Blog Area Section -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>		
<?php get_footer(); ?>