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
                                <div class="row">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2">
                                        <select name="approval_status" onchange="approvalStatusChange(this)" class="form-control">
                                            <option value="All">All</option>
                                            <option value="0">Pending</option>
                                            <option value="1">Approved</option>
                                            <option value="2">Reject</option>
                                            </option>
                                        </select>
                                    </div>
                                </div>
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
                                            <th style="width: 150px;">Approve</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach ($list as $arr) {
                                        $statusArr = ['Pending', 'Approved', 'Rejected'];
                                        $reasonArr = ['Other', 'Going Home', 'Going Out', 'Sports Out'];
                                        ?>
										<tr id=<?php echo $arr->id; ?>>
											<td><?php echo $arr->id; ?></td>
											<td><?php echo $arr->full_name; ?></td>
											<td><?php echo $arr->mobile; ?></td>
											<td><?php echo $reasonArr[$arr->reason]; ?></td>
											<td><?php echo $arr->out_time; ?></td>
											<td><?php echo $arr->in_time; ?></td>
                                            <td id="demo<?php echo $arr->id; ?>"><?php echo $statusArr[$arr->status]; ?></td>
											<td>
                                            <select onchange="statusChange(this, <?php echo $arr->id; ?>)" id="input-sid" name="sid"  class="form-control">
                                                <option <?php if($arr->status == 0){ echo "selected"; } ?>  value="0">Pending</option>
                                                <option <?php if($arr->status == 1){ echo "selected"; } ?>  value="1">Approve</option>
                                                <option <?php if($arr->status == 2){ echo "selected"; } ?>  value="2">Reject</option>
										    </select>
                                            </td>
										</tr>
									<?php } ?>
                                    </tbody>
                                </table>
                                <p ></p>
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
        function statusChange(a, b){
            var objData = {};
            objData['status'] = a.value;
            objData['id'] = b;
            $(".alert-danger").css('display', 'none');
            $(".alert-success").css('display', 'none');
            var statusArray = ['Pending', 'Approved', 'Rejected'];
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('index.php/gatepass/gatePassStatusChange'); ?>",
                data: objData,
                success: function(response){
                    alert("Success ......!");
                    document.getElementById("demo"+b).innerHTML = statusArray[a.value];
                    $(".alert-danger").css('display', 'none');
                    $(".alert-success").css('display', 'block');
                },
                error: function(e) {
                    alert("Some Error Occured..!");
                    $(".alert-danger").css('display', 'block');
                    $(".alert-success").css('display', 'none');
                    console.log(e.status);
                }
            });
        }

        function approvalStatusChange(a){
            var objData = {};
            objData['status'] = a.value;

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('index.php/gatepass/gatePassListSelected'); ?>",
                data: objData,
                cache: false,
                success: function(data){

                    var result = JSON.parse(data);
                    if(result.length > 0) {

                        var manageStatus = getStatus();

                        var res = '';
                        var status = ['Pending', 'Approved', 'Rejected'];
                        var reasonArr = ['Other', 'Going Home', 'Going Out', 'Sports Out'];

                        $.each(result, function (key, value) {

                            var stSelect = '<select onchange="statusChange(this, ' + value.id + ')" id="input-sid" name="sid" class="form-control">';

                            $.each(manageStatus, function (key, val) {

                                if (key == value.status) {
                                    var sld = 'selected'
                                } else {
                                    var sld = ''
                                }

                                stSelect += '<option ' + sld + ' value="' + key + '">' + val + '</option>';
                            });

                            stSelect += '</select>';

                            res +=
                                '<tr>' +
                                '<td>' + value.id + '</td>' +
                                '<td>' + value.full_name + '</td>' +
                                '<td>' + value.mobile + '</td>' +
                                '<td>' + reasonArr[value.reason] + '</td>' +
                                '<td>' + value.out_time + '</td>' +
                                '<td>' + value.in_time + '</td>' +
                                '<td>' + status[value.status] + '</td>' +
                                '<td>' + stSelect + '</td>' +
                                '</tr>';

                            $('tbody').html("");
                            $('tbody').html(res);

                        });

                    }else{
                        $('tbody').html("");
                    }


                },
                error: function(e) {
                    console.log(e.status);
                }
            });

        }


        function getStatus(){

            var dtArray = '';
            dtArray = {
                '0':'Pending',
                '1':'Approved',
                '2':'Rejected'
            }
            return dtArray;
        }
</script>
</body>
</html>
