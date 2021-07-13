<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Skynet
 */

get_header();
?>

    <main class="content_wrapper">
        <?php
        while ( have_posts() ) :
            the_post(); ?>
            <?php require 'custom-fields/groups/main-template.php'; ?>
        <?php endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
