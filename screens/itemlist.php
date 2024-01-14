<?php 
require_once("../config/database.php");
    if(isset($_POST['submit'])){
        
        $devicen = mysqli_real_escape_string($mysqli, $_POST['devicen']);
        $q = mysqli_real_escape_string($mysqli, $_POST['q']);
        $adddate = mysqli_real_escape_string($mysqli, $_POST['adddate']);
        $result = mysqli_query($mysqli, "INSERT INTO alldevice (`devicen`, `q`, `adddate`) VALUES ('$devicen', '$q', '$adddate') ");

        header("location:itemlist.php");

    }
?>
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
                <div class="wea">
                <button class="asdt" onclick="openForm()">add item</button>

        <button class="asdt"  onclick="exportTableToExcel('ls_table', 'items')">Export Excel</button>
        <!-- <button class="asdt" onclick="ImportTableToDb()">Import CSV</button> -->
        <button class="asdt" onclick="exportTableToCSV()">Export CSV</button>
    <div>
            <div class="container"> 
                <div class="form-group">
                    <div class="inp">
  <input type="text" id="ls_search_text" placeholder="Type any keyword to search"
    class="form-control" />  
                </div>
                <br />
                <div id="ls_result3" style="overflow-x:scroll;border-top: 5px solid #ddd;overflow-y:scroll;height:550px"></div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
<script>
    function openForm() {
    document.getElementById("myForms2").style.display = "block";
    }

    function closeForm() {
    document.getElementById("myForms2").style.display = "none";
    }
</script>
<script src="exportxl.js"></script>
<script src="exporcsv.js"></script>
</html>


<div class="tamoto" id="myForms2">
  <div style="display: flex;
    justify-content: space-between;
    font-size: 30px;
    margin: 10px;">
    <div>Add Device</div>       
    <div>
    <button style=" background-color:white;border: none;padding:1px;cursor: pointer;"  onclick="closeForm()"><img style="height:20px" src="../clo.png"></button> 
    </div> 
    </div>
         <div style="padding:20px;" >
         <form  action="itemlist.php" method="POST">
         <div class="mb-3">
                      <label class="form-label">Device Name:</label>
                      <input class="form-control "  type="text" name="devicen">
             </div> <div class="mb-3">
                      
             <label class="form-label">Device Name:</label>
                      <input class="form-control " type="date" name="adddate">
                      </div> <div class="mb-3">
                      <label class="form-label">Device Name:</label>
                      <input class="form-control " type="text"name="q" >
                      </div>          
          </div>

                    
        
          <button class='nm3' name="submit">Add Device</button>
     
    </form>
  


</div>
