<?php

$case_studies = get_case_studies(array(
    'orderby' => 'rand',
    'posts_per_page' => '1',
    'meta_key' => 'case_study_featured',
    'meta_value' => true,
    'post__not_in' => array( get_the_id() )
));
foreach ($case_studies as $study) :

    $featured_image_id = get_post_thumbnail_id( $study->ID );
    $featured_image_array = wp_get_attachment_image_src($featured_image_id, 'large', true);
    $featured_image_url = $featured_image_array[0];
    $color = get_field('case_study_color', $study->ID); ?>

    <section class="page-section full-height case-study-preview active-on-inview use-ui-light-theme <?php echo $study->post_name; ?>" data-offset="0.25">
        <div class="section-container">
            <div class="section-image-container">
                <div class="section-image" style="background-image: url( <?php echo $featured_image_url; ?> );">
                    <div class="scrim"></div>
                </div>
            </div>
            <div class="section-content">
                <div class="outer-container">
                    <div class="inner-container">

                        <h2 class="h1 mt-nudge super"><?php echo get_the_excerpt( $study ); ?></h2>
                        <h3 class="page-subtitle mt-3"><?php echo get_field('case_study_subtitle', $study->ID); ?></h3>
                        
                        <p><a href="<?php echo get_permalink( $study ); ?>" class="button-ghost" style="margin-top:0.5em">view case study &nbsp; &#8250;</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endforeach; ?>
