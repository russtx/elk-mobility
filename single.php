<?php get_header(); ?>
        <div class="row">
            <!-- section -->
        <section class="col-xs-12 single page-content">
            <div class="blogContainer">
              <div class="col-xs-12 col-sm-8 col-sm-offset-2 blogArea wow slideInLeft ">
              <h1>OUR BLOG</h1>
              <div class="clearfix"></div>
              <div class="subButton"><a href="#" class="btn-main right-side">SUBSCRIBE</a></div>
              <div class="clearfix"></div>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <div class="col-xs-2 redBox">
                <h3>
                  <?php echo get_the_date('F '); ?><br/>
                  <?php echo get_the_date(' j'); ?>
                </h3>
              </div>
              <div class="col-xs-9 col-xs-offset-1 blueBox">
                <article id="post-<?php the_ID(); ?>" <?php post_class('postBox'); ?>>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <span><p><?php the_field('post_author'); ?></p></span>
                    <?php the_content(); // Dynamic Content ?>
                </article>
                <!-- /article -->
              </div>
            <?php endwhile; ?>
            <?php else: ?>
                <!-- article -->
                <article>
                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                </article>
                <!-- /article -->
            <?php endif; ?>
          </div><!-- blogArea -->
        </div><!-- blogContainer -->
      <div class="clearfix"></div>
              </section>
        <!--// END SINGLE //-->
        </div>
        <!--// END ROW //-->
        <div class="clearfix"></div>

<?php get_footer(); ?>
