<!doctype html>
<html style="height: -webkit-fill-available;">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styl52.css">
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

$si = $_GET['si'];
$sqlu = "SELECT * FROM alldevice WHERE si = $si";
$resulti = mysqli_query($conn, $sqlu);

if (mysqli_num_rows($resulti) > 0) {
    $row = mysqli_fetch_assoc($resulti);
    echo '


        <form action=controller.php?si='.$row['si'] . ' method="post">
        <div class="mb-3">
     
   
            <input style="display:none" class="form-control" type="text" name="si" value="' . $row['si'] . '">
            <label class="form-label" for="items">Device name:</label>
           
            <input class="form-control" type="text" name="devicen"  value="' . $row['devicen'] . '">
            </div> <div class="mb-3">
            <label class="form-label" for="items">Date:</label>
            <input class="form-control" type="date" name="adddate"  value="' . $row['adddate'] . '">
            </div> <div class="mb-3">
            <label class="form-label" for="items">Q:</label>
            <input  class="form-control" type="text" name="q"  value="' . $row['q'] . '">
            </div> <div class="mb-3">
            <input type="submit" name="update1" value="Update">
        </form>
    ';
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