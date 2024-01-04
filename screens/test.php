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
  