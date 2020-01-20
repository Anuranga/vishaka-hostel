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
        <th>Date</th>
        <th>Expense category</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    <?php foreach ($list as $arr) {
    ?>
    <tr>
        <td><?php echo $arr->date; ?></td>
        <td><?php echo $arr->category; ?></td>
        <td><?php echo $arr->description; ?></td>
        <td><?php echo $arr->amount; ?></td>
    </tr>
    <?php } ?>
</table>
</body></html>