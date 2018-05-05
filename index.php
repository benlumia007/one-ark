<?php
/*
===========================================================================================================
One Ark - index.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a 
theme (the other being style.css). The index.php template file is flexible. It can be used to include all 
references to the header, content, widget, footer and any other pages created in WordPress. Or it can be 
divided into modular template files, each taking on part of the workload. If you do not provide other 
template files, WordPress may have default files or functions to perform their jobs.

@package        One Ark WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.getbenonit.com/)
===========================================================================================================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="http://gmpg.org/xfn/11" rel="profile" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <header id="site-header" class="site-header">
        <div id="site-branding" class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <h4 class="site-description"><?php bloginfo('description'); ?></h4>
        </div>
        <section id="main-navigation" class="main-navigation">
            <?php if (has_nav_menu('primary-navigation')) { ?>
                <nav id="site-navigation" class="primary-navigation">
                    <button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'one-ark'); ?></button>
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'primary-navigation',
                        'menu_id'           => 'primary-menu',
                        'menu_class'        => 'nav-menu',
                    )); 
                    ?>
                </nav>            
            <?php } ?>
        </section>
    </header>
    <div id="site-header-image" class="site-header-image">
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">
    </div>
    <section id="site-content" class="site-content">
    
    </section>
    <?php if (has_nav_menu('social-navigation')) { ?>
        <div id="site-social" class="site-social">
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'social-navigation',
                    'container'         => 'nav',
                    'container_id'      => 'menu-social',
                    'container_class'   => 'menu-social',
                    'menu_id'           => 'menu-social-items',
                    'menu_class'        => 'menu-items',
                    'depth'             => 1,
                    'link_before'       => '<span class="screen-reader-text">',
                    'link_after'        => '</span>',
                    'fallback_cb'       => '',
                ));                                  
            ?>
        </div>
    <?php } ?>
    <footer id="site-footer" class="site-footer">
		<div id="site-info" class="site-info">
			<a class="power-by" href="<?php echo esc_url(__('https://wordpress.org/', 'one-ark')); ?>"><?php printf(esc_html__('Proudly Powered by %s', 'one-ark'), 'WordPress'); ?></a>
			<?php printf(esc_html__('Theme: %1$s by %2$s.', 'one-ark' ), 'One Ark', '<a href="https://www.getbenonit.com/">Benjamin Lu</a>');
			?>
		</div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>