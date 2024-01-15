<!doctype html>
<html style="height: -webkit-fill-available;">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styl54.css">
    <title>PC distributions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="livesearch/js1/jquery-2.1.3.min.js"></script>
    <script src="livesearch/js1/ls3.js"></script>
    <link href="livesearch/css/ls2.css" rel="stylesheet" />
</head>
<body>
<div class="brk">
        <?php include("sidebar.php") ?>
        <div>
            <?php include("header.php") ?>
           
            <div class="contain">
                
                
                
                
                <?php

include '../config/database.php';
$id = $_GET['id'];
$si = $_GET['si'];
$sqlu = "SELECT * FROM devices WHERE si = $si";
$resulti = mysqli_query($conn, $sqlu);

if (mysqli_num_rows($resulti) > 0) {
    $row = mysqli_fetch_assoc($resulti);
    echo "
 <form action='controller.php?si= ".$si."& id=".$id."' method='POST'>
        <div style='width: 100%;grid-template-columns: 50% 50%;display: grid;margin:10px;width: -webkit-fill-available;'>
            
                <div style='margin:10px'>
                    <div class='mb-3'>
                        <label class='form-label'>PC/LAPTOP:</label>
                        <select name='pclap' class='form-control' type='text'   value='" . $row['pclap'] . " '>
                            <option value='PC'>PC</option>
                            <option value='LAPTOP'>LAPTOP</option>
                        </select>
                    </div>    
                    <div class='mb-3'>
                        <label class='form-label'>Device Name:</label>
                        <input name='pcname' class='form-control' type='text'   value='" . $row['pcname'] . "'>
                        <input name='employeeid' style='display:none;' value='<?php echo $id; ?>' type='text'>
                    </div>    
                    <div class='mb-3'>
                        <label class='form-label'>IP:</label>
                        <input name='pcip' class='form-control' type='text'   value='" . $row['pcip'] . "'>
                    </div> 
                    <div class='mb-3'>
                        <label class='form-label'>OS:</label>
                        <input name='os' class='form-control' type='text'  value='" . $row['os'] . "'> 
                    </div>    
                    <div class='mb-3'>
                        <label class='form-label'>Motherboard:</label>
                        <input name='motherboard' class='form-control' type='text'  value='" . $row['motherboard'] . "'>
                    </div>    
                    <div class='mb-3'>
                        <label class='form-label'>processor:</label>
                        <input name='processor' class='form-control' type='text'  value='" . $row['processor'] . "'>
                    </div> 
                </div><div style='margin:10px'>
                    <div class='mb-3'>
                <label class='form-label'>RAM:</label>
                <input name='ram' class='form-control' type='text'  value='" . $row['ram'] . "'>
                </div> 
                <div class='mb-3'>
                <label class='form-label'>Hard disk:</label>
                <input name='hdd' class='form-control' type='text'  value='" . $row['hdd'] . "'>
                </div> 
                <div class='mb-3'>
                <label class='form-label'>SSD:</label>
                <input name='ssd' class='form-control' type='text'  value='" . $row['ssd'] . "'>
                </div> 
                <div class='mb-3'>
                <label class='form-label'>CCD ROM:</label>
                <input name='cdrom' class='form-control' type='text'  value='" . $row['cdrom'] . "'>
                </div> 
                <div class='mb-3'>
                <label class='form-label'>purchase date:</label>
                <input name='pdate' class='form-control' type='date'  value='" . $row['pdate'] . "'>
                </div> 
                <div class='mb-3'>
                <label class='form-label'>warranty date:</label>
                <input name='warrenty' class='form-control' type='date'  value='" . $row['warrenty'] . "'>
                </div> 
    </div>
        </div>
                <div style='display:flex;justify-content:center'><button type='submit' name='updatepc' class='nm2' >Update PC</button></div>
            </form>
    </div>

</div>

    ";
} else {
    echo 'Record not found.';
}


?>
</div>
           
    </div>
</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
</html>