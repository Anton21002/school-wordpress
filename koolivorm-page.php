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
            <div class="col-lg-10">
                <div class="row">  
                        <?php $query = new WP_Query('p=1385');?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-3">
                                    <div id=flip-1>
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
                        <?php 
                        endwhile; 
                        ?>
                        <?php $query1 = new WP_Query('p=1367');?>	
                            <?php 
                            while ($query1 -> have_posts()) : $query1 -> the_post(); ?>
                                <div class="col-lg-3">
                                    <div id=flip-2>
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
                        <?php 
                        endwhile; 
                        ?>
                        <?php $query2 = new WP_Query('p=1375');?>	
                            <?php 
                            while ($query2 -> have_posts()) : $query2 -> the_post(); ?>
                                <div class="col-lg-5">
                                    <div class="table">
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
<script type="text/javascript">
    //flipp.onmouseover = flipp.onmouseout = handler;
    //handler = document.getElementsByClassName("flipper");
    /*handler = document.getElementsByClassName("flip-button");
    flipp = document.getElementById("flipp");
    
    function handler(event) {
        if (event.type === 'mouseenter') {
            flipp.style.transform = 'rotateY(180deg)'
        }
        if (event.type === 'mouseleave') {
            flipp.style.transform = 'rotateY(0deg)'
        }
    }*/
    
    /*$('.flip-front a').hover(function(){
		$('.flipper').css('transform', 'rotateY(180deg)');
	})

	$('.table').mouseleave(function(){
		$('.flipper').css('transform', 'rotateY(0deg)');
	})*/
    
    $('#flip-1 a').hover(function(){
		$('#flip-1 .flipper').css('transform', 'rotateY(180deg)');
	})

	$('#flip-1').mouseleave(function(){
		$('#flip-1 .flipper').css('transform', 'rotateY(0deg)');
	})
    
    
    
    $('#flip-2 a').hover(function(){
		$('#flip-2 .flipper').css('transform', 'rotateY(180deg)');
	})

	$('#flip-2').mouseleave(function(){
		$('#flip-2 .flipper').css('transform', 'rotateY(0deg)');
	})
    
</script>