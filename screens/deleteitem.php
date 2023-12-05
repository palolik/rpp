<?php
    require_once("../config/database.php");

    $serial = $_GET['serial'];
    $result = mysqli_query($mysqli, "DELETE FROM itemlist WHERE serial=$serial");

    header("location:itemlist.php");
?>