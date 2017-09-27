<?php get_header(); ?>

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
