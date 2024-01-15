<?php
// Connect to your MySQL database
$conn = mysqli_connect("localhost", "root", "", "rpp");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the query
$result = mysqli_query($conn, "SELECT device, COUNT(*) AS count FROM extradevices GROUP BY device ORDER BY count DESC");

// Display the results in a table
if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='ho1'> ";
        if($row["device"]=='monitor'){
         echo " <img style='height:150px;width:150px;' src='https://itechstore.com.np/_ipx/f_webp/img/product/65db108f-9f88-4add-a252-273f84854ccb/acer-acer-hd-led-backlit-monitor-2.png'>" ;
        }
        else if($row["device"]=='scanner'){
          echo " <img style='height:150px;width:150px;' src='https://cdn-media.deus.com.gh/media/magefan_blog/scanner_for_your_business.png'>" ;
        }
        else if($row["device"]=='ups'){
          echo " <img style='height:150px;width:150px;' src='https://www.swiftermall.com/748-large_default/blue-gate-1200va-ups-bg1200.jpg'>" ;
        }
        else if($row["device"]=='mouse'){
          echo " <img style='height:150px;width:150px;' src='https://images.summitmedia-digital.com/spotph/images/2021/06/10/logitech-m100-m100r-1-1623336038.png'>" ;
        }
        else if($row["device"]=='speaker'){
          echo " <img style='height:150px;width:150px;' src='https://smartdeal.com.bd/public/uploads/all/oUmJKcdIwJXqhsqdMwmJdAKgu4KrMxWxunHPdNgI.jpg'>" ;
        }
        else if($row["device"]=='scanner'){
          echo " <img style='height:150px;width:150px;' src='https://cdn-media.deus.com.gh/media/magefan_blog/scanner_for_your_business.png'>" ;
        }
        else if($row["device"]=='scanner'){
          echo " <img style='height:150px;width:150px;' src='https://cdn-media.deus.com.gh/media/magefan_blog/scanner_for_your_business.png'>" ;
        }
        
       echo "
       
        <p class='ho2'>" . $row["device"] . "</p>
        <p class='ho3'>" . $row["count"] . "pcs</p>
              </div>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
mysqli_close($conn);
?>

