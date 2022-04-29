<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();   }  ?>
<header>
 <div class="main_header_bg">
    <div class="container">
            <div class="logo">
                <?php if(has_custom_logo()){ the_custom_logo(); }                             
                if(display_header_text()){ ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="brand_text"><span class="site-title"><h4><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h4><small class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small></span></a><?php } ?>
            </div>
                <nav id='cssmenu'>
                    <div id="menu-button" class="menu-button"><span></span><span></span><span></span><span></span><span></span><span></span></div>
                    <?php 
                     wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'items_wrap' => '<ul class="first_menu">%3$s</ul>'));  ?>  
                </nav>
            </div>
        </div>
    </div>
</div>
</header>