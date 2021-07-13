<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skynet
 */

?>
    <footer class="text-center text-lg-start" style="background-color: #222222;">
        <div class="container d-flex justify-content-center py-5">
            <button type="button" class="btn mx-2">
                <img src="images/facebook.png" alt="">
            </button>
            <button type="button" class="btn mx-2">
                <img src="images/youtube.png" alt="">
            </button>
            <button type="button" class="btn mx-2">
                <img src="images/instagram.png" alt="">
            </button>
            <button type="button" class="btn mx-2">
                <img src="images/twitter.png" alt="">
            </button>
        </div>
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://artmotion.net/">https://artmotion.net/</a>
        </div>
    </footer>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'skynet' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'skynet' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'skynet' ), 'skynet', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
