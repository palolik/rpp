<!doctype html>
<html style="
    height: -webkit-fill-available;">
<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="stylesheet" type="text/css" href="../styl34.css">

    <title>Device List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>

<?php
    require_once("../config/database.php");
    if(isset($_POST['submit'])){
        
        $employeeid = mysqli_real_escape_string($mysqli, $_POST['employeeid']);
        $employeecode = mysqli_real_escape_string($mysqli, $_POST['employeecode']);
        $employeename = mysqli_real_escape_string($mysqli, $_POST['employeename']);
        $officename = mysqli_real_escape_string($mysqli, $_POST['officename']);
        $designation = mysqli_real_escape_string($mysqli, $_POST['designation']);
        $contactno = mysqli_real_escape_string($mysqli, $_POST['contactno']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);

        $result = mysqli_query($mysqli, "INSERT INTO employees (`employeeid`, `employeecode`, `employeename`, `officename`, `designation`, `contactno`, `email`, `status`)VALUES('$employeeid', '$employeecode', '$employeename', '$officename', '$designation', '$contactno', '$email', '$status')");

        header("Location: employeelist"); exit;

    }

?>

    <div class="brk">

    <?php include("sidebar.php") ?>
        <div>

            <?php include("header.php") ?>
            <div style="
    height: auto;
    align-items: center;
    flex-direction: column;
    justify-content: flex-start;
">
              
     

            </div>
        </div>
    </div>


</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>

</html>