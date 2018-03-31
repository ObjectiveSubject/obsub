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
                    <h1 class="case-study-title inner-container mt-nudge super"><a href="<?php echo get_permalink( $study ); ?>"><?php echo get_the_title($study) ?></a></h1>
                    <h3 class="case-study-subtitle inner-container"><?php echo get_the_excerpt( $study ); ?></h3>
                    <p class="inner-container mt-nudge"><a href="<?php echo get_permalink( $study ); ?>" title="View case study"><em>View case study &rarr;</em></a></p>
                </div>
            </div>
        </div>
    </section>

<?php endforeach; ?>
