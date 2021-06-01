<?php
/*
Template Name: oppetoo-page
*/
get_header(); ?>
    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    
    <div id="oppetoo-content" class="container-fluid page-content common-page">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'oppetoo-category' ) );?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-6 col-xl-5">
                                    <div id ="post-<?php the_ID(); ?>" class="table">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                        <?php 
                        endwhile; 
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>