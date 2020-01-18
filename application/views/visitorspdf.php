<html><head>
    <style type="text/css">
        th {
            background-color: rgba(255,200,118,0.95);
            border: 1px solid #D0D0D0;
            margin: 5px;
        }
        td {
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            margin: 5px;
        }
    </style>
</head><body>
<table id="bootstrap-data-table" class="table table-striped table-bordered">
<!--    <thead>-->
    <tr>
        <th>Student ID</th>
        <th>Visitor Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Relationship</th>
    </tr>
<!--    </thead>-->
<!--    <tbody>-->
    <?php foreach ($list as $arr) {?>
        <tr>
            <td><?php echo $arr->student_id; ?></td>
            <td><?php echo $arr->full_name; ?></td>
            <td><?php echo $arr->address; ?></td>
            <td><?php echo $arr->mobile; ?></td>
            <td><?php echo $arr->relationship; ?></td>
        </tr>
    <?php } ?>
<!--    </tbody>-->
</table>
</body></html>