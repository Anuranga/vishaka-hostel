<?php  include_once ('header.php')?>
<body>
<?php  include_once ('LeftPanel.php')?>

<div id="right-panel" class="right-panel">

	<?php  include_once ('sub-header.php')?>

	<div class="content">
		<div class="animated fadeIn">

			<div class="row">

				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<strong>Gate Pass Request Form</strong>
						</div>
						<div class="card-body card-block">
							<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Student ID</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-fullname" name="text-input" placeholder="Student name" class="form-control"><small class="form-text text-muted"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Visitor ID</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-fullname" name="text-input" placeholder="Visitor ID" class="form-control"><small class="form-text text-muted"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-nameInitials" class=" form-control-label">In Time</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-nameInitials" name="text-input" placeholder="Out Date/Time" class="form-control"><small class="form-text text-muted"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-date" class=" form-control-label">Out Time</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-date" name="input-" placeholder="In Date/Time" class="form-control"><small class="help-block form-text"></small></div>
								</div>

								<div class="row form-group">
									<div class="col col-md-3"><label for="select" class=" form-control-label">Reason</label></div>
									<div class="col-12 col-md-9">
										<select name="grade" id="grade"  class="form-control">
											<option value="0">Please Enter Reason</option>
											<option value="6">Going Home</option>
											<option value="7">Going Out</option>
											<option value="8">Sports Out</option>
											<option value="9">Other</option>
										</select>
										<small id="gradeValidation" style="display: none; color: red" class="help-block form-text">Please Select Grade</small>
									</div>
								</div>

								<div class="row form-group">
									<div class="col col-md-3"><label for="input-admission" class=" form-control-label">Visitor name</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-admission" name="password-input" placeholder="Visitor name" class="form-control"><small class="help-block form-text"></small></div>
								</div>

							</form>
						</div>
						<div class="card-footer">
							<input type="submit" id="submitAdmission" class="btn btn-primary btn-sm"></input>

						</div>
					</div>

				</div>

			</div>

		</div>

	</div>
</div>

<div class="clearfix"></div>

<?php  include_once ('footer.php')?>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>


</body>
</html>
