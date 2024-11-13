<!DOCTYPE html>
<html>
<head>
    <title>Clinical Trial Participant Financial Burden Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; }
        .content { margin: 20px; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Clinical Trial Participant Financial Burden Calculator</h1>
    <div class="content">
        <table>
        <?php foreach($data as $key => $val){ ?>
            <tr>
                <td><?php echo ucwords(str_replace("_"," ",$key)); ?></td>
                <td><?= esc($val) ?></td>
            </tr>
        <?php } ?>
           
        </table>
       
    </div>
</body>
</html>
