<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skynet
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <nav class="header">
        <div class="artmotion_header">
            <div class="container">
                <div class="artmotion_header_content">
                    <div class="artmotion_icon">
                        <img src="https://artmotion.net/wp-content/uploadimet/2018/11/ext.jpg" alt="artmotion_icon">
                    </div>
                    <div class="artmotion_header_menu_list" id="">
                        <ul>
                            <li><a class="toscroll" href="#"> Ballina </a></li>
                            <li><a class="toscroll" href="#">Rreth Nesh </a></li>
                            <li><a class="toscroll" href="#">Tv</a></li>
                            <li><a class="toscroll" href="testbackround.html">Privat</a></li>
                            <li><a class="toscroll" href="#">Biznes</a></li>
                            <li><a class="toscroll" href="#">Lidhu</a></li>
                            <li><a class="toscroll" href="#">Kontakt</a></li>
                            <li><a class="toscroll" href="#">Media</a></li>
                            <li><a class="toscroll" href="#">Testo Shpejtsin</a></li>
                            <li><a class="toscroll" href="#">My Artmotion</a></li>


                        </ul>
                    </div>
                    <div class="artmotion_hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
