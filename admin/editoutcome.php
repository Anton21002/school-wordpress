<?php
/*
Template Name: crud-editoutcome
*/

?><p>edit</p><?php
$ID=$_POST['ID'];
$newPostID=$_POST['postid'];
$newdesc=$_POST['descrpt'];
$newdatatype=$_POST['vartype'];
$newatr1=$_POST['atribute1'];
$newatr2=$_POST['atribute2'];
$newatr3=$_POST['atribute3'];
$newatr4=$_POST['atribute4'];
$newatr5=$_POST['atribute5'];
$wpdb->update('infohandler',array(
    'PostID'=>$newPostID  ,
    'ItemDescription'=> $newdesc ,
    'Datatype'=>$newdatatype,
    'RelAtr1'=>$newatr1 ,
    'RelAtr2'=>$newatr2 ,
    'RelAtr3'=>$newatr3 ,
    'RelAtr4'=>$newatr4 ,
    'RelAtr5'=>$newatr5 
),array('ID'=>$ID),
array('%d','%s','%s','%s','%s','%s','%s','%s')

);
?>
<a href="/admin-panel">Back to Admin panel</a>