<!--ASSIGN INSTRUCTOR-->
<?php echo 
'<div id="assign'.$row['te_id'].'" class="modal fade">
<form method="post" onsubmit="return checkEmail2(this);">
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
              <h5 class="modal-title">Assign Instructor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
            
                <div class="col-md-12">
                <input type="hidden" value="'.$row['te_id'].'" name="hidden_id" id="hidden_id"/>
                    
                    <div class="form-group">
                        <label>Select Instructor:</label>
                        <select name="instructor" id="instructor" value="" class="form-control input-sm" required="true">
                        <option disabled selected>Assign Optional</option>';
                                          $instructor= mysqli_query($con, "SELECT *, ta.a_id as a_id from tblaccount ta
                                            left join tbluserinfo tu ON ta.ui_id = tu.ui_id
                                            where u_class ='Instructor' and stat_id = '1'");
                                            
                                            while($row = mysqli_fetch_array($instructor))
                         {
                                                echo '
                                                    
                                                    
                                                    <option value="'.$row['a_id'].'"> '.$row['fn'].','.$row['ln'].'</option>';
                                                    
                                                        echo'
                                                    
                                                

                                                ';
                                            }
                        echo '
                        </select>
                    </div>
                    
                    
             
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>  
            <button type="submit" class="btn waves-effect waves-light btn-success pull-right" id="btn_assign_ins" name="btn_assign_ins" >Save</button>
        </div>
    </div>
  </div>
  </form>
</div>'
?>