<?php
require_once 'csvReader.php';

$csv = new csvReader('users.csv');
$csv->fOpen();
$csv->drawTable();
