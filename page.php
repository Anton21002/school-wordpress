<?php get_header(); ?>

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
    <div id="page-content" class="container-fluid">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                        <?php the_content(); ?>

                            <?php endwhile; ?>


            <?php endif; ?>
        </div>
    </div>
    <!--<div id="page-content" class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="row justify-content-center">
                    <!--<div id="sidebar" class="col-lg-6">
                        <?php wp_nav_menu([
                            'theme_location' => 'Left area',
                            'menu' => 'Left-menu',
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
            <div class="col-lg-7">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>

                    <?php endwhile; ?>


                <?php endif; ?>
            </div>
        </div>
    </div>-->

<?php get_footer(); ?>