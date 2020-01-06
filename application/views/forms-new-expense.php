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
                            <strong>New Expense</strong>
                        </div>
                        <div class="card-body card-block">
                            <form id="expenses_form" class="form-horizontal">

								<div class="row form-group">
									<div class="col col-md-3"><label for="input-nameInitials" class=" form-control-label">Date</label></div>
									<div class="col-12 col-md-9"><input type="date" id="input-date" name="date" placeholder="Date" class="form-control"><small class="form-text text-muted"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="selectLg" class=" form-control-label">Expense Category</label></div>
									<div class="col-12 col-md-9">
										<select name="category" id="category" class="form-control">
											<option value="0">Goods</option>
											<option value="1">Travel</option>
											<option value="2">Maintains</option>
											<option value="3">New purchase</option>
											<option value="2">Other</option>
										</select>
										<small id="categoryValidation" style="display: none; color: red" class="help-block form-text">Please Select expense Category</small>
									</div>
								</div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="input-description" class="form-control-label">Description</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="input-description" name="description" placeholder="Description" class="form-control"><small class="form-text text-muted"></small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="input-amount" class="form-control-label">Amount</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="input-amount" name="amount" placeholder="Amount" class="form-control"><small class="help-block form-text"></small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="input-receipt" class="form-control-label">Receipt</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="input-receipt" name="receipt" placeholder="Receipt" class="form-control"><small class="help-block form-text"></small></div>
                                </div>


                            </form>
                        </div>
						<div class="card-footer">
							<input type="submit" id="submit_expenses" class="btn btn-primary btn-sm"></input>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
 <script>
	 const _$expenses_form = $('#systemuserform');
	 $(document).ready(function(){
		 $("#submit_expenses").click(function(e){
			 var objData = {};
			 e.preventDefault();
			 var valid = true;
			 $.each(_$expenses_form.serializeArray(), function(_, kv) {
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
						 _$expenses_form.trigger("reset");
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
