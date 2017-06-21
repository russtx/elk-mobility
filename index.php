<?php get_header(); ?>
<div class="background">
<div class="container">
	<div class="row">
		<div class="col-xs-12 ourBlog">
			<h1>OUR BLOG</h1>
			<?php
					// query to set the posts per page to 3
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array('posts_per_page' => 3, 'paged' => $paged );
					query_posts($args); ?>
					<!-- the loop -->
					<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 blogArea wow slideInLeft ">
							<div class="col-xs-2 redBox">
								<h3>
									<?php echo get_the_date('F '); ?><br/>
									<?php echo get_the_date(' j'); ?>
								</h3>
							</div>

							<div class="col-xs-9 col-xs-offset-1 blueBox">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
								<span><p><?php the_field('post_author'); ?></p></span>
	              <?php my_excerpt('short'); ?>
							</div>
						</div><!-- blogPost -->
					<?php endwhile; ?>
					<!-- pagination must add plugin -->
					<?php wp_pagenavi(); ?>

					<?php else : ?>
					<!-- No posts found -->
					<?php endif; ?>

		</div>
	</div><!-- row -->
</div><!-- container -->
</div>
<?php get_footer(); ?>
