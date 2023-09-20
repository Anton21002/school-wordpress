<?php
/*
Template Name: crud-admin
*/

?><?php 
 global $wpdb;
//function readEntry() {}
//function editEntry() {}
//function deleteEntry() {}
get_header();
?>
<title>Admin Panel</title>
 
<div class="crudforms">        
<div class="addform">
<form action="/add-item" method="post">
<label for="postid">Item id:</label><br>
<input type="text" id="postid" name="postid" required="required" class="inputfield"><br>    
<label for="descrpt">Description:</label><br>
<input type="text" id="descript" name="descrpt" class="inputfield"><br>
<label for="datatype">Data type</label><br>
<input type="radio" name="vartype" id="vartype" value="TEXT" required="required" >Text
<input type="radio" name="vartype" id="vartype" value="IMAGE">Image
<input type="radio" name="vartype" id="vartype" value="LIST">List/Array<br>
<label for="atribute1">Atribute 1 :</label><br>
<input type="text" id="atribute1" name="atribute1" required="required" class="inputfield"><br>
<label for="atribute2">Atribute 2 :</label><br>
<input type="text" id="atribute2" name="atribute2" class="inputfield"><br>
<label for="atribute3">Atribute 3 :</label><br>
<input type="text" id="atribute3" name="atribute3" class="inputfield"><br>
<label for="atribute4">Atribute 4 :</label><br>
<input type="text" id="atribute4" name="atribute4" class="inputfield"><br>
<label for="atribute5">Atribute 5 :</label><br>
<input type="text" id="atribute5" name="atribute5" class="inputfield"><br>
<input type="submit" value="Add to database" class="submitbutton">
</form></div> 
<div class="deleteform">
<form action="/delete-item" method="post">
<label for="itemid">Item id to delete : </label><br>
<input type="text" id="itemid" name="itemid" required="required" class="inputfield" ><br>
<input type="submit" value="Remove from database" class="submitbutton"></form></div>
<div class="editform">
<form action="/edit-item" method="post">
<label for="editid">Item id to edit : </label><br>
<input type="text" name="editid" id="editid" required="required" class="inputfield"> <br>
<input type="submit" value="Edit entry" class="submitbutton" >   
</form></div>
</div>

<div class="crudtable">
    <table class="juhtkondtable"><tr class="juhkrowtop">    
    <th>ID</th>
    <th>Table id</th>
    <th>Description</th>
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
            $itemid=$print->PostID ;
            $itemdesc=$print->ItemDescription ;
            $relatr1=$print->RelAtr1;   
            $relatr2=$print->RelAtr2;
            $relatr3=$print->RelAtr3; 
            $relatr4=$print->RelAtr4;
            $relatr5=$print->RelAtr5;
            ?>
            <tr class="juhkkondrow">
                <td class="juhtkonditem"><?php  echo $id.'</td><td class="juhtkonditem">'. 
                $itemid .'</td><td class="juhtkonditem">'.
                $itemdesc .'</td><td class="juhtkonditem">'.
                $relatr1 .'</td><td class="juhtkonditem">'.
                $relatr2 . '</td><td class="juhtkonditem">'.
                $relatr3 . '</td><td class="juhtkonditem">'.
                $relatr4 . '</td><td class="juhtkonditem">'.
                $relatr5 . "</td>",
            "</tr>";  } ?>
    </table></div>

</body><?php
 get_footer();  ?>