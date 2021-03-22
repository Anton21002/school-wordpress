<?php
/*
Template Name: achievements-page
*/
get_header(); ?>
    <div id=page-banner class="container-fluid achivements-title">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
    <div id="achivements-content" class="container-fluid page-content table-list-page">
        <div class="row">
            <?php $query = new WP_Query( array( 'category_name' => 'saavutused-category' ) );?>	
            <?php 
                while ($query -> have_posts()) : $query -> the_post(); ?>
                    <div class="col-lg-12">
                        <div class="slider-achivements">
                            <div class="swiper-container-achivements">
                                <div class="swiper-wrapper">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>     
                    </div>
                <?php 
                endwhile; 
                ?>
        </div>
    </div>
<?php get_footer(); ?>
<script type="text/javascript">
    let imgSlider = document.getElementsByTagName("figure");
    for (let i=0; i<imgSlider.length; i++){
        imgSlider.item(i).classList.add("slide", "swiper-slide");
    }
    
    let aosRemove = document.getElementsByClassName("wp-block-image");
        for (let i=0; i<aosRemove.length; i++){
            aosRemove.item(i).removeAttribute("data-tilt");
        }
</script>

