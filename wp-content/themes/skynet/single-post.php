<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Skynet
 */

get_header();
?>

    <main class="content_wrapper">
        <section class="single_post_wrapper">
            <div class="container">
                <img class="main_post_image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <h1><?php the_title()?></h1>
                <?php the_content();?>
            </div>
        </section>
    </main>
<?php

get_footer();


