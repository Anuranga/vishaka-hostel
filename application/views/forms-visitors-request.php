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
							<strong>Request form</strong>
						</div>
						<div class="card-body card-block">
							<form id="visitor_form" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Student ID</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-sid" name="sid" placeholder="Student ID" class="form-control"><small id="sidValidation" style="display: none; color: red" class="help-block form-text">Please Enter Student Id</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Visitor Full Name</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-full-name" name="fullname" placeholder="Visitor Full Name" class="form-control"><small id="fullnameValidation" style="display: none; color: red" class="help-block form-text">Please Enter Full Name</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Mobile</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-mobile" name="mobile" placeholder="Mobile" class="form-control"><small id="mobileValidation" style="display: none; color: red" class="help-block form-text">Please Enter Mobile</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Visitor Address</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-address" name="address" placeholder="Visitor Address" class="form-control"><small id="addressValidation" style="display: none; color: red" class="help-block form-text">Please Enter Address</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Visitor Relationship</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-relationship" name="relationship" placeholder="Visitor Relationship" class="form-control"><small id="relationshipValidation" style="display: none; color: red" class="help-block form-text">Please Enter Relationship</small></div>
								</div>
							</form>
						</div>
						<div class="card-footer">
							<input type="submit" id="visitorsFormSubmit" class="btn btn-primary btn-sm"></input>
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
	const _$visitor_form = $('#visitor_form');
	$(document).ready(function(){
		$("#visitorsFormSubmit").click(function(e){
			var objData = {};
			e.preventDefault();
			var valid = true;
			$.each(_$visitor_form.serializeArray(), function(_, kv) {
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
					url: "<?php echo site_url('index.php/visitors/addVisitor'); ?>",
					data: objData,
					success: function(response){
						alert('success');
						_$visitor_form.trigger("reset");
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
