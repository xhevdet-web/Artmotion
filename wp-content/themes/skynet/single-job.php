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
        <section class="single_job_wrapper">
            <div class="container">
                <h1><?php the_title()?></h1>
                <?php the_content();?>
            </div>
        </section>
    </main>
<?php

get_footer();


