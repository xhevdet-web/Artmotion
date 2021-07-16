<section class="news_page_section">
    <div class="container">
        <h1><?php the_sub_field('title');?></h1>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-md-4">
                    <a class="news_box" href="<?php echo get_the_permalink();?>">
                        <div class="news_box_image" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
                            <img src="" alt="">
                        </div>
                        <div class="news_box_content">
                            <h4><?php the_title() ?></h4>
                            <?php the_excerpt();?>
                        </div>
                    </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
