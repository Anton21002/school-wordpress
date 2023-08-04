<?php
/*
Template Name: crud-admin
*/

?><?php 
 global $wpdb;
//function readEntry() {}
//function editEntry() {}
//function deleteEntry() {}

?>
<body>
<div>
    <table class="juhtkondtable"><tr>    
    <th>ID</th>
    <th>Имя, фамилия</th>
    <th>Должность</th>
    <th>Номер телефона</th>
    <th>Электронная почта</th>
    <th>image link</th>
</tr>
    <?php 
            global $wpdb;
            $result = $wpdb->get_results( "SELECT * FROM infohandler");
            foreach ( $result as $print ) { 
            $id=$print-> ID ;  
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
                  "</tr>";  } ?>
    </table></div>    
 
<form action="/add-item" method="post">
<label for="postid">Item id:</label><br>
<input type="text" id="postid" name="postid" required="required"><br>    
<label for="descrpt">Description:</label><br>
<input type="text" id="descript" name="descrpt"><br>
<label for="datatype">Data type</label><br>
<input type="radio" name="vartype" id="vartype" value="TEXT" required="required" >Text
<input type="radio" name="vartype" id="vartype" value="IMAGE">Image
<input type="radio" name="vartype" id="vartype" value="LIST">List/Array<br>
<label for="atribute1">Atribute 1 :</label><br>
<input type="text" id="atribute1" name="atribute1" required="required"><br>
<label for="atribute2">Atribute 2 :</label><br>
<input type="text" id="atribute2" name="atribute2"><br>
<label for="atribute3">Atribute 3 :</label><br>
<input type="text" id="atribute3" name="atribute3"><br>
<label for="atribute4">Atribute 4 :</label><br>
<input type="text" id="atribute4" name="atribute4"><br>
<label for="atribute5">Atribute 5 :</label><br>
<input type="text" id="atribute5" name="atribute5"><br>
<input type="submit" value="Add to database">
</form>

<form action="/delete-item" method="post">
<label for="itemid">Item id to delete</label>
<input type="text" id="itemid" name="itemid" required="required" >
<input type="submit" value="Remove from database"></form>

<form action="/edit-item" method="post">
<label for="editid">Item id to edit</label>
<input type="text" name="editid" id="editid" required="required"> 
<input type="submit" value="Edit entry">   
</form>

</body><?php ?>