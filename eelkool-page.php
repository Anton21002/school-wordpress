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
    
    <div id="eelkool-content" class="container-fluid page-content common-page table-list-page">
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'eelkool-category' ) );?>	
                            <?php 
                            $idx = 1;
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                            <? if( $idx % 2 == 0) { ?>
                                <div class="col-lg-12">
                                    <h3><?php the_title();?></h3>
                                    <div class="day-list">
                                        <div class="day">Вторник</div>
                                        <div class="day">Четверг</div>
                                    </div>
                                    <?php the_content(); ?>
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
                    <?php $query = new WP_Query( array( 'category_name' => 'eelkool-category' ) );?>	
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
    tabContent = document.getElementsByClassName('wp-block-table');
    tab = document.querySelectorAll('.day');
    hideTabsContent(1);

    document.getElementById('eelkool-content').onclick= function (event) {
        let target = event.target;
        //console.log(event);
        if (target.className === 'day') {
            for (let i=0; i<tab.length; i++) {
                if (target === tab[i]) {
                    showTabsContent(i);
                    break;
                }
            }
        }
    }

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
    
    
    //let buttons = document.querySelectorAll(".day");

    /*for (let button of tab) {
    button.addEventListener('click', function () {
        tab.forEach(i => i.classList.remove('active'));

        this.classList.toggle('active');
    });
}*/
</script>