<?php
/*
Template Name: crud-delete
*/

?>
<?php get_header(); ?>
<div class="topbar"></div>
<a href="/admin-panel">Back to Admin panel</a>

<?php 
$deleteByID=$_POST['itemid'] ;
echo $deleteByID ;
$wpdb->delete('infohandler',array(
'ID'=> $deleteByID    
),
array('%d')
);
echo $wpdb->last_query() ;
if ($deleteres==false) {
echo "No item with provided id". $deleteByID ." was found";
}else {
echo "Sucessfully deleted entry with ID ". $deleteByID ." ! <br>".$deleteres ;
}
;
get_footer();
?>
