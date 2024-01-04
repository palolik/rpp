<?php  
session_start(); 
if (!isset($_SESSION['eid'])) {
    header('Location:../index.php');
    exit();
}
$eid=$_SESSION['eid'] ;
?>

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
    <link rel="stylesheet" type="text/css" href="../styl48.css">
    <style>

.form-popup {
  display: none;
 
}
.form-container {
  background-color: white;
}

.form-container .btn {
  border: none;
  cursor: pointer;



}

.form-container .cancel {
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>



    <div class="brk">

    <?php include("sidebar2.php") ?>
<div>

    <?php include("header.php") ?>

            <div style="
    height: auto;
    align-items: center;
    flex-direction: column;
    justify-content: flex-start;
">



            </div>

    <?php
            include '../config/database.php';

            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
     

        $sql = "SELECT * FROM employees where employeeid=$eid";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                 
     
                    
            <form>
                    <div class='box31'>
                       
                        <div class='box11'>
                            <div class='box111'>
                            <div class='f2'>
                            <label for='fname'>Office :</label>
                            <input class='form-control' type='text' name='officename' value=' ". $row['officename'] ." '
                            aria-label='Disabled input example' disabled readonly>
                        </div>
                                <div class='f2'>
                                    <label for='fname'>Employee Name:</label>
                                    <input class='form-control' type='text' name='employeename'  value=' ".$row['employeename']." '
                                    aria-label='Disabled input example' disabled readonly>

                                </div>
                                <div class='f2'>
                                    <label for='fname'>Designation:</label>
                                    <input class='form-control' type='text' name='designation' value=' ". $row['designation'] ." '
                                    aria-label='Disabled input example' disabled readonly>
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Employee Code:</label>
                                    <input class='form-control' type='text' name='employeecode' value=' ". $row['employeecode'] ." '
                                    aria-label='Disabled input example' disabled readonly>
                                </div>


                            </div>
                            <div class='box112'>

                             
                                <div class='f2'>
                                    <label for='fname'>Email Address :</label>
                                    <input class='form-control' type='text' name='email' value=' ". $row['email'] ." '
                                    aria-label='Disabled input example' disabled readonly>
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Status</label>
                                    <input class='form-control' type='text' name='status' value='". $row['status'] ." '
                                    aria-label='Disabled input example' disabled readonly>
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Mobile Number :</label>
                                    <input class='form-control' type='text' name='contactno' value=' ". $row['contactno'] ." '
                                    aria-label='Disabled input example' disabled readonly>
                                </div>

                            </div> 
                       



                 
                            
                        </div>
                       
                    </div>
                </form>
                ";
            }
            }
            
            ?>
            


                <div class='box9'>
                <div class='bol' style="margin-bottom:25px;">
                <p>PC Configurations</p>
            </div>
                <div>
                <div>
            <?php   
              include '../config/database.php';

              $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
           
        $sql = "SELECT * FROM devices where employeeid=$eid";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                <table style='margin:10px'>
                <tr><th style='text-align: left;width:200px'>Ip Address</th><td>". $row['pcip'] ."</td></tr>
                <tr><th style='text-align: left;'>PC/Laptop</th><td>". $row['pclap'] ."</td></tr>
                <tr><th style='text-align: left;'>Processor</th><td>". $row['processor'] ."</td></tr>
                <tr><th style='text-align: left;'>RAM</th><td>". $row['ram'] ."</td></tr>
                <tr><th style='text-align: left;'>HDD</th><td>". $row['hdd'] ."</td></tr>
                <tr><th style='text-align: left;'>SSD</th><td>". $row['ssd'] ."</td></tr>
        </table>
                </div>";
            }
        }
        
        ?>
  <div class='bol' style="margin-bottom:25px;">
                <p>Extra Device Details</p>
            </div>
                <table  class="aer">
               <tr style='text-align: center;'>
                <th>Device</th><th>Item code</th>  <th>Specifications</th> <th>Purchase_Date</th> <th>Warrenty_Info</th><th>Comments</th><th>Log</th>
                </tr>
               
                <?php   
              include '../config/database.php';

              $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
            
        $sql = "SELECT * FROM extradevices where employeeid=$eid";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                    <tr>
                    <td><div class='adt'>". $row['device'] ."</div></td>
                    <td><div class='adt'>". $row['itemcode'] ."</div></td>

                    <td><div class='adt'>". $row['modspec'] ."</div></td>
                    <td><div class='adt'>". $row['pdate'] ."</div></td>
                    <td><div class='adt'>". $row['warranty'] ."</div></td>
                    <td><div class='adt'>". $row['comments'] ."</div></td>
                    <td><a class='asd' href=\"log.php?sid=$row[sid]\">view</a></td>
                </tr>
                ";
              }
            }
        
  
 ?>



        


    </table>

               
   
  


    </div>
</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</html>