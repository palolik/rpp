<?php
    require_once("../config/database.php");
    if(isset($_POST['submit'])){
        
        $notice = mysqli_real_escape_string($mysqli, $_POST['notice']);
        $getters = mysqli_real_escape_string($mysqli, $_POST['getters']);
        $date = mysqli_real_escape_string($mysqli, $_POST['date']);
        $result = mysqli_query($mysqli, "INSERT INTO notice (`getters`, `notice`, `date`) VALUES ('$getters', '$notice', '$date') ");

        header("location:home.php");

    }
   
?>