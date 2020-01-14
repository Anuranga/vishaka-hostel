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
							<strong>Payment Form</strong>
						</div>
						<div class="card-body card-block">
							<form id="paymentform" class="form-horizontal">

								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Student ID</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-sid" name="sid" placeholder="Student ID" class="form-control"><small id="sidValidation" style="display: none; color: red" class="help-block form-text">Please Enter Student Id</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="input-date" class=" form-control-label">Date of the Payment</label>
									</div>
									<div>
									<input style="margin-left: 15px" type="text" id="datepicker" width="276" name="date" placeholder="Date of the Payment" class="form-control">
									<small id="dateValidation" style="display: none; color: red" class="help-block form-text">Please Enter Date</small>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-month" class=" form-control-label">Payment month</label></div>
									<div class="col-12 col-md-9">
									<select id="input-month" name="month" class="form-control">
										<option value="">Select Month</option>'
										<option value="January">January</option>'
										<option value="February">February</option>
										<option value="March">March</option>
										<option value="April">April</option>
										<option value="May">May</option>
										<option value="June">June</option>
										<option value="July">July</option>
										<option value="August">August</option>
										<option value="September">September</option>
										<option value="October">October</option>
										<option value="November">November</option>
										<option value="December">December</option>
                                    </select>
									<small id="monthValidation" style="display: none; color: red" class="help-block form-text">Please Enter Month</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-date" class=" form-control-label">Invoice No</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-invoice" name="invoice" placeholder="Invoice No" class="form-control"><small id="invoiceValidation" style="display: none; color: red" class="help-block form-text">Please Enter Invoice Number</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="file-input" class=" form-control-label">Bank Pay Slip</label></div>
									<div class="col-12 col-md-9"><input type="file" id="filePaySlip" name="filePaySlip" class="form-control-file"></div>
								</div>
								<div class="clearfix">
									<div class="card-footer">
										<input type="submit" id="paymentFormSubmit" class="btn btn-primary btn-sm"></input>
									</div>
								</div> 
<?php  include_once ('footer.php')?>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
</body>
</html>

<script>
	const _$payment_form = $('#paymentform');
	$(document).ready(function(){
		$("#paymentFormSubmit").click(function(e){
			var objData = {};
			e.preventDefault();
			var valid = true;
			$.each(_$payment_form.serializeArray(), function(_, kv) {
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

			console.log(objData);
			if(valid){
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('index.php/payments/addPayment'); ?>",
					data: objData,
					success: function(response){
						alert('success');
						_$payment_form.trigger("reset");
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
	$('#datepicker').datepicker({
		uiLibrary: 'bootstrap4'
	});
</script>

