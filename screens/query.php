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
    <link rel="stylesheet" type="text/css" href="../styl45.css">
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
    $id = $_POST['ds'];
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
                <p>Device Details</p>
            </div>
                <div>
                <div>
            <?php   
              include '../config/database.php';

              $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
            $id = $_POST['ds'];
        $sql = "SELECT * FROM devices where employeeid=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                <table style='margin:10px'>
                <tr><th style='text-align: left;width:200px'>Ip Address</th><td>". $row['pcip'] ."</td></tr>
                <tr><th style='text-align: left;'>PC/Laptop</th><td>". $row['pc/laptop'] ."</td></tr>
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
                <th>Item</th> <th>Quantity</th> <th>Price</th> <th>Specifications</th> <th>Purchase_Date</th> <th>Warrenty_Info</th> <th>Status</th> <th>Comments</th> <th>Delate</th> <th>Custom</th><th>Log</th>
                </tr>
               
                <?php   
              include '../config/database.php';

              $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
            $id = $_POST['ds'];
        $sql = "SELECT * FROM extradevices where employeeid=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                    <tr>
                    <td><div class='adt'>". $row['device'] ."</div></td>
                    <td><div class='adt'>". $row['Q'] ."</div></td>
                    <td><div class='adt'>". $row['price'] ."</div></td>
                    <td><div class='adt'>". $row['Model/specification'] ."</div></td>
                    <td><div class='adt'>". $row['purchase_date'] ."</div></td> 
                    <td><div class='adt'>". $row['Warranty Info'] ."</div></td>
                    <td><div class='adt'>". $row['Status'] ."</div></td>
                    <td><div class='adt'>". $row['Comments'] ."</div></td>
                    <td><a class='asd' href=\"deleteemployee.php?id=$row[sid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
                    <td><a class='asd' href=\"edite.php?ds=$row[sid]\">custom</a></td>
                    <td><a class='asd' href=\"log.php?sid=$row[sid]\">view</a></td>
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
    <form  action="/action_page.php">
    <div class='st'>

 
                      
                           <div style='margin:10px'>
                        
                          <div class="mb-3">
                                                <label class="form-label">Device :</label>
                                                <select name=""class="form-control" >
                                                <option selected></option>
                                                <option value="one">one</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                </select>
                                            </div> 
                          <div class="mb-3">
                            <label class="form-label">Quantity:</label>
                            <input name="Q" class="form-control" type="text">
                           </div>    
                           <div class="mb-3">
                            <label class="form-label">Price:</label>
                            <input name="price" class="form-control" type="text" >
                            </div>    
                             <div class="mb-3">
                            <label class="form-label">Specifications:</label>
                            <input name="Model/specification" class="form-control" type="text" >
                             </div> 
                        </div>
      <div  style='margin:10px'>
                             <div class="mb-3">
                            <label class="form-label">Purchase_Date:</label>
                            <input name="purchase_date" class="form-control" type="date" >
                             </div>  
                             <div class="mb-3">
                            <label class="form-label">Warrenty_Date:</label>
                            <input name="Warrenty Info" class="form-control" type="date" >
                             </div> 
                             <div class="mb-3">
                            <label class="form-label">Status:</label>
                            <input name="Status" class="form-control" type="text" >
                             </div>  
                             <div class="mb-3">
                            <label class="form-label">Comments:</label>
                            <input name="Comments" class="form-control" type="text" >
                             </div>    
                  
        </div>                                        
                        </div>

                    
        
    <div style="display:flex;justify-content:center"><button type="submit" class='nm2' >Add Item</button></div>
     
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
</script>
</html>