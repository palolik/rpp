<?php
       include '../config/database.php';
    if(isset($_POST['update'])){

        $serialf = mysqli_real_escape_string($mysqli, $_POST['serial']);
        $itemsf = mysqli_real_escape_string($mysqli, $_POST['items']);

        // $result = mysqli_query($mysqli, "UPDATE itemlist SET `items`='$items' WHERE `serial`=$serial");
        
        $result = mysqli_query($mysqli, "UPDATE `itemlist` SET `items` = '$itemsf' WHERE `itemlist`.`serial` = $serialf");
    }

    header("location:itemlist.php");



?>