<?php get_header(); ?>

<section id="contactSection">

		<div class="container">
			<div class="row">
				<h2>Contact</h2>
					<div class="col-md-10 col-md-offset-1">
						<div class="col-sm-10 col-sm-offset-1 contactArea">
							<div class="col-sm-6 leftSide">
								<h4>Phone:<span class="phone"><?php the_field('phone_number'); ?></span></h4>
								<h4>Address: <span class="address"><?php the_field('address'); ?></span></h4><br />
													   <h4 class="float"><span class="address"><?php the_field('city'); ?></span></h4>
														 <h4 class="float" > <span class="address"><?php the_field('state'); ?></span></h4>
														 <h4 class="float" ><span class="address"><?php the_field('zip_code'); ?></span></h4><br />
									<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="redFacebook"></a>
									<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="redLinkedIn"></a>
							</div><!-- leftside -->
							<div class="col-sm-6 rightSide">
							<?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
							</div><!-- rightSide -->
						</div><!-- contactArea -->
					</div>
				</div><!-- row -->
			</div><!-- container -->

	</section><!-- contactSection -->
<?php get_footer(); ?>
