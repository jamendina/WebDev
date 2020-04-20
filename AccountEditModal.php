<!-- ========= EDIT STAFF MODAL ======== -->
<?php echo 
'<div id="editStaff'.$row['ui_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
       <div class="modal-header">
              <h5 class="modal-title">Staff Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
            
                <div class="col-md-12">
                <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                    <div class="form-group">
                        <label>First Name :</label>
                        <input  required name="edit_fn" id="edit_fn" class="form-control input-sm" type="text" placeholder="Staff First Name" value="'.$row['fn'].'" onKeyPress="return ValidateAlpha(event);" />
                    </div>
                    <div class="form-group">
                        <label>Middle Name :</label>
                        <input  name="edit_mn" id="edit_mn" class="form-control input-sm" type="text" placeholder="Staff Middle Name" value="'.$row['mn'].'" onKeyPress="return ValidateAlpha(event);"/>
                    </div>
                    <div class="form-group">
                        <label>Last Name :</label>
                        <input  required name="edit_ln" id="edit_ln" class="form-control input-sm" type="text" placeholder="Staff Last Name" value="'.$row['ln'].'" onKeyPress="return ValidateAlpha(event);"/>
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <input required name="edit_address" id="edit_address" class="form-control input-sm" type="text" placeholder="Staff Address" value="'.$row['address'].'" />
                    </div>
                    
                    <div class="col-md-13 phone-number">
                        <label>Contact No. :</label>
                        <input required name="edit_cp_no" size="11" maxlength="11" id="edit_cp_no" class="form-control input-sm" type="tel" placeholder="Staff Cellphone No." value="'.$row['cp_no'].'" onkeypress="javascript:return isNumber(event)" pattern="^[0-9]{10,12}$" title="Should contain 11 digits mobile number only"/>
                    </div>
                    <div class="form-group">
                        <label>Position :</label>
                        <select name="edit_position" id="edit_position"  class="form-control input-sm" required="true" autocomplete="off">  
                       <option value="" disabled selected>Position</option>
                    ';
                                          $pos = mysqli_query($con, "SELECT * from tblposition");
                                            while($row = mysqli_fetch_array($pos))
                         {
                                                echo '
                                               
                                                    
                                                    <option value="'.$row['position'].'"> '.$row['position'].'</option>';
                                                    
                                                        echo'
                                                    
                                                

                                                ';
                                          
                                            }echo '
                                            </select>
                       
                    </div>
                    <div class="form-group">
                        <label>Services :</label>
                        <select name="edit_services" id="edit_services"  class="form-control input-sm" required="true" autocomplete="off">  
                       <option value="" disabled selected>Services</option>
                    ';
                                          $ser = mysqli_query($con, "SELECT * from tblservices");
                                            while($row = mysqli_fetch_array($ser))
                         {
                                                echo '
                                               
                                                    
                                                    <option value="'.$row['services_title'].'"> '.$row['services_title'].'</option>';
                                                    
                                                        echo'
                                                    
                                                

                                                ';
                                            }echo '</select>
                       
                    </div>

                </div>
            </div>
            
        </div>
       <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_save" name="btn_save">Save changes</button>
            </div>
    </div>
  </div>
  </form>
</div>'
?>

