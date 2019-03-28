
<div class="col-xs-12 col-md-6">
	<div class="card">
		<div class="card-header" data-background-color="purple">
				<a href="#" class="exit_pass_update"><i class="material-icons">exit_to_app</i></a>
        <h4 class="title">Change Your Password</h4>
			<!--<div class="ct-chart" id="update-avatar-form"></div>-->
		</div>
		<div class="card-content">
			<form action="../data/pass_update.php" method="post" id="passwordUpdate" enctype="application/x-www-form-urlencoded">
				<div class="row">
					<div class="">
            <div _ngcontent-c3="" class="form-group">
              <label _ngcontent-c3="" class="sr-only" for="input-password">New Password</label>
              <input _ngcontent-c3="" autofocus="" class="form-control form-control-lg first ng-pristine ng-invalid ng-touched pass passup" id="input-password" name="password" placeholder="New Password" type="password" required="" minlength="4" maxlength="50">
              <!---->
              <!---->
            </div>

            <div _ngcontent-c3="" class="form-group">
              <label _ngcontent-c3="" class="sr-only" for="input-re-password">Confirm Password</label>
              <input _ngcontent-c3="" class="form-control form-control-lg last ng-untouched ng-pristine ng-invalid pass passup" id="input-re-password" name="rePass" placeholder="Confirm Password" type="password" required="">
              <!---->
              <!---->
            </div>

            <button _ngcontent-c3="" class="btn btn-hero-success btn-block" data-color="purple" disabled="">
              Change password
            </button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer">
		</div>
	</div>
</div>
<script src="../assets/js/ajax/pass-update.js"></script>
