<?php
include '../config/database.php';


    if(isset($_POST['update1'])){
        $si = $_GET['si'];

        $devicen = mysqli_real_escape_string($mysqli, $_POST['devicen']);
        $q = mysqli_real_escape_string($mysqli, $_POST['q']);
        $adddate = mysqli_real_escape_string($mysqli, $_POST['adddate']);
        $result = mysqli_query($mysqli, "UPDATE `alldevice` SET `devicen`='$devicen',`q`='$q',`adddate`='$adddate' where `alldevice`.`si` = $si");
        header("location:itemlist.php");

    }

    if(isset($_POST['pass'])){
        $id = $_GET['id'];

        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $employeecode = mysqli_real_escape_string($mysqli, $_POST['employeecode']);
        $employeename = mysqli_real_escape_string($mysqli, $_POST['employeename']);
        $officename = mysqli_real_escape_string($mysqli, $_POST['officename']);
        $designation = mysqli_real_escape_string($mysqli, $_POST['designation']);
        $contactno = mysqli_real_escape_string($mysqli, $_POST['contactno']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);  
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);  

        $result = mysqli_query($mysqli, "UPDATE `employees` SET `employeeid`='$employeeid',`employeecode`='$employeecode',`employeename`='$employeename',`officename`='$officename',`designation`='$designation',`contactno`='$contactno',`email`='$email',`status`='$status',`password`='$password' WHERE `employees`.`id` = $id");
        header("location:employeelist.php");
    }












?>