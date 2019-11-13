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
                                <strong>Add User</strong>
                            </div>

                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="row form-group">
										<div class="col col-md-3"><label class=" form-control-label">Position</label></div>
										<div class="col col-md-9">
											<div class="form-check-inline form-check">
												<label for="inline-radio1" class="form-check-label ">
													<input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Staff
												</label>
												<label for="inline-radio2" class="form-check-label ">
													<input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Student
												</label>

											</div>
										</div>
									</div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Full name</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Full name" class="form-control"><small class="help-block form-text"></small></div>
                                    </div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="email-input" class=" form-control-label">Date of birth</label></div>
										<div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="dd/mm/yyyy" class="form-control"><small class="help-block form-text"></small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Mobile number</label></div>
										<div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Mobile number" class="form-control"><small class="form-text text-muted"></small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="email-input" class=" form-control-label">Address</label></div>
										<div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Address" class="form-control"><small class="help-block form-text"></small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
										<div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Email" class="form-control"><small class="help-block form-text"></small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="file-input" class=" form-control-label">Bank Pay Slip</label></div>
										<div class="col-12 col-md-9"><input type="file" id="filePaySlip" name="filePaySlip" class="form-control-file"></div>
									</div>
								</form>
							</div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
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
