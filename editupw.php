<!-- ========= EDIT STAFF USERNAME / PASSWORD MODAL ======== -->
<?php echo 
'<div id="editupw'.$row['ui_id'].'" class="modal fade">

<form method="post">
   <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">User Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="hidden" value="'.$row['ui_id'].'" name="hidden_id" id="hidden_id"/>
                    
                    <div class="form-group">
                        <label>Username :</label>
                        <input required name="edit_user" id="edit_user" class="form-control input-sm" type="text" placeholder="Staff Username" value="'.$row['user'].'"></input>
                    </div>
                    <div class="form-group">
                        <label>Old Password :</label>
                        <input required name="edit_oldpass" id="edit_oldpass" class="form-control input-sm" type="password" placeholder="Enter Old Password"></input>
                    </div>
                    <div class="form-group">
                        <label>New Password :</label>
                        <input required name="edit_newpass" id="edit_newpass" class="form-control input-sm" type="password" placeholder="Enter New Password"></input>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" id="edit_upw" name="edit_upw" >Save changes</button>
                    </div>
            </div> 
          <!-- /.modal-content -->
        </div>
    </form>
</div>';
?>