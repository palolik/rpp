<?php
    require_once("../config/database.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM employees WHERE id=$id");

    header("location:employeelist.php");
?>