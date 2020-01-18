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
                                <strong class="card-title">Gate Pass list</strong>
                                <div class="pull-right">
                                    <a class="color-red" href="<?php echo base_url(); ?>index.php/gatepass/pdf_gen">Save as PDF</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
											<th>Reason</th>
                                            <th>Out time</th>
                                            <th>In time</th>
                                            <th>Status</th>
                                            <th>Approve</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach ($list as $arr) {
                                        $statusArr = ['Pending', 'Active', 'Rejected'];
                                        ?>
										<tr id=<?php echo $arr->id; ?>>
											<td><?php echo $arr->sid; ?></td>
											<td><?php echo $arr->full_name; ?></td>
											<td><?php echo $arr->mobile; ?></td>
											<td><?php echo $arr->reason; ?></td>
											<td><?php echo $arr->out_time; ?></td>
											<td><?php echo $arr->in_time; ?></td>
                                            <td><?php echo $statusArr[$arr->status]; ?></td>
											<td>
                                            <select id="input-sid" name="sid"  class="form-control">
										        <option value="1">Approve</option>
                                                <option value="2">Reject</option>
										    </select>
                                            </td>
										</tr>
									<?php } ?>
                                    </tbody>
                                </table>
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
    <script>
        function update(id){
                var objData = {};
                objData['id'] = id;
                objData['status'] = 1;
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('index.php/GatePass/gatePassStatusChange'); ?>",
                        data: objData,
                        success: function(response){
                            alert('success');
                            //_$gatepass_form.trigger("reset");
                            console.log(response);
                        },
                        error: function(e) {
                            alert(e);
                            console.log(e.status);
                        }
                    });
            }
    </script>
</body>
</html>
