<!--ADD  SPECIALIZATION-->
<div id="addSpecialization" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-md" >
    <div class="modal-content" >
        <div class="modal-header">
              <h5 class="modal-title">Add Specialization</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

       <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_add_spec" name="btn_add_spec">Save Input</button>
            </div>
    </div>
  </div>
  </form>

</div>