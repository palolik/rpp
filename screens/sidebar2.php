<div class="flex-shrink-0 p-3" style="height:100%;background-color:#0a0026;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    
    <span class="fs-4">Employee</span>
  </a>
  <hr>

  <div>
                  <div  style="margin-bottom:20px;color:white;font-size:20px;width:270px;height:20px;background-color:rgba(22, 19, 19, 0.3);">
                      Notice Board
                </div>      

                    <div style="border:1px solid white;resize:none;color:white;font-size:15px;width:-webkit-fill-available;height:500px;background-color:rgba(22, 19, 19, 0.3);">
                     <div class="no1" >tomorrow hg gfd try will be a national holiday</div>
                     <div class="no1" >tomorrow hg gfd try will be a national holiday</div>
                     <div class="no1">tomorrow hg gfd try will be a national holiday</div>

</div>

</div>
<div>
                    <div style=" margin-top: 200px;">
                      <button class='nm4' onclick="openForm()">Request Maintenance</button>
                      <button class='nm4' onclick="openForm()">Logout</button>
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
    <div>Maintenance Request</div>       
<div>
<button style=" background-color:white;border: none;padding:1px;cursor: pointer;"  onclick="closeForm()"><img style="height:20px" src="../clo.png"></button> 
</div> 
</div>
         <div>
         <form  action="mreq.php" method="POST">
                         <input style="display:none" value="<?php echo $eid ?>" name="employeeid">
<input style="display:none" name="date"  value="<?php echo $eid ?>" >
                      <textarea name="request" style="margin:20px;padding:10px;resize:none;color:black;font-size:20px;width:-webkit-fill-available;height:300px;background-color:white;"
                      placeholder="Please add Device name and the problem you are facing in brief"></textarea>

             
 
                      
                        
     
                                             
          </div>

                    
        
          <button class='nm3' name="submit">Submit Request</button>
     
    </form>
  


    </div>


 