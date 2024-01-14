<?php
    require_once("../config/database.php");

    $si = $_GET['si'];
    $result = mysqli_query($mysqli, "DELETE FROM alldevice WHERE si = $si");

    header("location:itemlist.php");
?>