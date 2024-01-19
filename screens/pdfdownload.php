<?php 
    $id = $_GET['ds'];   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee details</title>
    <style>
        *{
            font-size:20px;
        }
.f2 {
  display: grid;
  grid-template-columns: 30% 70%;
  align-items: center;
  width: inherit;
  margin: 10px;


}
.box11 {
  display: grid;
  grid-template-columns: 50% 50%;


}
.box111 {
  display: flex;
  flex-direction: column;
  height: 260px;
  justify-content: space-evenly;

}
.box1 {
  height: 100%;
  background-color: #ffffff;
  margin: 0px 40px;
  display: flex;
  flex-direction: column;
}

        </style>
</head>
<body>
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
                <h3>Existing Employee Details</h3>
            </div>
            <div class='box11'>
                <div class='box111'>
                <div class='f2'>
                <label for='fname'>Employee id:</label>
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
            

        </div>
    </form>
    ";
}
}

?>

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
                    <p>Device Details</p>   <a style=' margin-left:40px;background-color:white;border: none;padding:1px;cursor: pointer;' href=\"editpc.php?si=$row[si]&id=$id\"><img style='height:20px' src='../edit.png'></a>

                    </div>
                        <div>
                        <div>
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
        }else {
            echo 
            "
            <p>Device Details</p> 

            </div>
                <div>
                <div>
        <table style='margin:10px'>
        <tr><th style='text-align: left;width:200px'>Ip Address</th><td>not added</td></tr>
        <tr><th style='text-align: left;'>PC/Laptop</th><td>not added</td></tr>
        <tr><th style='text-align: left;'>Processor</th><td>not added</td></tr>
        <tr><th style='text-align: left;'>RAM</th><td>not added</td></tr>
        <tr><th style='text-align: left;'>HDD</th><td>not added</td></tr>
        <tr><th style='text-align: left;'>SSD</th><td>not added</td></tr>
</table>
        </div>";
        }
        
        ?>
  <div class='bol' style="margin-bottom:5px;">
                <p>Extra Device Details</p>
            </div>
                <table  class="aer">
               <tr style='text-align: center;'>
                <th>Device</th><th>Item code</th> <th>Quantity</th> <th>Price</th> <th>Specifications</th> <th>Purchase_Date</th> <th>Warrenty_Info</th><th>Comments</th>
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
               
                </tr>
                ";
              }
            }
        
  
 ?>


</body>
</html>