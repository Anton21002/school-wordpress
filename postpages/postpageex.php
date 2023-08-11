<?php
/*
Template Name: postpage-example
*/
get_header();
?>
<?php
//http://localhost/postpage?post=1064&img=1060
global $wp;
$postid=$_GET['post'];
$imgid=$_GET['img'];
$post=get_post( $postid );
$img=get_post($imgid);
$content=$post->post_content;
$title=$post->post_title;
$imgcont=$img->post_content;
?>
<div id=page-banner class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h2><?php echo $title ?></h2>
            </div>
        </div>
    </div>
    <div id="koosolekud-content" class="post">
        <div class="post_content post_elem">
        <p ><?php echo $content ?></p></div>
        <div class="post_img post_elem"><img  src=" <?php echo $imgcont ?> " alt=" <?php $title ?> " >
        </div>
    </div>
<?php
get_footer();
?>
