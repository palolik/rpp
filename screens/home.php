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
    <title>Admin home</title>
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

<div style="height:400px;width:1200px;display:flex;">
    <div style="height:-webkit-fill-available;width:450px;">
    <div style="display:flex">
        <p style="font-size: 25px; margin: 10px;">Maintaintence Box</p>
</div>
            <div class="ht1">
            
            <?php 
            require_once("../config/database.php");

            $result = mysqli_query($mysqli, "SELECT * FROM mreq ORDER BY si DESC");
            while($res = mysqli_fetch_assoc($result))

            {
                
                echo "<div class='mr1'>";
                echo "<a style='margin-left:400px;' href=\"dmreq.php?si=$res[si]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img style='height:10px' src='../clo.png'></a>";

                echo "<div>".$res['employeeid'] . $res['email'] ."</div >";
                echo "<p>".$res['request']."</p>";
                echo "<div>"  . $res['date']  , "</div>";

                
                echo "</div>";
            }
            ?>
        
        </div>

    </div>
    <div style="height:-webkit-fill-available;width:450px;">
    <div style="display: flex;justify-content: space-between;">
    <p style="font-size: 25px; margin: 10px;">NOTICE BOARD</p>
    <button style=" background-color:white;border: none;padding:1px;cursor: pointer;"  onclick="openForm()"><img style="height:20px" src="../add.png"></button> 
        </div>
    <div class="ht1">
            
            <?php 
            require_once("../config/database.php");

            $result = mysqli_query($mysqli, "SELECT * FROM notice ORDER BY si DESC");
            while($res = mysqli_fetch_assoc($result))

            {
                echo "<div class='mr1'>";
                echo "<a style='margin-left:400px;' href=\"dnot.php?si=$res[si]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img style='height:10px' src='../clo.png'></a>";

                echo "<div>". $res['getters'] ."</div >";
                echo "<p>".$res['notice']."</p>";
                echo "<div>"  . $res['date']  . "</div>";

                
                echo "</div>";
            }
            ?>
        
        </div>
    </div>
    
</div>
<div style="font-size:40px">Devices</div>
    <div class="hh1">

<div class="ho1">
    <img style="height:150px;width:150px;" src="https://www.complink.com.ph/cdn/shop/products/000002_28388_52d1b479-0980-4413-bfa1-84771ff8e9e7_500x500.jpg?v=1646107166">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
<div class="ho1">
    <img style="height:150px;width:150px;" src="https://itechstore.com.np/_ipx/f_webp/img/product/65db108f-9f88-4add-a252-273f84854ccb/acer-acer-hd-led-backlit-monitor-2.png">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
<div class="ho1">
    <img style="height:150px;width:150px;" src="https://www.pondicherryshopping.com/image/cache/catalog/goldkeyboard-600x600.jpg">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
<div class="ho1">
    <img style="height:150px;width:150px;" src="https://cdn-media.deus.com.gh/media/magefan_blog/scanner_for_your_business.png">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
<div class="ho1">
    <img style="height:150px;width:150px;" src="https://www.swiftermall.com/748-large_default/blue-gate-1200va-ups-bg1200.jpg">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
<div class="ho1">
    <img style="height:150px;width:150px;" src="https://images.summitmedia-digital.com/spotph/images/2021/06/10/logitech-m100-m100r-1-1623336038.png">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
<div class="ho1">
    <img style="height:150px;width:150px;" src="https://smartdeal.com.bd/public/uploads/all/oUmJKcdIwJXqhsqdMwmJdAKgu4KrMxWxunHPdNgI.jpg
">
    <p class="ho2">Total No.</p>
    <p class="ho3">30 pcs</p>
</div>
    </div>
</div>




</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>


<div class="tamoto" id="myForms2">
  <div style="display: flex;
    justify-content: space-between;
    font-size: 30px;
    margin: 10px;">
    <div>Notice</div>       
    <div>
    <button style=" background-color:white;border: none;padding:1px;cursor: pointer;"  onclick="closeForm()"><img style="height:20px" src="../clo.png"></button> 
    </div> 
    </div>
         <div>
         <form  action="notice.php" method="POST">
         <select name="getters" style="margin:5px 20px;padding:2px;color:black;font-size:20px;width:-webkit-fill-available;height:30px;background-color:white;">
                       <option value="all">All</option>
                       <option value="menegers">menegers</option>
                       <option value="ceo">ceo</option>
                       <option value="director">director</option>
        </select>
                      <textarea name="notice" style="margin:20px;padding:10px;resize:none;color:black;font-size:20px;width:-webkit-fill-available;height:300px;background-color:white;"
                      placeholder="Please add Device name and the problem you are facing in brief"></textarea>

             
 
                      
                        
     
                                             
          </div>

                    
        
          <button class='nm3' name="submit">Submit Request</button>
     
    </form>
  


</div>
<script>
function openForm() {
  document.getElementById("myForms2").style.display = "block";
}

function closeForm() {
  document.getElementById("myForms2").style.display = "none";
}
</script>
</html>