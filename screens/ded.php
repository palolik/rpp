<?php
    require_once("../config/database.php");
    $id = $_GET['id'];

    $sid = $_GET['sid'];
    $result = mysqli_query($mysqli, "DELETE FROM extradevices WHERE sid=$sid");

    header("location:emdetails.php?ds=$id");
?>