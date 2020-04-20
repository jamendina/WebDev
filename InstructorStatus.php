<!-- ========= INSTRUCTOR MODAL ======== -->
<?php 

echo 
'<div id="InstructorStatus'.$row['ui_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
              <h5 class="modal-title">Instructor Status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
            
                <div class="col-md-12">
                <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                
                <div class="col-md-12">
                    <label>Instructor Status</label>
                    <select  name="edit_status" id="edit_status" class="form-control input-sm" required="true" autocomplete="off">
                        <option disabled>Select Status</option>
                       ';
                                          $stat = mysqli_query($con, "SELECT * from tblstat where status != 'Disapproved' and status != 'Cancelled' and status != 'Standby' ");
                                            while($row_stat = mysqli_fetch_array($stat))
                                            {
                                                 if($row['stat_id'] == $row_stat['stat_id'])
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['stat_id'].'" selected="selected">'.$row_stat['status'].'</option>
                                                    ';
                                                 }
                                                 else
                                                 {
                                                    echo '
                                                    <option value="'.$row_stat['stat_id'].'">'.$row_stat['status'].'</option>
                                                    ';
                                                 }
                                            }
                        echo '


                    </select>
                </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_stat" name="btn_stat" >Save</button>
        </div>
    </div>
  </div>
  </form>
</div>'
?>

