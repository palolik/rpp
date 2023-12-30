<?php
    require_once("../config/database.php");
    if(isset($_POST['submit'])){
        
        $request = mysqli_real_escape_string($mysqli, $_POST['request']);
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $date = mysqli_real_escape_string($mysqli, $_POST['date']);
        $result = mysqli_query($mysqli, "INSERT INTO mreq (`request`, `employeeid`, `date`) VALUES ('$request', '$employeeid', '$date') ");

        header("location:ehome.php");

    }
   
?>