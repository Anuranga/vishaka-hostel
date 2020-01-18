<html><head>
    <style type="text/css">
        th {
            background-color: rgba(255,200,118,0.95);
            border: 1px solid #D0D0D0;
            padding: 5px;
            width: 150px;
        }
        td {
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            padding: 5px;
            width: 150px;
        }
    </style>
</head><body>
<table id="bootstrap-data-table" class="table table-striped table-bordered">
    <tr>
        <th>Admission No</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Status</th>
    </tr>
    <?php foreach ($list as $arr) {
    $status = ['Pending', 'Approved', 'Rejected'];
    ?>
    <tr>
        <td><?php echo $arr->id; ?></td>
        <td><?php echo $arr->full_name; ?></td>
        <td><?php echo $arr->grade; ?></td>
        <td><?php echo $status[$arr->status]; ?></td>
    </tr>
    <?php } ?>
</table>
</body></html>