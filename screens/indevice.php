<?php
    require_once("../config/database.php");
    if(isset($_POST['submitd'])){
        
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $pclaptop = mysqli_real_escape_string($mysqli, $_POST['pclap']);
        $pcname = mysqli_real_escape_string($mysqli, $_POST['pcname']);
        $pcip = mysqli_real_escape_string($mysqli, $_POST['pcip']);
        $os = mysqli_real_escape_string($mysqli, $_POST['os']);
        $motherboard = mysqli_real_escape_string($mysqli, $_POST['motherboard']);
        $processor = mysqli_real_escape_string($mysqli, $_POST['processor']);
        $ram = mysqli_real_escape_string($mysqli, $_POST['ram']);
        $hdd = mysqli_real_escape_string($mysqli, $_POST['hdd']);
        $ssd = mysqli_real_escape_string($mysqli, $_POST['ssd']);
        $cdrom = mysqli_real_escape_string($mysqli, $_POST['cdrom']);
        $pdate = mysqli_real_escape_string($mysqli, $_POST['pdate']);
        $warrenty = mysqli_real_escape_string($mysqli, $_POST['warrenty']);


        $result = mysqli_query($mysqli, "INSERT INTO devices (`employeeid`, `pclap`, `pcname`, `pcip`, `os`, `motherboard`, `processor`, `ram`, `hdd`, `ssd`, `cdrom`, `pdate`, `warrenty`)VALUES('$employeeid', '$pclaptop', '$pcname', '$pcip', '$os', '$motherboard', '$processor', '$ram', '$hdd', '$ssd', '$cdrom', '$pdate', '$warrenty')");

        header("Location:query.php?ds=$employeeid"); 
        exit;

    }

?>

