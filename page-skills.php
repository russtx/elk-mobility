<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12">
		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('mainContent container'); ?>>
				<?php the_title('<h1>','</h1>'); ?>
		 		<?php the_content(); ?>
			</div>
		   <?php endwhile; ?>
		<?php else : ?>
		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
