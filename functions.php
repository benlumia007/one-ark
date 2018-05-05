<?php
/*
===========================================================================================================
One Ark - functions.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a 
theme (the other being template-tags.php). This functions.php template file allows you to add features and 
functionality to a WordPress theme which is stored in the theme's sub-directory in the theme folder. The 
second template file template-tags.php allows you to add additional features and functionality to the 
WordPress theme which is stored in the includes folder and it's called in the functions.php.

@package        One Ark WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.getbenonit.com/)
===========================================================================================================
*/

/*
===========================================================================================================
Table of Content
===========================================================================================================
 1.0 - Theme Setup
 2.0 - Enqueue Scripts and Styles
 3.0 - Content Width
 4.0 - Register Sidebars
 5.0 - Required Files
===========================================================================================================
*/

/*
===========================================================================================================
Table of Content
===========================================================================================================
 1.0 - Theme Setup
===========================================================================================================
*/
function one_ark_theme_setup() {
    /*
    =======================================================================================================
    Enable and activate register_nav_menus(); for Nu Snowflakes WordPress Theme. This feature when enabled, 
    allows you to create a Primary Navigation and Social Navigation menus in the dashboard under Menus.
    =======================================================================================================
    */
    register_nav_menus(array(
        'primary-navigation'    => esc_html__('Primary Navigation', 'perfect-choice'),
        'secondary-navigation'  => esc_html__('Secondary Navigation', 'perfect-choice'),
        'social-navigation'     => esc_html__('Social Navigation', 'perfect-choice')
    ));
}
add_action('after_setup_theme', 'one_ark_theme_setup');

/*
===========================================================================================================
 2.0 - Enqueue Scripts and Styles
===========================================================================================================
*/
function one_ark_enqueue_scripts_and_styles_setup() {
    /*
    =======================================================================================================
    Enable and activate the main stylesheet and custom stylesheet if available for Perfect Choice WordPress 
    Theme. The main stylesheet should be enqueued rather than using @import.
    =======================================================================================================
    */
    wp_enqueue_style('one-ark-style', get_stylesheet_uri());
    wp_enqueue_style('one-ark-normalize', get_template_directory_uri() . '/css/normalize.css', '05012018', true);

    /*
    =======================================================================================================
    Enable and activate Google Fonts (Sanchez and Merriweather) locally for Perfect Choice WordPress Theme. 
    For more information regarding this feature, please go the following url to begin the awesomeness of 
    Google WebFonts Helper. 
    Reference: (https://google-webfonts-helper.herokuapp.com/fonts)
    =======================================================================================================
    */
    wp_enqueue_style('one-ark-custom-fonts', get_template_directory_uri() . '/extras/fonts/custom-fonts.css', '05012018', true);

    /*
    =======================================================================================================
    Enable and activate Font Awesome 4.7 locally for Perfect Choice WordPress Theme. For more information about 
    Font Awesome, please navigate to the URL for more information. 
    Reference: (http://fontawesome.io/)
    =======================================================================================================
    */
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/extras/font-awesome/css/font-awesome.css', '05012018', true);

    /*
    ===========================================================================================================
    Enable and activate (JavaScript/JQuery) to support Navigation Menu for Primary Navigation for Perfect Choice 
    WordPress Theme. This allows you to use click feature for dropdowns and multiple depths, When using this new 
    feature of the navigation. The Menu for mobile side is now at the 
    bottom of the page.
    ===========================================================================================================
    */
    wp_enqueue_script('perfect-choice-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '05012018', true);
    wp_localize_script('perfect-choice-navigation', 'perfectchoiceScreenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . esc_html__('expand child menu', 'perfect-choice') . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__('collapse child menu', 'perfect-choice') . '</span>',
	));
}
add_action('wp_enqueue_scripts', 'one_ark_enqueue_scripts_and_styles_setup');

/*
===========================================================================================================
 3.0 - Content Width
===========================================================================================================
*/

/*
===========================================================================================================
 4.0 - Register Sidebars
===========================================================================================================
*/

/*
===========================================================================================================
 5.0 - Required Files
===========================================================================================================
*/
require_once(get_template_directory() . '/includes/custom-header.php');