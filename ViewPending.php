<!-- ========= VIEW PENDING MODAL ======== -->
<?php echo 
'<div id="ViewPending'.$row['a_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
       <div class="modal-header">
              <h5 class="modal-title">Instructor Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body" style="width: 100%;">
            
          <div class="row" >
            
                <div class="col-md-12">

                <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                    
                                        <label>First name:</label>
                                        <div class="input-group">
                                        <input readonly type="text" name="edit_fn" id="edit_fn" value="'.$row['fn'].'" class="form-control form-control-line"/>
                                        </div>
                                    
                                 
                                        <label>Middle name:</label>
                                        <div class="input-group">
                                         <input readonly type="text" name="edit_mn" id="edit_mn" value="'.$row['mn'].'"  class="form-control form-control-line"/>
                                        </div>
                                    
                                   
                                    
                                            <label>Last name:</label>
                                            <div class="input-group">
                                             <input readonly type="text" name="edit_ln" id="edit_ln" value="'.$row['ln'].'"  class="form-control form-control-line"/>
                                             </div>
                                     
                                    
                                             <label>Email:</label>
                                             <div class="input-group">
                                             <input readonly type="email" name="edit_eadd" id="edit_eadd" value="'.$row['email'].'" class="form-control form-control-line" name="email"/>
                                             </div>
                                     
                                     
                                            <label>Birthdate:</label>
                                            <div class="input-group">
                                            <input readonly type="date" name="edit_bdate" id="edit_bdate" value="'.$row['bdate'].'" class="form-control form-control-line" >
                                            </div>
                                     
                                      
                                            <label>Sex:</label>
                                            <div class="input-group">
                                            <input readonly type="text" name="edit_sex" id="edit_sex" value="'.$row['sex'].'" class="form-control form-control-line" name="sex" />
                                            </div>
                                     
                                   
                                    
                                            <label>Civil Status:</label>
                                            <div class="input-group">
                                            <input readonly type="text" name="edit_cs" id="edit_cs" value="'.$row['civilstat'].'" class="form-control form-control-line" name="civilstat"/>
                                            </div>
                                     
                                  
                                            <label>Phone No:</label>
                                            <div class="input-group">
                                            <input readonly type="text" name="edit_cp_no" id="edit_cp_no" value="'.$row['cp_no'].'" name="cp_no" class="form-control form-control-line">
                                            </div>
                                     
                                 
                                            <label>Address:</label>
                                            <div class="input-group">
                                            <input readonly type="text" name="edit_address" id="edit_address" value="'.$row['address'].'" class="form-control form-control-line">
                                            </div>
                                     
                                   
                                     
                                         <label>Name of Company/School and Address:</label>

                                            <div class="input-group">
                                            <input readonly type="text" class="form-control" value="'.$row['company'].'">
                                         </div>
                                        
                                   
                                            <label>Blood Type:</label>
                                            <div class="input-group">
                                            <input readonly type="text" name="edit_bt" id="edit_bt" value="'.$row['bloodtype'].'" class="form-control form-control-line">
                                            </div>
                                     
                                     
                                            <label>Date Last Donated:</label>
                                            <div class="input-group">
                                             <input readonly type="date" name="edit_ld" id="edit_ld" value="'.$row['date_donated'].'" class="form-control form-control-line">
                                            </div>
                                     
                                    
                                   
                                            <label>Account Type:</label>
                                            <div class="input-group">
                                            <input readonly type="text" name="accounttype" value="'.$row['u_class'].'" class="form-control form-control-line">
                                            </div><br>
                                     

                                     </div>
                   
                    
             
                
            
        </div>
        <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
  </form>
</div>'
?>