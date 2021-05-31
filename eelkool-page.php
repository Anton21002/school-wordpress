<?php
/*
Template Name: eelkool-page
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
    
    <div id="eelkool-content" class="container-fluid page-content">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">                    
                    <?php $query2 = new WP_Query('p=1285');?>	
                            <?php 
                            while ($query2 -> have_posts()) : $query2 -> the_post(); ?>
                                <div class="col-lg-6 col-xl-5">
                                    <div class="table">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                        <?php 
                        endwhile; 
                        ?>
                    <?php $query = new WP_Query('p=1280');?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-6 col-xl-6">
                                    <h3><?php the_title();?></h3>
                                    <div class="day-list">
                                        <div class="day active">Вторник</div>
                                        <div class="day">Четверг</div>
                                    </div>
                                    <div class="table-list">
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
    tabContent = document.getElementsByClassName('wp-block-table');
    tab = document.querySelectorAll('.day');
    hideTabsContent(1);

    
    for (let button of tab) {
   button.addEventListener('click', function (event) {
     tab.forEach(i => i.classList.remove('active'));
     this.classList.toggle('active');
        let target = event.target;
        //console.log(event);
        if (target.classList.contains('day')) {
            for (let i=0; i<tab.length; i++) {
                if (target === tab[i]) {
                    showTabsContent(i);
                    break;
                }
            }
        }
   });
};
    

    function hideTabsContent(a) {
        for (let i=a; i<tabContent.length; i++) {
            tabContent[i].classList.remove('is-active');
            tabContent[i].classList.add("disable");
        }
    }

    function showTabsContent(b){
        if (tabContent[b].classList.contains('disable')) {
            hideTabsContent(0);
            tabContent[b].classList.remove('disable');
            tabContent[b].classList.add('is-active');
        }
    }
    
</script>