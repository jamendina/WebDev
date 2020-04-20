<!--ADD STAFF MODAL-->
<?php echo '
<div id="addStaff" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
              <h5 class="modal-title">Add Staff Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                 <div class="form-group">
                    <label>Positon :</label>
                       <select name="pos_title" id="pos_title"  class="form-control input-sm" required="true" autocomplete="off">  
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
                       <select name="services_title" id="services_title"  class="form-control input-sm" required="true" autocomplete="off">  
                       <option value="" disabled selected>Services</option>
                    ';
                                          $pos = mysqli_query($con, "SELECT * from tblservices");
                                            while($row = mysqli_fetch_array($pos))
                         {
                                                echo '
                                               
                                                    <option value="'.$row['services_title'].'"> '.$row['services_title'].'</option>';
                                                    
                                                        echo'
                                                    
                                                

                                                ';
                                            }echo '
                                            </select>
                        
                        
                    </div>
                    <div class="form-group">
                        <label>Username :</label>
                        <input required name="user" id="user" class="form-control input-sm" type="text" placeholder="Input Username" />
                        <div id="userstatus"></div>
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
                        <label>Last Name :</label>
                        <input required name="ln" id="ln" class="form-control input-sm" type="text" placeholder="Input Last Name" onKeyPress="return ValidateAlpha(event);"/>
                    </div>

          <div class="form-group">
                     <label>Type of Membership:</label>

                         <select class="form-control" name="maabtype_id" id="maabtype_id" autocomplete="off" >
                        <option  value="" disabled selected>MAAB Type</option>
                        <option value="N/A">N/A</option>
                        <option value="1">Classic</option>
                        <option value="2">Bronze</option>
                        <option value="3">Platinum</option>
                        <option value="4">Gold</option>
                        <option value="5">Senior-Plus</option>
                        
                      </select>
                        
                     
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
                <div class="col-xs-12">
                        <hr><h4 style="text-align:center">Contact Person in Case of Emergency</h4></hr>
                </div>
                <div class="form-group">
                       <label for="inputName">Contact Person<b style="color: red;">*</b></label>
                         <input type="text" name="name" id="name" required class="form-control"/>
                </div>
                <div class="form-group">
                         <label for="inputName">Contact Number<b style="color: red;">*</b></label>
                             <input  type="text" name="contactnumber" id="contactnumber" required  class="form-control"/>
                </div>
                 <div class="form-group">
                          <label for="inputName">Relationship to the Person<b style="color: red;">*</b></label>
                          <input  type="text" name="relationship" id="relationship" required class="form-control"/>
                </div>
                </div>

            </div>
            
        </div>

        <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_add_staff" name="btn_add_staff">Save Input</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
?>