<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header(); ?>

<?php the_post(); ?>



	<section id="work-intro" class="work-intro full-height page-section">

			<div class="section-content">
				<div class="intro-content section-content">
					<div class="outer-container">
						<div class="inner-container">
							<h1 class="h1 page-title">Through our work, we explore what  happens when creative people are  involved in shaping solutions to the  issues we face as a society.</h1>

						</div>
					</div>
				</div>
			</div>
			<a href="#opportunity" class="scroll-down smooth-scroll"><span class="hide">Scroll down</span></a>

	</section>

	<section id="works" class="work__works page-section ">
		<div class="outer-container  push-triple-bottom">
			<div class="flex-blocks">
				<?php
                    if (have_rows('work_block')):
                        while (have_rows('work_block')) : the_row();
                        $image = $title = $type = $case_id = $link = "";
                            $image = get_sub_field('work_image');
                            $title = get_sub_field('work_title');
                            $type = get_sub_field('work_type');
                            $case_id = get_sub_field('work_case');
                            $link = get_permalink($case_id);

                        ?>

						<div class="work__block" style="position:relative;">
							<img src="<?php echo $image ?>" />
							<div class="work__block-text">
								<p class="work__title"><?php echo $title ?></p>
								<p class="work__type"><?php echo $type ?></p>
								<?php if ($case_id): ?>

									<a href="<?php echo $link ?>">
										<div class="work__link-arrow" style="position:absolute;">
											<span class="line"></span>
											<span class="line"></span>
										</div>
									</a>

								<?php endif; ?>
							</div>
						</div>

				<?php
                        endwhile;
                    endif;
                ?>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
