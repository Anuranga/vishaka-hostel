<html><head>
    <style type="text/css">
        th {
            background-color: rgba(255,200,118,0.95);
            border: 1px solid #D0D0D0;
            padding: 5px;
        }
        td {
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            padding: 5px;
        }
    </style>
</head><body>
<table id="bootstrap-data-table" class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Reason</th>
        <th>Out time</th>
        <th>In time</th>
        <th>Status</th>
    </tr>
    <?php foreach ($list as $arr) {
        $statusArr = ['Pending', 'Active', 'Rejected'];
    ?>
    <tr>
        <td><?php echo $arr->sid; ?></td>
        <td><?php echo $arr->full_name; ?></td>
        <td><?php echo $arr->mobile; ?></td>
        <td><?php echo $arr->reason; ?></td>
        <td><?php echo $arr->out_time; ?></td>
        <td><?php echo $arr->in_time; ?></td>
        <td><?php echo $statusArr[$arr->status]; ?></td>
    </tr>
    <?php } ?>
</table>
</body></html>