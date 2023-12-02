<?php
require_once '../classes/code.class.php';
require_once  '../tools/functions.php';

$code = new code();

if(isset($_GET['CodeID'])){
    $CodeID = $_GET['CodeID'];
    if($code->approve($CodeID)){
        header('Location: forapproval.php');
    }
    else{
        echo 'error';
    }
}
?>