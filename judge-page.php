<?php
/*
Template Name: judge-page
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
    
    <div id="kohtulahendid-content" class="container-fluid page-content common-page">
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'kohtulahendid-category' ) );?>	
                            <?php 
                            $idx = 1;
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                            <? if( $idx % 2 == 0) { ?>
                                <div class="col-lg-10">
                                    <div class="table">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php 
                        $idx++;
                        endwhile; 
                        ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <?php $query = new WP_Query( array( 'category_name' => 'kohtulahendid-category' ) );?>	
                            <?php 
                            $idx = 1;
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                            <? if( $idx % 2 == 1) { ?>
                                <div class="col-lg-10">
                                    <div class="table">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php 
                        $idx++;
                        endwhile; 
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>