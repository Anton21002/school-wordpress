<?php get_header(); ?>

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h1>История школы</h1>
            </div>
        </div>
    </div>
    <div id="page-content" class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>

                    <?php endwhile; ?>


                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>