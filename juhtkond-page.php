<?php
/*
Template Name: juhtkond-page
*/
get_header(); ?>

    <div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    
    <div id="juhtkond-content" class="container-fluid page-content table-list-page">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                        <?php $query = new WP_Query( array( 'category_name' => 'juhtkond-category' ) );?>	
                            <?php 
                            while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="col-lg-12 col-xl-6 juhtkondtables" data-aos="flip-left" data-aos-easing="ease-out-cubic">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                        <?php 
                        endwhile; ?>
                        
                        
                        
                </div>
            </div>
        </div> <!-- <figure> -> (<img> <figcaption>-> 4<p> )--> 
         <div class="juhtkondcards">   
        <?php 
            global $wpdb;
            $result = $wpdb->get_results( "SELECT * FROM infohandler");
            foreach ( $result as $print ) { 
            $itemdesc=$print->ItemDescription ;
            $itemid=$print->PostID ;
            $relatr1=$print->RelAtr1;   
            $relatr2=$print->RelAtr2;
            $relatr3=$print->RelAtr3; 
            $relatr4=$print->RelAtr4;
            $relatr5=$print->RelAtr5;
            if($itemid == 5 ) { ?>
            <figure class="juhtcard"><img src="<?php echo $relatr5 ?>" alt="<?php echo $itemdesc  ?>" class="juhtimg"> 
                <figcaption class="juhtdesc">
                    <p><?php  echo $relatr1 ."</p>
                    <p>". $relatr2 . "</p>
                    <p> tel : ". $relatr3 . "</p>
                    <p> email : ". $relatr4 . "</p>
                </figcaption>
            </figure>";  
                  }  } ?>
    </div></div>
    <div>
    
    
<?php get_footer(); ?>

<?php /* table example
    <table class="juhtkondtable"><tr>    
    <th>Имя, фамилия</th>
    <th>Должность</th>
    <th>Номер телефона</th>
    <th>Электронная почта</th></tr>
    <?php 
            global $wpdb;
            $result = $wpdb->get_results( "SELECT * FROM infohandler");
            foreach ( $result as $print ) { 
            $relatr1=$print->RelAtr1;   
            $relatr2=$print->RelAtr2;
            $relatr3=$print->RelAtr3; 
            $relatr4=$print->RelAtr4; ?>
            <tr class="juhkkondrow">
                <td><?php  echo $relatr1 ."</td><td>".
                  $relatr2 . "</td><td>".
                  $relatr3 . "</td><td>".
                  $relatr4 . "</td>
            </tr>";  } ?>
    </table>    
*/?>