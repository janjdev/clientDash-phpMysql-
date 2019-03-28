<div class="col-xs-9 col-md-11">
	<div class="card">
		<div class="card-header" data-background-color="orange">
				<a href="#" class="exit_avatar_upload"><i class="material-icons">exit_to_app</i></a>
        <h4 class="title">Change Your Avatar Image</h4>
			<!--<div class="ct-chart" id="update-avatar-form"></div>-->
		</div>
		<div class="card-content">
			<form action="../data/avatar_update.php" method="post" id="avatarUpdate" enctype="multipart/form-data">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group label-floating">
							<label class="">Choose a profile image</label>
								<input type="file" name="update_avatar" id="update_avatar" class="form-control">
						</div>
						<input type="hidden" name="action" value="update_avatar">
						<a href="#" class="btn btn-primary btn-round" id="avatar_file"><i class="material-icons">add_a_photo</i></a>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="stats file-types">
				<i class="material-icons">attachment</i> <small>png, jpg, gif, svg</small>
			</div>
		</div>
	</div>
</div>
<script src="../assets/js/ajax/avatar_update.js"></script>
