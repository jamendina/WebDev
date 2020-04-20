<!-- ========= Accept Pending Account MODAL ======== -->
<?php 

echo 
'<div id="accept'.$row['a_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
            <div class="modal-header">
                  <h5 class="modal-title">Account Approval</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        <div class="modal-body" style="width: 100%;">
            
            <div class="row" >
            
                <div class="col-md-12">
                <input type="hidden" value="'.$row['a_id'].'" name="hidden_id" id="hidden_id"/>
                <div class="col-md-12">
                        <select  name="edit_status" id="edit_status" class="form-control input-sm" required="true" autocomplete="off">
                        <option disabled>Select</option>
                        <option value="Active">Approved</option>
                        <option value="Disapproved">Disapproved</option>
                    </select>
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn waves-effect waves-light pull-right" data-dismiss="modal">No</button>
            <button type="submit" class="btn waves-effect waves-light btn-danger pull-right" id="btn_accept" name="btn_accept">Save</button>
        </div>
    </div>
  </div>
  </form>
</div>'
?>

