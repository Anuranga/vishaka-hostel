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
                                <form id="systemuserform" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="input-fname" class=" form-control-label">First name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="input-fname" name="fname" placeholder="First name" class="form-control"><small id="fnameValidation" style="display: none; color: red" class="help-block form-text">Please Enter First Name</small></div>
                                    </div>
									<div class="row form-group">
                                        <div class="col col-md-3"><label for="input-lname" class=" form-control-label">Last name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="input-lname" name="lname" placeholder="Last name" class="form-control"><small id="lnameValidation" style="display: none; color: red" class="help-block form-text">Please Enter Last Name</small></div>
                                    </div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="input-password" class=" form-control-label">Password</label></div>
										<div class="col-12 col-md-9"><input type="password" id="input-password" name="password" placeholder="Password" class="form-control"><small id="passwordValidation" style="display: none; color: red" class="help-block form-text">Please Enter Date of birth</small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="input-cpassword" class=" form-control-label">Confirm Password</label></div>
										<div class="col-12 col-md-9"><input type="password" id="input-cpassword" name="cpassword" placeholder="Confirm Password" class="form-control"></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="input-mobile" class=" form-control-label">Mobile number</label></div>
										<div class="col-12 col-md-9"><input type="text" id="input-mobile" name="mobile" placeholder="Mobile number" class="form-control"><small id="mobileValidation" style="display: none; color: red" class="help-block form-text">Please Enter Mobile number</small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="input-address" class=" form-control-label">Address</label></div>
										<div class="col-12 col-md-9"><input type="email" id="input-address" name="address" placeholder="Address" class="form-control"><small id="addressValidation" style="display: none; color: red" class="help-block form-text">Please Enter Address</small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="input-email" class=" form-control-label">Email</label></div>
										<div class="col-12 col-md-9"><input type="email" id="input-email" name="email" placeholder="Email" class="form-control"><small id="emailValidation" style="display: none; color: red" class="help-block form-text">Please Enter Address</small></div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3"><label for="select" class=" form-control-label">User Type</label></div>
										<div class="col-12 col-md-9">
											<select name="user-type" id="user-type" class="form-control">
												<option value="0">Please Enter User Type</option>
												<option value="1">Wader</option>
												<option value="2">Principle</option>
												<option value="3">Admin</option>
											</select>
											<small id="user-typeValidation" style="display: none; color: red" class="help-block form-text">Please Select User Type</small>
										</div>
									</div>
								</form>
							  </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="systemusersubmit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" id="reset" style="display: none" class="btn btn-danger btn-sm">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
<script>
	const _$systemuser_form = $('#systemuserform');
	$(document).ready(function(){
		$("#systemusersubmit").click(function(e){
			var objData = {};
			e.preventDefault();
			var valid = true;
			$.each(_$systemuser_form.serializeArray(), function(_, kv) {
				var x = kv.value;
				if (x == "" || x == 0) {
					var id = kv.name+"Validation";
					$("#"+id).show();
					valid = false;
				}else {
					if(valid){
						var id = kv.name+"Validation";
						$("#"+id).hide();
						valid = true;
					}
				}

				objData[kv.name] = kv.value;
			});

			if(valid){
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('index.php/users/addSystemUser'); ?>",
					data: objData,
					success: function(response){
						alert('success');
						_$systemuser_form.trigger("reset");
						console.log(response);
						/*$("#message").html(response);
                        $('#cartmessage').show();*/
					},
					error: function(e) {
						alert(e);
						console.log(e.status);
					}
				});
			}else {
				alert('Validation Failed');
			}
		});
	});
</script>
