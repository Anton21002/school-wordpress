<?php
/*
Template Name: crud-add
*/

?>
u good?


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
<td><?php  echo $addatr1 ."</td><td>".
  $addatr2 . "</td><td>".
  $addatr3 . "</td><td>".
  $addatr4 . "</td><td>".
  $addatr5 . "</td>",
  "</tr>"; 
?>
<a href="/admin-panel">Back to Admin panel</a>