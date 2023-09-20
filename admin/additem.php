<?php
/*
Template Name: crud-add
*/

?><?php get_header(); ?>
<div class="topbar"></div>
<h1>Sucessfully added a new item</h1>

<?php
$addpostid=$_POST['postid'] ;
$additemdesc=$_POST['descrpt'] ;
$datatype=$_POST['vartype'];
$addatr1=$_POST['atribute1'];
$addatr2=$_POST['atribute2'];
$addatr3=$_POST['atribute3'];
$addatr4=$_POST['atribute4'];
$addatr5=$_POST['atribute5'];
echo $addpostid;
$wpdb->insert('infohandler',array(
'PostID'=>$addpostid  ,
'ItemDescription'=> $additemdesc ,
'Datatype'=>$datatype,
'RelAtr1'=>$addatr1 ,
'RelAtr2'=>$addatr2 ,
'RelAtr3'=>$addatr3 ,
'RelAtr4'=>$addatr4 ,
'RelAtr5'=>$addatr5 
),
array('%d','%s','%s','%s','%s','%s','%s','%s')
); 
?><tr class="juhkkondrow">
<td> ID : <?php  echo $addpostid ."</td>
<td> Description : ".$additemdesc . "</td>
<td> Data type : ".$datatype . "</td>
<td> Variable 1 : ".$addatr1 . "</td>
<td> Variable 2 : ".$addatr2 . "</td>
<td> Variable 3 : ".$addatr3 . "</td>
<td> Variable 4 : ".$addatr4 . "</td>
<td> Variable 5 : ".$addatr5 . "</td>",
  "</tr>"; 
?>
<a href="/admin-panel">Back to Admin panel</a>
<?php  get_footer(); ?>