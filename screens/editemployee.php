<?php
       include '../config/database.php';
    if(isset($_POST['pass'])){

        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $employeecode = mysqli_real_escape_string($mysqli, $_POST['employeecode']);
        $employeename = mysqli_real_escape_string($mysqli, $_POST['employeename']);
        $officename = mysqli_real_escape_string($mysqli, $_POST['officename']);
        $designation = mysqli_real_escape_string($mysqli, $_POST['designation']);
        $contactno = mysqli_real_escape_string($mysqli, $_POST['contactno']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);  
       
       
        $result = mysqli_query($mysqli, "UPDATE `employees` SET `employeeid`='$employeeid',`employeecode`='$employeecode',`employeename`='$employeename',`officename`='$officename',`designation`='$designation',`contactno`='$contactno',`email`='$email',`status`='$status' WHERE `employees`.`id` = $id");
    }

 header("location:employeelist.php");



?>
