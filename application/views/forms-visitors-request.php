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
							<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

								<div class="row form-group">
									<div class="col col-md-3"><label class=" form-control-label">Student ID</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-fullname" name="text-input" placeholder="Student ID" class="form-control"><small class="form-text text-muted"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-nameInitials" class=" form-control-label">Visitor ID</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-nameInitials" name="text-input" placeholder="Visitor ID" class="form-control"><small class="form-text text-muted"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="input-date" class=" form-control-label">In Time</label></div>
									<div class="col-12 col-md-9"><input type="text" id="input-date" name="input-" placeholder="In Time" class="form-control"><small class="help-block form-text"></small></div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="password-input" class=" form-control-label">Out Time</label></div>
									<div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="Out Time" class="form-control"><small class="help-block form-text"></small></div>
								</div>

							</form>
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