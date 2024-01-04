<?php 
if (isset($_POST['ds'])) {
    $id = $_POST['ds'];
} elseif (isset($_GET['ds'])) {
    $id = $_GET['ds'];
} else { 
    $id = ""; 
}         
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

    <?php include("sidebar.php") ?>
<div>

    <?php include("header.php") ?>

            <div style="height: auto;align-items: center;flex-direction: column;justify-content: flex-start;">
            </div>
            <?php

            include '../config/database.php';

            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
           
        $sql = "SELECT * FROM employees where employeeid=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                 
     
                    
            <form>
                    <div class='box1'>
                        <div class='bol'>
                            <p>Existing Employee Details</p>
                        </div>
                        <div class='box11'>
                            <div class='box111'>
                            <div class='f2'>
                            <label for='fname'>Employee Name:</label>
                            <input class='form-control' type='text' name='employeename'  value=' ".$row['employeeid']." '
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
                                    <label for='fname'>Office :</label>
                                    <input class='form-control' type='text' name='officename' value=' ". $row['officename'] ." '
                                    aria-label='Disabled input example' disabled readonly>
                                </div>
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
                        <div class='aew'> <a class='asd' href=\"deleteemployee.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                        <a class='asd' href=\"edite.php?ds=$row[id]\">Edit</a>
                        </div>

                    </div>
                </form>
                ";
            }
            }
            
            ?>
            


                <div class='box9'>
                <div class='bol' style="margin-bottom:5px;">
                <p>Device Details</p>     <button style=" margin-left:40px;background-color:white;border: none;padding:1px;cursor: pointer;"  onclick="openForm1()"><img style="height:20px" src="../add.png"></button> 

            </div>
                <div>
                <div>
            <?php   
              
              if (isset($_POST['ds'])) {
                $id = $_POST['ds'];
            } elseif (isset($_GET['ds'])) {
                $id = $_GET['ds'];
            } else { 
                $id = ""; 
            }
              
              include '../config/database.php';

              $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
           
        $sql = "SELECT * FROM devices where employeeid=$id";
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
  <div class='bol' style="margin-bottom:5px;">
                <p>Extra Device Details</p>
            </div>
                <table  class="aer">
               <tr style='text-align: center;'>
                <th>Device</th><th>Item code</th> <th>Quantity</th> <th>Price</th> <th>Specifications</th> <th>Purchase_Date</th> <th>Warrenty_Info</th><th>Comments</th> <th>Delate</th> <th>Custom</th><th>Log</th>
                </tr>
               
                <?php   
                if (isset($_POST['ds'])) {
                    $id = $_POST['ds'];
                } elseif (isset($_GET['ds'])) {
                    $id = $_GET['ds'];
                } else { 
                    $id = ""; 
                }
              include '../config/database.php';

              $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
           
        $sql = "SELECT * FROM extradevices where employeeid=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                    <tr>
                    <td><div class='adt'>". $row['device'] ."</div></td>
                    <td><div class='adt'>". $row['itemcode'] ."</div></td>
                    <td><div class='adt'>". $row['q'] ."</div></td>
                    <td><div class='adt'>". $row['price'] ."</div></td>
                    <td><div class='adt'>". $row['modspec'] ."</div></td>
                    <td><div class='adt'>". $row['pdate'] ."</div></td> 
                    <td><div class='adt'>". $row['warranty'] ."</div></td>
                    <td><div class='adt'>". $row['comments'] ."</div></td>
                    <td><a class='asd' href=\"deleteemployee.php?id=$row[sid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
                    <td><a class='asd' href=\"edite.php?ds=$row[sid]\">custom</a></td>
                    <td><a class='asd' href=\"log2.php?sid=$row[sid]\">view</a></td>
                </tr>
                ";
              }
            }
        
  
 ?>



        
   <tr><td colspan='11'><button class='nm1' onclick="openForm()">Add new item</button></td>
<tr>

    </table>

               
    <div class="tamo" id="myForm">
    <div style="margin:5px;display: flex;justify-content: space-between;">
    <p style="font-size:20px;margin-left:20px;">ADD NEW DEVICE</p><button style="align-self: baseline;background-color: white;border: none;padding: 3px;cursor: pointer;"  onclick="closeForm()"><img style="height:15px" src="../clo.png"></button> 
    </div> 
    <form  action="addexde.php" method="POST">
    <div class='st'>

 
                      
                           <div style='margin:10px'>
                        
                          <div class="mb-3">
                          <input name="employeeid" style="display:none;" value="<?php echo $id; ?>" type="text">

                                             <label class="form-label">Device :</label>
                                            <select name="device"class="form-control" >
                                                <option selected></option>
                                                <option value="one">one</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                            </select>
                          </div> 
                          <div class="mb-3">
                            <label class="form-label">Quantity:</label>
                            <input name="q" class="form-control" type="text">
                           </div>    
                           <div class="mb-3">
                            <label class="form-label">Price:</label>
                            <input name="price" class="form-control" type="text" >
                            </div>    
                             <div class="mb-3">
                            <label class="form-label">Specifications:</label>
                            <input name="modspec" class="form-control" type="text" >
                             </div> 
                        </div>
      <div  style='margin:10px'>
                             <div class="mb-3">
                            <label class="form-label">Purchase_Date:</label>
                            <input name="pdate" class="form-control" type="date" >
                             </div>  
                             <div class="mb-3">
                            <label class="form-label">Warrenty_Date:</label>
                            <input name="warranty" class="form-control" type="date" >
                             </div> 
                             <div class="mb-3">
                            <label class="form-label">Item code:</label>
                            <input name="itemcode" class="form-control" type="text" >
                             </div>  
                             <div class="mb-3">
                            <label class="form-label">Comments:</label>
                            <input name="comments" class="form-control" type="text" >
                             </div>    
                  
                            </div>                                        
                            </div>
                            <div style="display:flex;justify-content:center"><button type="submit" name="submission" class='nm2' >Add Item</button></div>
     
    </form>
  
  


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

function openForm1() {
  document.getElementById("myForms3").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForms3").style.display = "none";
}

</script>
</html>


<div id="myForms3" class="tamoro">
    <div style=" margin:10px;display: flex;justify-content: flex-start;flex-direction: column;align-items: center;;">
        <div class="top">
            <p style="font-size:20px;">ADD NEW DEVICE</p>
            <button style="align-self: baseline;background-color: white;border: none;padding: 3px;cursor: pointer;"  onclick="closeForm1()"><img style="height:15px" src="../clo.png"></button> 
        </div>
        <form action="indevice.php" method="POST">
        <div style="width: 100%;grid-template-columns: 50% 50%;display: grid;margin:10px;width: -webkit-fill-available;">
            
                <div style="margin:10px">
                    <div class="mb-3">
                        <label class="form-label">PC/LAPTOP:</label>
                        <select name="pclap" class="form-control" type="text">
                            <option value="PC">PC</option>
                            <option value="LAPTOP">LAPTOP</option>
                        </select>
                    </div>    
                    <div class="mb-3">
                        <label class="form-label">Device Name:</label>
                        <input name="pcname" class="form-control" type="text">
                        <input name="employeeid" style="display:none;" value="<?php echo $id; ?>" type="text">
                    </div>    
                    <div class="mb-3">
                        <label class="form-label">IP:</label>
                        <input name="pcip" class="form-control" type="text">
                    </div> 
                    <div class="mb-3">
                        <label class="form-label">OS:</label>
                        <input name="os" class="form-control" type="text">
                    </div>    
                    <div class="mb-3">
                        <label class="form-label">Motherboard:</label>
                        <input name="motherboard" class="form-control" type="text" >
                    </div>    
                    <div class="mb-3">
                        <label class="form-label">processor:</label>
                        <input name="processor" class="form-control" type="text" >
                    </div> 
                </div><div style="margin:10px">
                    <div class="mb-3">
                <label class="form-label">RAM:</label>
                <input name="ram" class="form-control" type="text" >
                </div> 
                <div class="mb-3">
                <label class="form-label">Harddisk:</label>
                <input name="hdd" class="form-control" type="text" >
                </div> 
                <div class="mb-3">
                <label class="form-label">SSD:</label>
                <input name="ssd" class="form-control" type="text" >
                </div> 
                <div class="mb-3">
                <label class="form-label">CCD ROM:</label>
                <input name="cdrom" class="form-control" type="text" >
                </div> 
                <div class="mb-3">
                <label class="form-label">purchase date:</label>
                <input name="pdate" class="form-control" type="date" >
                </div> 
                <div class="mb-3">
                <label class="form-label">warranty date:</label>
                <input name="warrenty" class="form-control" type="date" >
                </div> 
</div>
        </div>
                <div style="display:flex;justify-content:center"><button type="submit" name="submitd" class='nm2' >Add Device</button></div>
            </form>
    </div>

</div>