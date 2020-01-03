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
								<div style="margin-top: :50px">
									<select name="cars">
										<option value="volvo">All</option>
										<option value="volvo">Accept</option>
										<option value="saab">Pending</option>
										<option value="fiat">Reject</option>
										</option>
									</select>
								</div>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
											<th>Admission No</th>
                                            <th>Name</th>
                                            <th>Grade</th>
                                            <th>Status</th>
											<th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>15862</td>
                                            <td>Tiger Nixon</td>
                                            <td>06</td>
                                            <td>Accept</td>
                                            <td><input type="button" value="view"></td>
                                        </tr>
										<tr>
											<td>14589</td>
											<td>Stefan</td>
											<td>06</td>
											<td>Accept</td>
											<td><input type="button" value="view"></td>
										</tr>
										<tr>
											<td>16985</td>
											<td>Nixon</td>
											<td>06</td>
											<td>Reject</td>
											<td><input type="button" value="view"></td>
										</tr>
										<tr>
											<td>19852</td>
											<td>Tiger</td>
											<td>07</td>
											<td>Accept</td>
											<td><input type="button" value="view"></td>
										</tr>
										<tr>
											<td>12895</td>
											<td>Kevin</td>
											<td>06</td>
											<td>Reject</td>
											<td><input type="button" value="view"></td>
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
