<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="nav">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <ul>
            
                <li class="logoBurger"><img id="add" class="littleLogo" src="<?php echo get_theme_file_uri('assets/image/Image logo en paralax.png'); ?>" alt="petit logo"> </li>
                <li class="storyBurger"><a id="add1" href="#story">Histoire</a></li>
                <li class="charactersBurger"><a id="add2" href="#characters">Personnages</a></li>
                <li class="placeBurger"> <a id="add3" href="#place">Lieu</a></li>
                <li class="studioBurger"><a id="add4" href="#studio">Studio Koukaki</a></li>
                <img class="marque" src="<?php echo get_theme_file_uri('assets/image/Studio Koukaki.png'); ?>" alt="studio koukaki"> 
                
            </ul>
            
            <div id="icons"></div>
            
        </nav><!-- #site-navigation -->
        
           
        
	</header><!-- #masthead -->
