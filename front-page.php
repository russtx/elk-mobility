<?php get_header(); ?>
<section id="homeTop">
	<div class="container">
		<div class="row">
			<div class="largeLogo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/large-logo.png" alt="logo">
			</div>
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-sm-4 ">
						<div class="homeBoxes">
								<?php
								    $your_query = new WP_Query( 'pagename=consulting' );
								    while ( $your_query->have_posts() ) : $your_query->the_post();
												the_post_thumbnail();
												 the_title('<h2>','</h2>'); ?>
								        <?php $trimexcerpt = get_the_excerpt();
									$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 30, $more = '… ' );
										echo '<a href="' . get_permalink() . '"><p>' . $shortexcerpt . '</p></a>';  ?>
								    <?php endwhile;
								    wp_reset_postdata();
								?>
								<a href="<?php echo home_url(); ?>/consulting"class="btn-main learnMore">Learn More</a>
						</div><!-- homeBoxes -->
					</div>
					<div class="col-sm-4 ">
						<div class="homeBoxes">
							<?php
							    $your_query = new WP_Query( 'pagename=education' );
							    while ( $your_query->have_posts() ) : $your_query->the_post();
											the_post_thumbnail();
											 the_title('<h2>','</h2>'); ?>
							        <?php $trimexcerpt = get_the_excerpt();
								$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 30, $more = '… ' );
									echo '<a href="' . get_permalink() . '"><p>' . $shortexcerpt . '</p></a>';  ?>
							    <?php endwhile;
							    wp_reset_postdata();
							?>
							<a href="<?php echo home_url(); ?>/education"class="btn-main learnMore">Learn More</a>
						</div><!-- homeBoxes -->
					</div>
					<div class="col-sm-4 ">
						<div class="homeBoxes">
							<?php
							    $your_query = new WP_Query( 'pagename=private-practice' );
							    while ( $your_query->have_posts() ) : $your_query->the_post();
											the_post_thumbnail();
											 the_title('<h2>','</h2>'); ?>
							        <?php $trimexcerpt = get_the_excerpt();
								$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 30, $more = '… ' );
									echo '<a href="' . get_permalink() . '"><p>' . $shortexcerpt . '</p></a>';  ?>
							    <?php endwhile;
							    wp_reset_postdata();
							?>
							<a href="<?php echo home_url(); ?>/private-practice"class="btn-main learnMore">Learn More</a>
						</div><!-- homeBoxes -->
					</div>
			</div>
			<a href="#homeContent"class="downButton" id="scrollDown">
				<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span><br />
				<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
			</a>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- homeTop -->
<section id="homeContent">
	<div class="whiteBackground">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" class="contentLogo">
					<h2><?php the_field('home_page_sub-title'); ?></h2>
					<?php if(have_posts()) : ?>
					   <?php while(have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class('mainContent'); ?>>
					 		<?php the_content(); ?>
						</div>
					   <?php endwhile; ?>
					<?php else : ?>
					<div class="alert alert-info">
					  <strong>No content in this loop</strong>
					</div>
					<?php endif; ?>
					<a href="<?php echo home_url(); ?>/about"class="btn-main learnMore">About Us</a>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- whiteBackground -->
</section><!-- homeContent -->
<section id="testimonialSection">
	<div class="whiteBackground">
		<div class="container">
				<div class="row">
					<h2>TESTIMONIALS</h2>
					<div class="col-sm-10 col-sm-offset-1">
							<div id="testimonialSlider" class="carousel slide" data-ride="">
					      <div class="carousel-inner " role="listbox ">
					        <?php
					          if( have_rows('testimonials', 'option') ):
					         	  $i=1; while ( have_rows('testimonials', 'option') ) : the_row(); ?>
					            <div class="item <?php if ($i == 1) echo 'active'; ?> ">
					              <div id="noPhoto"></div>
					              <div class="caption-wrapper">
					                <div class="caption">

					                  <p>&ldquo;</p><?php the_sub_field('testimonial_content');?><p>&rdquo;</p>
														<div class="col-xs-4 authorImage" >

																<img src="<?php the_sub_field('testimonial_authors_image');?>" alt="author image">

														</div>
														<div class="col-xs-8">
															<h4 class="authorName"><?php the_sub_field('testimonial_author'); ?></h4>
															<p class="authorLocation"><?php the_sub_field('testimonial_authors_location'); ?></p>
															<p class="authorProfession"><?php the_sub_field('testimonial_authors_profession'); ?></p>
														</div>
					                </div><!-- caption -->
					              </div><!-- caption-wrapper -->
					            </div><!-- item -->
					            <?php $i++;  endwhile;
					            else :
					            // no rows found
					          endif;
					          ?>
					      </div><!-- carousel-inner -->
					          <!-- Controls -->
					        <a class="left carousel-control" href="#hp-hero" role="button" data-slide="prev">
					          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#hp-hero" role="button" data-slide="next">
					          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					          <span class="sr-only">Next</span>
					        </a>
					    </div><!-- testimonialSlider -->

					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- whiteBackground -->
	</section><!-- testimonialSection -->
	<section id="video">
		<div class="whiteBackground">
			<div class="container">
	    	<div class="row">
	      	<div class=" col-md-7 video-container">
						<video id="myVideo" class="video" width="320" height="176"  >
						  <source src="<?php echo get_template_directory_uri(); ?>/images/StealthAnyMeeting.mp4" type="video/mp4">
						  <source src="<?php echo get_template_directory_uri(); ?>/images/StealthAnyMeeting.ogg" type="video/ogg">
						</video>
						<div class="playpause"></div>
		      </div><!-- video-container -->
						<div class=" col-md-5 learnContent">
							<h2>You&#39;ll Learn&#46;&#46;&#46;</h2>
								<?php
									if( have_rows('youll_learn-_subjects') ):
								    while ( have_rows('youll_learn-_subjects') ) : the_row();
								        the_sub_field('youll_learn-_content');
							    endwhile;
									else :
									endif;
							?>
						<a href="<?php echo home_url(); ?>/register"class="btn-main learnMore">Register</a>
					</div><!-- learnContent -->
		    </div><!-- row -->
		  </div><!-- container -->
		</div><!-- whiteBackground -->
	</section><!-- video -->
	<section id="contactSection">
		<div class="container">
		  <div class="row">
				<h2>Contact</h2>
					<div class="col-md-10 col-md-offset-1">
						<div class="col-sm-10 col-sm-offset-1 contactArea">
							<div class="col-sm-6 leftSide">
								<h4>Phone<span class="phone"><?php the_field('phone_number', 'option'); ?></span></h4>
								<h4>Email<span class="email"><?php the_field('email_address', 'option'); ?></span></h4>
								<span>
									<h2>
										Virginia &amp; <br />
										North Carolina
									</h2>
								</span>
									<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="redFacebook"></a>
					        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="redLinkedIn"></a>
							</div><!-- leftside -->
							<div class="col-sm-6 rightSide">
							<?php echo do_shortcode('[contact-form-7 id="55" title="Contact form 1"]'); ?>
							</div><!-- rightSide -->
						</div><!-- contactArea -->
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- contactSection -->
<?php get_footer(); ?>
