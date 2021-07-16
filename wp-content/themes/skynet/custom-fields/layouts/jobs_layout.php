<section class="jobs_section">
    <div class="container">
        <h1>Pozitat e hapura</h1>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'job',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-md-12">
                    <div class="box">
                        <h4><?php the_title() ?></h4>
                        <?php the_field('short_description');?>
                        <a class="box_btn" href="<?php echo get_the_permalink();?>">me shume</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>