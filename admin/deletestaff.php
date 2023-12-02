<?php
require_once '../classes/database.php';
require_once '../classes/staff.class.php';

$staff = new staff();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $StaffID = $_POST['StaffID'];
    if($staff->delete($StaffID)){
        header('Location: staff.php');
    }
    else{
        echo 'error';
    }
}
?>