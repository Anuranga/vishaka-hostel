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
									<div class="col col-md-3"><label for="input-date" class=" form-control-label">Date of the Payment</label></div>
									<div class="col-12 col-md-9"><input type="date" id="input-date" name="date" placeholder="Date of the Payment" class="form-control"><small id="dateValidation" style="display: none; color: red" class="help-block form-text">Please Enter Date</small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-month" class=" form-control-label">Payment month</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-month" name="month" placeholder="Payment month" class="form-control"><small id="monthValidation" style="display: none; color: red" class="help-block form-text">Please Enter Month</small></div>
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
					alert(x);
					var id = kv.name+"Validation";
					$("#"+id).show();
					valid = false;
					alert("invalid");
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
