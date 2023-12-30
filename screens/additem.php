<?php
    require_once("../config/database.php");
    if(isset($_POST['subm'])){
        
        $items = mysqli_real_escape_string($mysqli, $_POST['items']);
    

        $result = mysqli_query($mysqli, "INSERT INTO itemlist (`items`)VALUES('$items')");

        header("location:itemlist.php");

    }
   
?>
<form action="additem.php" method="POST">
<input name="items" class="form-control" type="text" placeholder="Default input">
<input type="submit" class="buts" name="subm" value="add">
</form>




