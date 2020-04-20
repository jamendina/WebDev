<!-- ========= EDIT STAFF MODAL ======== -->
<?php echo 
'<div id="editProf'.$row['ui_id'].'" class="modal fade">

<form method="post">
   <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">User Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                  <div class="tab-content clearfix">
                  
                  <h5> <center>Basic Information</center></h5>
                  <div class="row">
                    <div class="col-sm-3  ">
                      <!-- text input -->
                      <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="edit_fn" id="edit_fn" required value="'.$row['fn'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name:</label>
                        <input  type="text" name="edit_mn" id="edit_mn" value="'.$row['mn'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Last Name:</label>
                        <input  type="text" name="edit_ln" id="edit_ln" required value="'.$row['ln'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Suffix Name:</label>
                        <input  type="text" name="edit_sn" id="edit_sn" value="'.$row['sn'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Birthdate:</label>
                        <input  type="date" name="edit_bdate" id="edit_bdate" required value="'.$row['bdate'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sex:</label>
                        <input  type="text" name="edit_sex" id="edit_sex" required value="'.$row['sex'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Civil Status:</label>
                        <input  type="text" name="edit_civilstat" id="edit_civilstat" required value="'.$row['civilstat'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Educational Attainment/Course</label>
                        <input  type="text" name="edit_educ_att" id="edit_educ_att"  required value="'.$row['educ_att'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Occupation/Year Level<b style="color: red;">*</b></label>
                         <input  type="text" name="edit_occupation" id="edit_occupation" required value="'.$row['occupation'].'" class="form-control"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name of Company/School and Address<b style="color: red;">*</b></label>
                         <input type="text" name="edit_company" id="edit_company" required value="'.$row['company'].'" class="form-control"/>
                      </div>
                    </div>
                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Blood Type:</label>
                        <input  type="text" name="edit_bt" id="edit_bt" required value="'.$row['bloodtype'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date Last Donated:</label>
                        <input  type="date" name="edit_datedonated" id="edit_datedonated" required value="'.$row['date_donated'].'" class="form-control"/>
                      </div>
                    </div>
                   
                    </div>
                    </div>
                  <!-- /.tab-pane -->
                
                <h5><center>Contact Information</center></h5>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Email<b style="color: red;">*</b></label>
                          <input  type="text" name="edit_email" id="edit_email" required value="'.$row['email'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Phone Number<b style="color: red;">*</b> </label>
                              <input  type="text" name="edit_cp_no" id="edit_cp_no" required value="'.$row['cp_no'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Address<b style="color: red;">*</b></label>
                      <input  type="text" name="edit_address" id="edit_address" required value="'.$row['address'].'" class="form-control"/>
                      </div>
                    </div>
                  
                  <!-- end line for Contact information-->
                  </div>
                 
                    <h5><center>Contact Person Incase of Emergency</center></h5>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Contact Person<b style="color: red;">*</b></label>
                         <input type="text" name="edit_name" id="edit_name" required value="'.$row['name'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Contact Number<b style="color: red;">*</b></label>
                             <input  type="text" name="edit_contactnumber" id="edit_contactnumber" required value="'.$row['contactnumber'].'" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Relationship to the Person<b style="color: red;">*</b></label>
                          <input  type="text" name="edit_relationship" id="edit_relationship" required value="'.$row['relationship'].'" class="form-control"/>
                      </div>
                    </div>
                  
                  <!-- end line for Contact Person incase of emergency information-->
                    
                    
            </div>
            <h5><center>User Authentication</center></h5>
            <div class="row">
                    <div class="col-md-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="inputName">Input Password for Authentication<b style="color: red;">*</b></label>
                         <center><input required name="auth_pass" id="auth_pass" class="form-control input-sm" type="password" placeholder="Enter Password"></center>
                      </div>
                    </div>
                  </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="edit_profiles" name="edit_profiles">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
    </form>
</div>';
?>