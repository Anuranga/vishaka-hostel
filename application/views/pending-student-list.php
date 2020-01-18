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
                                <div class="pull-right">
                                    <a class="color-red" href="<?php echo base_url(); ?>index.php/admission/pdf_gen">Save as PDF</a>
                                </div>
                            </div>
                            <div class="alert alert-success" style="display: none">
    								<strong>Success!</strong> Successfully Saved.
  							</div>
							
							<div class="alert alert-danger" style="display: none">
							    <strong>Danger!</strong> Some Error Occured.
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
									<?php foreach ($list as $arr) {
                                        $status = ['Pending', 'Approved', 'Rejected'];
                                        ?>
                                        <tr>
											<td><?php echo $arr->id; ?></td>
											<td><?php echo $arr->full_name; ?></td>
											<td><?php echo $arr->grade; ?></td>
											<td><?php echo $status[$arr->status]; ?></td>
											<td><span style="display:none" id="sid"><?php echo $arr->id; ?></span>
                                            <select name="status" onchange="statusChange(this, <?php echo $arr->id; ?>)" id="statusId" class="form-control">
                                                <option <?php if($arr->status == 0){ echo "selected"; } ?>  value="0">Pending</option>
                                                <option <?php if($arr->status == 1){ echo "selected"; } ?> value="1">Approved</option>
                                                <option <?php if($arr->status == 2){ echo "selected"; } ?> value="2">Rejected</option>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

function statusChange(a, b){
    var objData = {};
    objData['status'] = a.value;
    objData['sid'] = b;
    $(".alert-danger").css('display', 'none');
    $(".alert-success").css('display', 'none');

    $.ajax({
        type: "POST",
        url: "<?php echo site_url('index.php/student/studentStatusChange'); ?>",
        data: objData,
        success: function(response){
            $(".alert-danger").css('display', 'none');
            $(".alert-success").css('display', 'block');
        },
        error: function(e) {
            $(".alert-danger").css('display', 'block');
            $(".alert-success").css('display', 'none');
            console.log(e.status);
        }
    });
}
</script>
</body>

</html>
