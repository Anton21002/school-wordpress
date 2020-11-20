<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/fonts/fontawesome/css/all.css' ?>">
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/particles.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/app.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/swiper.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/main.js' ?>" defer=""></script>
    <title> <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?></title>
    <?php wp_head(); ?>
</head>

<body>
<div id="preloader">
    <div class="row-p">
        <div class="loader-1"></div>
    </div>
</div>
    <div id="navbar" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-4">
                        <a href="">
                            <span class="logo"></span>
                        </a>
                    </div>
                    <div class="col-8">
                        <?php wp_nav_menu([
						'theme_location' => 'header-menu',
						'menu' => 'main',
						'container' => 'nav',
						'container_id' => '',
						'container_class' => 'navbar-main',
						'menu_class' => 'navbar-list',
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
						]);
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fader"></div>

