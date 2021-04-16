<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style-index.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/fonts/fontawesome/css/all.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/aos.css' ?>">
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/swiper.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/main.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/aos.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/vanilla-tilt.js' ?>" defer=""></script>
    
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/particles/particles.js' ?>" defer=""></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/particles/app.js' ?>" defer=""></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
    
    <title> <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?></title>
    <?php wp_head(); ?>
    <base target="_blank">
</head>

<body id="tpg">
<!--<div id="preloader">
    <h1 class="flip">
        <span class="text-wrapper">
            <span class="letters">Tallinna&nbsp;Pae&nbsp;Gümnaasium</span>
        </span>
    </h1>
    <div class="row-p">
        <div class="loader-1"></div>
    </div>
</div>-->
    <div id="navbar" class="container-fluid scrollby">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-2">
                <a href="">
                    <span class="logo"></span>
                </a>
                <div id="hamburger">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <div class="col-xl-8">
                        <?php wp_nav_menu([
						'theme_location' => 'Top area',
						'menu' => 'Main menu',
						'container' => 'nav',
						'container_id' => '',
						'container_class' => 'navbar-main',
						'menu_class' => 'navbar-list',
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
						]);
						?>
            </div>
        </div>
        <div class="row">
            <div id="mnav">
                <!--<button id="back-button">Назад</button>-->
                <i id="back-button" class="fas fa-arrow-left disable"></i>
            <?php wp_nav_menu([
				'theme_location' => 'header-menu',
				'menu' => 'Main menu',
				'container' => 'nav',
				'container_id' => '',
				'container_class' => 'navbar-main',
				'menu_class' => 'navbar-list',
				'items_wrap' => '<ul class="%2$s">%3$s</ul>',
				]);
            ?>
                <!--<button id="btn-ru">Рус</button>-->
                <!--<button id="btn-est">Est</button>-->
            </div>
        </div>
    </div>
    <div id="fader"></div>
