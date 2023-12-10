<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Activate / Deactivate</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">STATUS:</label>
					</div>
					<div class="col-sm-10">
					   <select class="form-control" name="status"> 
                           <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?> (CURRENT)</option>
						   <option value="BANNED">BANNED</option>
						   <option value="VERIFIED">ACTIVATE</option>
						</select>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>