<?php
require_once '../classes/database.php';
require_once '../classes/user.class.php';

$users = new users();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $CustomerID = $_POST['CustomerID'];
    if($users->delete($CustomerID)){
        header('Location: users.php');
    }
    else{
        echo 'error';
    }
}
?>