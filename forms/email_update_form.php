<div class="col-xs-12 col-md-6">
	<div class="card">
		<div class="card-header" data-background-color="green">
				<a href="#" class="exit_email_update"><i class="material-icons">exit_to_app</i></a>
        <h4 class="title">Update Your Email</h4>
		</div>
		<div class="card-content">
			<form action="../data/email_update.php" method="post" id="emailUpdate" enctype="application/x-www-form-urlencoded">
				<div class="row">
					<div class="">
            <div _ngcontent-c3="" class="form-group">
              <label _ngcontent-c3="" class="sr-only" for="input-email">New Email</label>
              <input _ngcontent-c3="" autofocus="" class="form-control form-control-lg first ng-pristine ng-invalid ng-touched email passup" id="input-email" name="email" placeholder="New Email" type="email" required="" minlength="4" maxlength="50">
              <!---->
              <!---->
            </div>

            <div _ngcontent-c3="" class="form-group">
              <label _ngcontent-c3="" class="sr-only" for="input-re-email">Confirm Email</label>
              <input _ngcontent-c3="" class="form-control form-control-lg last ng-untouched ng-pristine ng-invalid email passup" id="input-re-email" name="reMail" placeholder="Confirm Email" type="email" required="">
              <!---->
              <!---->
            </div>

            	<button _ngcontent-c3="" class="btn btn-hero-success btn-block" data-color="green" disabled="">
              	Update Email
            	</button>
						</div>
					</div>
				</form>
			</div>
		<div class="card-footer">	</div>
	</div>
</div>
<script src="../assets/js/ajax/email_update.js"></script>
