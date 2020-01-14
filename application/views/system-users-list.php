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
                                <strong class="card-title">Users List</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
											<th>Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
											<th>Phone</th>
											<th>User Type</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach ($list as $arr) {
                                        $userType = ['Student', 'Admin', 'Warden', 'Principle', 'Security'];
                                        ?>
										<tr>
											<td><?php echo $arr->id; ?></td>
											<td><?php echo $arr->fname; ?></td>
											<td><?php echo $arr->lname; ?></td>
											<td><?php echo $arr->phone; ?></td>
											<td><?php echo $userType[$arr->user_type]; ?></td>
											<td><?php echo $arr->status; ?></td>
										</tr>
									<?php } ?>
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

    </div>

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
