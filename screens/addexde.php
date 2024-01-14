<?php
    require_once("../config/database.php");
    if(isset($_POST['submission'])){
        
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $device = mysqli_real_escape_string($mysqli, $_POST['device']);
        $itemcode = mysqli_real_escape_string($mysqli, $_POST['itemcode']);
        $q = mysqli_real_escape_string($mysqli, $_POST['q']);
        $price = mysqli_real_escape_string($mysqli, $_POST['price']);
        $modspec = mysqli_real_escape_string($mysqli, $_POST['modspec']);   
        $pdate = mysqli_real_escape_string($mysqli, $_POST['pdate']);
        $warranty = mysqli_real_escape_string($mysqli, $_POST['warranty']);
        $comments = mysqli_real_escape_string($mysqli, $_POST['comments']);


        $result = mysqli_query($mysqli, "INSERT INTO extradevices (`employeeid`, `device`, `itemcode`, `q`, `price`, `modspec`, `pdate`, `warranty`, `comments`)VALUES('$employeeid', '$device', '$itemcode', '$q', '$price', '$modspec', '$pdate', '$warranty', '$comments')");

        header("Location:emdetails.php?ds=$employeeid"); 
        exit;
    }

?>

