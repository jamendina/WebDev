<!--ADD  POSITION-->
<div id="addPosition" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
         <div class="modal-header">
              <h5 class="modal-title">Add Position</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

       <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_add_pos" name="btn_add_pos">Save Input</button>
            </div>
    </div>
  </div>
  </form>

</div>