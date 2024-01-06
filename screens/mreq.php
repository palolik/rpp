<?php
    require_once("../config/database.php");
    if(isset($_POST['submit'])){
        
        $request = mysqli_real_escape_string($mysqli, $_POST['request']);
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $date = mysqli_real_escape_string($mysqli, $_POST['date']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $status = "pending";
        $result = mysqli_query($mysqli, "INSERT INTO mreq (`request`, `employeeid`,`email`, `date`, `status`) VALUES ('$request', '$employeeid','$email', '$date', '$status') ");

        header("location:ehome.php");

    }
   
?>