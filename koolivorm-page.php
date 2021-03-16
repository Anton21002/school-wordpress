<?php
/*
Template Name: koolivorm-page
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
    
    <div id="koolivorm-content" class="container-fluid page-content common-page table-list-page">
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'koolivorm-category' ) );?>	
                            <?php 
                            $idx = 1;
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                            <? if( $idx % 2 == 0) { ?>
                                <div class="col-lg-10">
                                    <div id="flipp" class="table">
                                        <div class="flipper">
                                            <div class="flip-front">
                                                <h3><?php the_title();?></h3>
                                                <a class="flip-button">Наведи на меня</a>
                                            </div>
                                            <div class="flip-back">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
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
                    <?php $query = new WP_Query( array( 'category_name' => 'koolivorm-category' ) );?>	
                            <?php 
                            $idx = 1;
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                            <? if( $idx % 2 == 1) { ?>
                                <div class="col-lg-10">
                                    <div class="table">
                                        <?php the_content(); ?>
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
<script type="text/javascript">
    //flipp.onmouseover = flipp.onmouseout = handler;
    /*handler = document.getElementsByClassName("flipper");
    aHandler = document.getElementsByClassName("flip-button");
    
    function aHandler (event){
        if (event.type == 'mouseover') {
            handler.target.style.transform = 'rotateY(180deg)'
        }
        if (event.type == 'mouseout') {
            handler.target.style.transform = 'rotateY(0deg)'
        }
    }*/
    
    /*function handler(event) {
        if (event.type == 'mouseover') {
            event.target.style.transform = 'rotateY(180deg)'
        }
        if (event.type == 'mouseout') {
            event.target.style.transform = 'rotateY(0deg)'
        }
    }*/
    
    	$('#flipp a').hover(function(){
		$('#flipp .flipper').css('transform', 'rotateY(180deg)');
	})



	$('#flipp').mouseleave(function(){
		$('#flipp .flipper').css('transform', 'rotateY(0deg)');
	})
</script>