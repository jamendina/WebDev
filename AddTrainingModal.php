<!-- ========= ADD Training MODAL ======== -->
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