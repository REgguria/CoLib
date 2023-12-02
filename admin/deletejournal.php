<?php
require_once '../classes/database.php';
require_once '../classes/journals.class.php';

$journal = new journal();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $JournalID = $_POST['JournalID'];
    if($journal->delete($JournalID)){
        header('Location: Journals.php');
    }
    else{
        echo 'error';
    }
}
?>