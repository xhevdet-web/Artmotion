<section class="jobs_list_section">
    <div class="container">
        <div class="jobs_list_section_title_wrapper">
            <h2><?php the_sub_field('title');?></h2>
            <?php the_sub_field('content');?>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'job',
                'post_status' => 'publish',
                'posts_per_page' => 3,
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