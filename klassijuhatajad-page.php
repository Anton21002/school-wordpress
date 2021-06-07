<?php
/*
Template Name: klassijuhatajad-page
*/
get_header(); ?>

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    
    <div id="klassijuhatajad-content" class="container-fluid page-content table-list-page">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'klassijuhatajad-category' ) );?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-12 col-xl-6" data-aos="flip-left" data-aos-easing="ease-out-cubic">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                        <?php 
                        endwhile; 
                        ?>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>