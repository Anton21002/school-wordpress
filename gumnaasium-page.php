<?php
/*
Template Name: mass-media-page
*/
get_header(); ?>

    <!--<div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>-->

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    
    <div id="gumnaasium-content" class="container-fluid page-content">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'gumnaasium-category' ) );?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-6 col-xl-5" data-aos="flip-left" data-aos-easing="ease-out-cubic">
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