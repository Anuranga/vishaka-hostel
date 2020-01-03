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
                            <strong>New Inventory</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

								<div class="row form-group">
									<div class="col col-md-3"><label for="selectLg" class=" form-control-label">Grade</label></div>
									<div class="col-12 col-md-9">
										<select name="house" id="house" class="form-control">
											<option value="0">Select Grade</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
										</select>
										<small id="houseValidation" style="display: none; color: red" class="help-block form-text">Please Select Grade</small>
									</div>
								</div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Student name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="input-fullname" name="text-input" placeholder="Student name" class="form-control"><small class="form-text text-muted"></small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="input-nameInitials" class=" form-control-label">Out Date/Time</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="input-nameInitials" name="text-input" placeholder="Out Date/Time" class="form-control"><small class="form-text text-muted"></small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="input-date" class=" form-control-label">In Date/Time</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="input-date" name="input-" placeholder="In Date/Time" class="form-control"><small class="help-block form-text"></small></div>
                                </div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="password-input" class=" form-control-label">Sports name</label></div>
									<div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="Sports name" class="form-control"><small class="help-block form-text"></small></div>
								</div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reason</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="Reason" class="form-control"><small class="help-block form-text"></small></div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="input-admission" class=" form-control-label">Teacher in-charge Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="input-admission" name="password-input" placeholder="Teacher in-charge Name" class="form-control"><small class="help-block form-text"></small></div>
                                </div>

                            </form>
                        </div>
						<div class="card-footer">
							<input type="submit" id="submitAdmission" class="btn btn-primary btn-sm"></input>
							<input type="reset" class="btn btn-danger btn-sm"></input>
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
