<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Skynet
 */

get_header();
?>

    <main class="content_wrapper">
        <div class="wrapper_404">
            <h1>404</h1>
            <h3><?php the_field('page_404_message','option');?></h3>
        </div>
    </main>

<?php
get_footer();
