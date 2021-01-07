<?php
/*
Template Name: history-page
*/
get_header(); ?>

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
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-10">
                        <?php $query = new WP_Query( array( 'category_name' => 'ajalugu' ) );?>	
                            <?php 
                            $idx = 1;
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                            <? if( $idx % 2 == 1) { ?>
                        <h3><?php the_title();?></h3>
                        <p><?php the_content(); ?></p>
                            <?php }?>
                        <?php 
                        $idx++;
                        endwhile; 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-10">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>