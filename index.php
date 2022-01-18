<html>
<head>
    <style>
        table {
            border-collapse:collapse;
        }
        td {
            border: 1px solid black;
        }
        thead {
            background-color: gray;
        }
        td {
            padding: 7px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f5f5f5;
        }
    </style>
</head>
</html>

<?php
require_once 'csvReader.php';

$csv = new csvReader('users.csv');
$csv->fOpen();
$csv->drawTable();
$csv->fClose();
