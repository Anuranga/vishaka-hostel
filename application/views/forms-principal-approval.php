<?php  include_once ('header.php')?>

<body>
<?php  include_once ('LeftPanel.php')?>

<div id="right-panel" class="right-panel">

	<?php  include_once ('sub-header.php')?>

	<div class="content">
		<div class="animated fadeIn">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<strong class="card-title">Pending student list</strong>
						</div>
						<div class="card-body">
							<table id="bootstrap-data-table" class="table table-striped table-bordered">
								<thead>
								<tr>
									<th>Student name</th>
									<th>Out Date/Time</th>
									<th>In Date/Time</th>
									<th>Reason</th>
									<th>Status</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Airi Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>$162,700</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Brielle Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>$372,000</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Herrod Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>$137,500</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Rhona Davidson</td>
									<td>Integration Specialist</td>
									<td>Tokyo</td>
									<td>$327,900</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Colleen Hurst</td>
									<td>Javascript Developer</td>
									<td>San Francisco</td>
									<td>$205,500</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Sonya Frost</td>
									<td>Software Engineer</td>
									<td>Edinburgh</td>
									<td>$103,600</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Jena Gaines</td>
									<td>Office Manager</td>
									<td>London</td>
									<td>$90,560</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Quinn Flynn</td>
									<td>Support Lead</td>
									<td>Edinburgh</td>
									<td>$342,000</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Charde Marshall</td>
									<td>Regional Director</td>
									<td>San Francisco</td>
									<td>$470,600</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Haley Kennedy</td>
									<td>Senior Marketing Designer</td>
									<td>London</td>
									<td>$313,500</td>
									<td>$162,700</td
								</tr>
								<tr>
									<td>Tatyana Fitzpatrick</td>
									<td>Regional Director</td>
									<td>London</td>
									<td>$385,750</td>
									<td>$162,700</td>
								</tr>

								<tr>
									<td>Gloria Little</td>
									<td>Systems Administrator</td>
									<td>New York</td>
									<td>$237,500</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Bradley Greer</td>
									<td>Software Engineer</td>
									<td>London</td>
									<td>$132,000</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Dai Rios</td>
									<td>Personnel Lead</td>
									<td>Edinburgh</td>
									<td>$217,500</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Jenette Caldwell</td>
									<td>Development Lead</td>
									<td>New York</td>
									<td>$345,000</td>
									<td>$162,700</td>
								</tr>

								<tr>
									<td>Angelica Ramos</td>
									<td>Chief Executive Officer (CEO)</td>
									<td>London</td>
									<td>$1,200,000</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Gavin Joyce</td>
									<td>Developer</td>
									<td>Edinburgh</td>
									<td>$92,575</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Jennifer Chang</td>
									<td>Regional Director</td>
									<td>Singapore</td>
									<td>$357,650</td>
									<td>$162,700</td>
								</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div><!-- .animated -->
	</div><!-- .content -->


	<div class="clearfix"></div>

	<?php  include_once ('footer.php')?>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>


<script src="<?php echo base_url(); ?>assets/js/lib/data-table/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>


</body>
</html>
