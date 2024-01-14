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
    <link rel="stylesheet" type="text/css" href="../styl52.css">

    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>

<?php
    require_once("../config/database.php");
    if(isset($_POST['submo'])){
        
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
              
                <form  method="POST" name="add">
                    <div class="box1">
                     
                    <div >
                                            <div class="mb-3">
                                                <label class="form-label">Employee Id:</label>
                                                <input  name="employeeid" class="form-control " type="text">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Employee Code:</label>
                                                <input name="employeecode" class="form-control" type="text">
                                            </div>    
                                            <div class="mb-3">
                                                <label class="form-label">Employee Name:</label>
                                                <input name="employeename" class="form-control" type="text" >
                                            </div>     
                                            <div class="mb-3">
                                                <label class="form-label">Office :</label>
                                                <select name="officename"class="form-select form-select mb-3" aria-label="Large select example">
                                                <?php 
                                             $sql = "SELECT * FROM offices";
                                             $result = $conn->query($sql);
                                             if ($result->num_rows > 0) {
                                                 while ($row = $result->fetch_assoc()) {
                                                     echo  "<option value=" .$row['office']. ">" .$row['office']. "</option>";
                                                 }
                                                }
                                            ?>  
                                                </select>
                                            </div>  
                                            <div class="mb-3">
                                                <label class="form-label">Designation:</label>
                                                <select name="designation" class="form-select form-select mb-3" aria-label="Large select example">
                                                <option selected></option>
                                                <?php 
                                             $sql = "SELECT * FROM designations";
                                             $result = $conn->query($sql);
                                             if ($result->num_rows > 0) {
                                                 while ($row = $result->fetch_assoc()) {
                                                     echo  "<option value=" .$row['designations']. ">" .$row['designations']. "</option>";
                                                 }
                                                }
                                            ?>  
                                            </select>
                                            </div>     
                                            <div class="mb-3">
                                                <label class="form-label">Status :</label>
                                                <select name="status" class="form-select" aria-label="Default select example">                                                                             
                                                <option selected></option>
                                                <option value="Working">Working</option>
                                                <option value="On Leave">On Leave</option>
                                                <option value="Fired">Fired</option>
                                                </select>
                                            </div>     
                                            <div class="mb-3">
                                                <label class="form-label">Contact no :</label>
                                                <input name="contactno" class="form-control" type="text" >
                                            </div>     
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input name="email" class="form-control" type="text">
                                            </div>
                                        
                                            <input type="submit" class="buts" name="submo" value="add">

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>


</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>

</html>