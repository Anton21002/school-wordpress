<?php get_header(); ?>

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <h1>История школы</h1>
            </div>
        </div>
    </div>
    <div id="page-content" class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="sidebar">
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
                </div>
            </div>
            <div class="col-lg-8">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>

                    <?php endwhile; ?>


                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>