<?php get_header(); ?>
<div class="background">

		<div class="container  ourBlog">
			<h1>OUR BLOG</h1>
			<?php
$args = array( 'numberposts' => 3, 'order'=> 'DEC',  );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?>
<div class="row">
		<div class="col-xs-12 col-md-2 blogImage">
			<?php
// Must be inside a loop.

if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
        . '/images/thumbnail-default.jpg" />';
}
?>
		</div>

		<div class="col-xs-12 col-md-10 blogContent">
        <h4><?php the_date(); ?></h4
        <br />
        <h2><?php the_title(); ?></h2>

				<?php the_excerpt(); ?>
    </div>
	</div><!-- row -->
<?php endforeach; ?>

		</div>

</div>
<?php get_footer(); ?>
