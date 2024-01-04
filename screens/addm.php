<?php
    require_once("../config/database.php");
    if(isset($_POST['meq'])){
        
        $did = mysqli_real_escape_string($mysqli, $_POST['did']);
        $mainteinence = mysqli_real_escape_string($mysqli, $_POST['mainteinence']);
        $date = mysqli_real_escape_string($mysqli, $_POST['date']);
        $cost = mysqli_real_escape_string($mysqli, $_POST['cost']);
        $feedback = mysqli_real_escape_string($mysqli, $_POST['feedback']);
        $result = mysqli_query($mysqli, "INSERT INTO log (`did`, `mainteinence`, `date`, `cost`, `feedback`) VALUES ('$did', '$mainteinence', '$date', '$cost', '$feedback') ");

        header("location:log2.php?sid=$did");

    }
   
?>