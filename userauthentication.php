<!-- ========= EDIT Authentication MODAL ======== -->
<?php echo 
'<div id="auth'.$row['ui_id'].'" class="modal fade">

<form method="post">
   <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><center>User Authentication</center></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                    
                    <div class="form-group">
                        <label>Confirm Password :</label>
                        <input required name="auth_pass" id="auth_pass" class="form-control input-sm" type="password" placeholder="Enter Password"></input>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" id="btn_auth" name="btn_auth">Confirm</button>
                    </div>
            </div> 
          <!-- /.modal-content -->
        </div>
    </form>
</div>';
?>