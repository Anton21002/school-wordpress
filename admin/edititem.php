<?php
/*
Template Name: crud-edit
*/
get_header();
?>
<body>

<div class="topbar"></div>
    <table class="juhtkondtable"><tr>    
    <th>ID</th>
    <th>Имя, фамилия</th>
    <th>Должность</th>
    <th>Номер телефона</th>
    <th>Электронная почта</th>
    <th>image link</th>
</tr>
<?php 
$editByID=$_POST['editid'];
$result = $wpdb->get_results( "SELECT * FROM infohandler WHERE ID = $editByID ");
            foreach ( $result as $print ) { 
            $id=$print-> ID ;  
            $itemid=$print->PostID ;
            $datatype=$print->Datatype ;
            $desc=$print->ItemDescription;
            $relatr1=$print->RelAtr1;   
            $relatr2=$print->RelAtr2;
            $relatr3=$print->RelAtr3; 
            $relatr4=$print->RelAtr4;
            $relatr5=$print->RelAtr5;
             ?>
            <tr class="juhkkondrow">
                <td><?php  echo $id."</td><td>". $relatr1 ."</td><td>".
                  $relatr2 . "</td><td>".
                  $relatr3 . "</td><td>".
                  $relatr4 . "</td><td>".
                  $relatr5 . "</td>",
                  "</tr>";  }   ?>
                  </table></div>  
<div class="crudforms">                  
<form action="/edit-outcome" method="post">
<label for="ID">Currently selected id :</label><br>
<input type="text" name="ID" id="ID" value="<?php echo $id ?>" readonly="readonly">    <br>
<label for="postid">Item id:</label><br>
<input type="text" id="postid" name="postid" value="<?php echo $itemid ?>" required="required"><br>    
<label for="descrpt">Description:</label><br>
<input type="text" id="descript" name="descrpt" value="<?php echo $desc ?>" ><br>
<label for="datatype">Data type</label><br>
<input type="radio" name="vartype" id="vartype" value="TEXT" required="required" >Text
<input type="radio" name="vartype" id="vartype" value="IMAGE">Image
<input type="radio" name="vartype" id="vartype" value="LIST">List/Array<br>
<label for="atribute1">Atribute 1 :</label><br>
<input type="text" id="atribute1" name="atribute1" value="<?php echo $relatr1 ?>" required="required"><br>
<label for="atribute2">Atribute 2 :</label><br>
<input type="text" id="atribute2" name="atribute2" value="<?php echo $relatr2 ?>"><br>
<label for="atribute3">Atribute 3 :</label><br>
<input type="text" id="atribute3" name="atribute3" value="<?php echo $relatr3 ?>"><br>
<label for="atribute4">Atribute 4 :</label><br>
<input type="text" id="atribute4" name="atribute4" value="<?php echo $relatr4 ?>"><br>
<label for="atribute5">Atribute 5 :</label><br>
<input type="text" id="atribute5" name="atribute5" value="<?php echo $relatr5 ?>"><br>
<input type="submit" value="Apply changes">
</form>
<a href="/admin-panel">Back to Admin panel</a></div>
<?php get_footer(); ?>