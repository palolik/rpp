<div class="flex-shrink-0 p-3" style="height:100%;background-color:#0a0026;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    
    <span class="fs-4">Employee</span>
  </a>
  <hr>


  <div>
                  <div  style="margin-bottom:20px;color:white;font-size:20px;width:270px;height:20px;background-color:rgba(22, 19, 19, 0.3);">
                      Notice Board
                </div>      
<div class="scr">
                 
                    <?php 
            require_once("../config/database.php");

            $result = mysqli_query($mysqli, "SELECT * FROM notice ORDER BY si DESC");
            while($res = mysqli_fetch_assoc($result))

            {
                echo "<div class='no1'>";
                echo "<p style='color:red;'>". $res['notice'] ."</p>";
                echo "<p>"  . $res['date']  . "</p>";

                
                echo "</div>";
            }
            ?>

</div>

</div>
<div>



<div>
                    <div style=" margin-top: 200px;">
                 
                  
                      <a  href="logout.php"> <input class='nm4' type="submit" name="" value="Logout" ></a>
</div>
           
                 


</div>


  


    </div>

<script>
function openForm() {
  document.getElementById("myForms").style.display = "block";
}

function closeForm() {
  document.getElementById("myForms").style.display = "none";
}


</script>


<div class="tamoto" id="myForm">
  <div style="display: flex;
    justify-content: space-between;
    font-size: 30px;
    margin: 10px;">
 <button class='nm3' name="submit">Submit Request</button>
    </form>
  
</div>

</div>
</div>
 