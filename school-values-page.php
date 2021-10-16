<?php
/*
Template Name: school-values
*/
get_header(); ?>
    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    
    <div id="school-values-content" class="container-fluid page-content common-page">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6" data-aos="flip-left" data-aos-easing="ease-out-cubic">

                        <input type="checkbox" id="click">
                        <label for="click" class="share-btn">
                            <span class="fas fa-share-alt"></span>
                            <a href="#">Armastus</a>
                            <a href="#">Silmaring</a>
                            <a href="#">Koostöövõime</a>
                            <a href="#">Armastus</a>
                            <a href="#">Ausus</a>
                            <a href="#">Avastus</a>
                        </label>
                    </div>
                    <div class="col-lg-6" data-aos="flip-left" data-aos-easing="ease-out-cubic">
                        <div class="table">
                        </div> 
                    </div>
                    <div class="col-lg-6" data-aos="flip-left" data-aos-easing="ease-out-cubic">
                        <div class="table">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>