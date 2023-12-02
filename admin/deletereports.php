<?php
require_once '../classes/database.php';
require_once '../classes/reports.class.php';

$reports = new reports();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ReportID = $_POST['ReportID'];
    if($reports->delete($ReportID)){
        header('Location: report.php');
    }
    else{
        echo 'error';
    }
}
?>