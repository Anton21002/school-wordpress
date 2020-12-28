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
<?php get_footer(); ?>