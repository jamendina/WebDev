<?php echo'
<!--ADD  INSTRUCTOR-->
<div id="addInstructor" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
              <h5 class="modal-title">Add Instructor Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">

                    <div class="form-group">
                        <label>Specialization :</label>
                        <select name="specialization" id="specialization"  class="form-control input-sm" required="true" autocomplete="off">  
                       <option value="" disabled selected>Specialization</option>
                    ';
                                          $pos = mysqli_query($con, "SELECT * from tblspecialization ");
                                            while($row = mysqli_fetch_array($pos))
                         {
                                                echo '
                                               
                                                    <option value="'.$row['specialization'].'"> '.$row['specialization'].'</option>';
                                                    
                                                        echo'
                                                    
                                                

                                                ';
                                            }echo '
                            
                        </select>
                       
                    </div>
                    
                    <div class="form-group">
                        <label>Username :</label>
                        <input required name="user" id="user" class="form-control input-sm" type="text" placeholder="Input Username"  />
                        <div id="insuserstatus"></div>
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input required name="pass" id="pass" class="form-control input-sm" type="password" placeholder="Input Password" />
                    </div>
          <div class="form-group">
                        <label>First Name :</label>
                        <input required name="fn" id="fn" class="form-control input-sm" type="text" placeholder="Input First Name" onKeyPress="return ValidateAlpha(event);"/>
                    </div>
          <div class="form-group">
                        <label>Middle Name :</label>
                        <input name="mn" id="mn" class="form-control input-sm" type="text" placeholder="Input Middle Name" onKeyPress="return ValidateAlpha(event);"/>
                    </div>
          <div class="form-group">
                        <label>Last Name :</label>
                        <input required name="ln" id="ln" class="form-control input-sm" type="text" placeholder="Input Last Name" onKeyPress="return ValidateAlpha(event);"/>
                    </div>
          <div class="form-group">
                        <label>Address :</label>
                        <input required name="address" id="address" class="form-control input-sm" type="text" placeholder="Input Address" />
                    </div>
          
          <div class="form-group">
                        <label>Contact No. :</label>
                        <input required name="cp_no"  maxlength="11" id="cp_no" class="form-control input-sm" type="tel" placeholder="Input Cellphone No."  onkeypress="javascript:return isNumber(event)" pattern="^[0-9]{10,12}$" title="Should contain 11 digits mobile number only" />
                    </div>

          <div class="form-group">
                     <label>Type of Membership:</label>

                         <select class="form-control" name="maabtype_id" id="maabtype_id" autocomplete="off" >
                        <option  value="" disabled selected>MAAB Type</option>';
                                          $maab = mysqli_query($con, "SELECT * from tblmaabtype ");
                                            while($row = mysqli_fetch_array($maab))
                         {
                                                echo '
                                                    
                                                    <option value="'.$row['maabtype_id'].'"> '.$row['type'].'</option>';
                                                    
                                                        echo'
                                                    
                                                

                                                ';
                                            } echo'
                        
                      </select>
                        
                     
                    </div>
          
                    <div class="form-group">
                     <label>Membership ID Number:</label>
                        <input type="text" required class="form-control" name="maab_id" id="maab_id" min="0" onkeypress="javascript:return isNumber(event)" pattern="^(0|[1-9][0-9]*)$" title="Should contain numeric only">
                        <div id="maabstatus"></div>                  
                    </div>
          
                    <div class="form-group">
                     <label>Membership ID Effectivity:</label>

                        <input type="date" class="form-control" name="effectivity" id="effectivity" >
                     
                    </div>
                <div class="form-group">
                        <label>Blood Type:</label>
                       
                        <select class="form-control" id="bloodtype" name="bloodtype" autocomplete="off" >
                        <option  value="" disabled selected>Select Blood Type</option>
                        <option  value="Unidentified" >Unidentified</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        
                      </select>
                        
                 </div>
                 <div class="form-group">
                        <label>Date Last Donated</label>
                        <input type="date" name="date_donated" id="date_donated"  class="form-control form-control-line">
                </div>
                <div class="col-xs-12">
                        <hr><h4 style="text-align:center">Contact Person in Case of Emergency</h4></hr>
                </div>
                <div class="form-group">
                        <label>Contact Person: </label>
                        <input type="text" name="name" id="name"  class="form-control form-control-line" required>
                </div>
                <div class="form-group">
                        <label>Contact Number:</label>
                        <input type="text" name="contactnumber" id="contactnumber"  class="form-control form-control-line" onkeypress="javascript:return isNumber(event)" pattern="^[0-9]{10,12}$" title="Should contain 11 digits mobile number only" maxlength="11" required>
                </div>
                <div class="form-group">
                        <label>Relationship:</label>
                        <input type="text" name="relationship" id="relationship"  class="form-control form-control-line" required>
                </div>
                </div>
            </div>
            
        </div>

         <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_add_instructor" name="btn_add_instructor">Save Input</button>
            </div>
    </div>
  </div>
  </form>

</div>
';
?>