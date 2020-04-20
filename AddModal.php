<!--ADD STAFF MODAL-->
<?php echo '
<div id="addStaff" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Staff</h4>
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
                        <label>Contact Person: </label>
                        <input type="text" name="name" id="name"  class="form-control form-control-line" required>
                </div>
                </div>
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_staff" name="btn_add_staff" >Add Staff</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
echo'<!--ADD  POSITION-->
<div id="addPos" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Position</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Position :</label>
                        <input required name="position" id="position" class="form-control input-sm" type="text" placeholder="Input Position"  />
                    </div>
                </div>    
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_pos" name="btn_add_pos" >Add</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
echo'<!--ADD  CATEGORY-->
<div id="addCategory" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category Name :</label>
                        <input required name="cat_name" id="cat_name" class="form-control input-sm" type="text" placeholder="Input Name"  />
                    </div>
                    <div class="form-group">
                        <label>Category Color :</label>
                        <input required name="color" id="color" class="form-control input-sm" type="color" placeholder="Input Name"  />
                    </div>
                </div>    
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_cat" name="btn_add_cat" >Add</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
echo'<!--ADD  SPECIALIZATION-->
<div id="addSpec" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Specialization</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Specialization :</label>
                        <input required name="specialization" id="specialization" class="form-control input-sm" type="text" placeholder="Input Specialization"  />
                    </div>
                </div>    
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_spec" name="btn_add_spec" >Add</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
echo'<!--ADD  SERVICES-->
<div id="addServices" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Services</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Services :</label>
                        <input required name="services_title" id="services_title" class="form-control input-sm" type="text" placeholder="Input Services"  />
                    </div>
                </div>    
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_ser" name="btn_add_ser" >Add</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
echo'<!--ADD  SCHOOL-->
<div id="addSchool" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add School</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                    <div class="form-group">
                        <label>School :</label>
                        <input required name="school_name" id="school_name" class="form-control input-sm" type="text" placeholder="Input School Name"  />
                    </div>
                </div>    
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_sch" name="btn_add_sch" >Add</button>
        </div>
    </div>
  </div>
  </form>

</div>
';
echo'<!--ADD  COMPANY-->
<div id="addCompany" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Company</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Company :</label>
                        <input required name="company_name" id="company_name" class="form-control input-sm" type="text" placeholder="Input Company Name"  />
                    </div>
                </div>    
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_com" name="btn_add_com" >Add</button>
        </div>
    </div>
  </div>
  </form>

</div>
';

echo'<!--ADD  INSTRUCTOR-->
<div id="addInstructor" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Instructor</h4>
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

        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_instructor" name="btn_add_instructor" >Add Instructor</button>
        </div>
    </div>
  </div>
  </form>

</div>
';echo'<!--ADD  TRAINEE-->
<div id="addTrainee" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Trainee</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
                <div class="col-md-12">
                 
                     <div class="form-group">
                     <label>Account Type:</label>

                         <select class="form-control" id="a_type" name="a_type" required autocomplete="off" >
                        <option  value="" disabled selected>Type of Account</option>
                        <option value="Volunteer">Volunteer</option>
                        <option value="Non-Volunteer">Non-Volunteer</option>
                        </select>
                        
                     
                    </div>
                    <div class="form-group">
                        <label>Username :</label>
                        <input required name="user" id="user" class="form-control input-sm" type="text" placeholder="Input Username"  />
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
                                            }echo '
                        
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


        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_add_trainee" name="btn_add_trainee" >Add Trainee</button>
        </div>
    </div>
  </div>
  </form>

</div>
'; echo '<!-- ========= ADD Training MODAL ======== -->
<div id="addAT" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Attended Training</h4>
        </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
            
                <div class="col-md-12">
                <input type="hidden" value="'.$_SESSION['uiid'].'" name="hidden_id" id="hidden_id"/>
                    <div class="form-group">
                        <label>Training/Event Title :</label>
                        <input required name="title" id="title" class="form-control input-sm" type="text" placeholder="Input Title" />
                    </div>
                    <div class="form-group">
                        <label>Date :</label>
                        <input required name="date" id="date" class="form-control input-sm" type="date"/>
                    </div>
                    <div class="form-group">
                        <label>Venue :</label>
                        <input required name="venue" id="venue" class="form-control input-sm" type="text" placeholder="Input Place of Venue" />
                    </div>
                    <div class="form-group">
                        <label>Chapter :</label>
                        <input required name="chapter" id="chapter" class="form-control input-sm" type="text" placeholder="Chapter Where Training is Conducted" />
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_addATs" name="btn_addATs" >Add</button>
        </div>
    </div>
  </div>
  </form>
</div>