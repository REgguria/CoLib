<?php
require_once '../classes/database.php';
require_once '../classes/code.class.php';

$code = new code();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $CodeID = $_POST['CodeID'];
    if($code->delete($CodeID)){
        header('Location: forapproval.php');
    }
    else{
        echo 'error';
    }
}
?>