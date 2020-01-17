<?php  include_once ('header.php')?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
							
							<div class="alert alert-success" style="display: none">
    								<strong>Success!</strong> Successfully Saved.
  							</div>
							
							<div class="alert alert-danger" style="display: none">
							    <strong>Danger!</strong> Some Error Occured.
							</div>
							
							<form id="gatepassform" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3"><label class="form-control-label">Student Name</label></div>
									<div class="col-12 col-md-9">
								
										<select id="input-sid" name="sid"  class="form-control">
										<option value="0">Student Name</option>

										<?php foreach ($students as $arr) {?>
											<option value="<?php echo $arr->id; ?>"><?php echo $arr->full_name; ?></option>
										<?php } ?>
										</select>

										<small id="sidValidation" style="display: none; color: red" class="help-block form-text">Please Enter Student Id</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label class="form-control-label">Visitor Name</label></div>
									<div class="col-12 col-md-9">
										
										<select id="input-vid" name="vid" class="form-control">
										<option value="0">Visitor Name</option>

										<?php foreach ($visitors as $arr) {?>
											<option value="<?php echo $arr->id; ?>"><?php echo $arr->full_name; ?></option>
										<?php } ?>
										</select>
										<small id="vidValidation" style="display: none; color: red" class="help-block form-text">Please Enter Visitor Id</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-outtime" class="form-control-label">Out Time</label></div>
									<div class="col-12 col-md-9"><input type="datetime-local" id="input-outtime" name="outtime" placeholder="In Date/Time" class="form-control"><small id="outtimeValidation" style="display: none; color: red" class="help-block form-text">Please Enter Out Time</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-intime" class="form-control-label">In Time</label></div>
									<div class="col-12 col-md-9"><input type="datetime-local" id="input-intime" name="intime" placeholder="Out Date/Time" class="form-control"><small id="intimeValidation" style="display: none; color: red" class="help-block form-text">Please Enter In Time</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="select" class=" form-control-label">Reason</label></div>
									<div class="col-12 col-md-9">
										<select name="reason" id="reason" class="form-control">
											<option value="0">Please Enter Reason</option>
											<option value="6">Going Home</option>
											<option value="7">Going Out</option>
											<option value="8">Sports Out</option>
											<option value="9">Other</option>
										</select>
										<small id="gradeValidation" style="display: none; color: red" class="help-block form-text">Please Select Grade</small>
									</div>
								</div>
								<!-- <div class="row form-group">
									<div class="col col-md-3"><label for="input-visitor-name" class=" form-control-label">Visitor name</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-visitor-name" name="visitor-name" placeholder="Visitor name" class="form-control"><small class="help-block form-text"></small></div>
								</div> -->
							</form>
						</div>
						<div class="card-footer">
							<input type="submit" id="submitGatePassFormSubmit" class="btn btn-primary btn-sm"></input>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<script>
	const _$gatepass_form = $('#gatepassform');

	$(document).ready(function(){
		$("#submitGatePassFormSubmit").click(function(e){
			var objData = {};
			e.preventDefault();
			var valid = true;
			$.each(_$gatepass_form.serializeArray(), function(_, kv) {
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
					url: "<?php echo site_url('index.php/GatePass/addGatePassRecord'); ?>",
					data: objData,
					success: function(response){
						_$gatepass_form.trigger("reset");
						$(".alert-danger").css('display', 'none');
						$(".alert-success").css('display', 'block');
					},
					error: function(e) {
						$(".alert-danger").css('display', 'block');
						$(".alert-success").css('display', 'none');
					}
				});
			}else {
				$(".alert-danger").css('display', 'block');
				$(".alert-success").css('display', 'none');
			}
		});
	});
</script>
