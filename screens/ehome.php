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

    <link rel="stylesheet" type="text/css" href="../styl50.css">
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
    <title>Home</title>

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
                <div class='bol' style="margin-bottom:5px;">
                <span style="font-size:30px;">PC Configurations</span>
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
                <tr><th style='text-align: left;width:200px'>Pc Name</th><td>". $row['pcname'] ."</td></tr>
                <tr><th style='text-align: left;'>Ip Address</th><td>". $row['pcip'] ."</td></tr>
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
        <div class='bol' style="margin-bottom:5px;">
                <span style="font-size:30px;">Extra Devices</span>
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
                    <td><a href='log.php?sid=". $row['sid'] ."& eid=".$eid ." ' class='asd'  onclick='openForm8()'>Log</button>
                    </td>

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
function openForm8() {
  document.getElementById("myForms8").style.display = "block";
 


}

function closeForm8() {
  document.getElementById("myForms8").style.display = "none";
}
</script>
</html>


<div class="tamoto" id="myForms8">
<div style="display: flex;justify-content: space-between;font-size: 20px;margin: 10px;">
    <div>Maintenence History</div>       
    <div>
    <button style=" background-color:white;border: none;padding:1px;cursor: pointer;"  onclick="closeForm8()"><img style="height:20px" src="../clo.png"></button> 
    </div> 
</div>
    <div style="width:90%">
<table class="table table-striped table-bordered table-sm" 
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Mainteinence</th>
                                <th class="th-sm">Feedback</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                       include '../config/database.php';
                                        $serial = 2 ;
                                        
                                        $query = "SELECT * FROM log WHERE did=$serial";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $res)
                                            {                                            
                                                echo "<tr>";
                                                echo "<td>".$res['mainteinence']."</td>";
                                                echo "<td>".$res['feedback']."</td>";
                                              
                                       
                                             
                                                echo "</tr>";
                                            }
                                                
                                            }else{
                                                echo "<tr>
                                                <td colspan='3'>No Record Found</td>
                                            </tr>" ;
                                            }
                                        
                               
                                    
                                ?>

                        </tbody>

                    </table></div>
                                        </div>