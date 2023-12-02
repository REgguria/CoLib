<?php 
require_once '../classes/journals.class.php';
require_once  '../tools/functions.php';

session_start();

if(isset($_GET['JournalID'])){
    $journal =  new journal();
    $record = $journal->fetch($_GET['JournalID']);
    $journal->JournalID = $record['JournalID'];
    $journal->Title = $record['Title'];
    $journal->Description = $record['Description'];
    $journal->Author = $record['Author'];
    $journal->Text = $record['Text'];
}
if(isset($_POST['save'])){
    $journal =  new journal();
    //sanitize
    $journal->JournalID = $_GET['JournalID'];
    $journal->Title = htmlentities($_POST['Title']);
    $journal->Description = htmlentities($_POST['Description']);
    $journal->Author = htmlentities($_POST['Author']);
    $journal->Text = htmlentities($_POST['Text']);

    if (validate_field($journal->Title) &&
        validate_field($journal->Description) &&
        validate_field($journal->Author) &&
        validate_field($journal->Text)){
                    if($journal->edit()){
                        header('location: Journals.php');
                    }else{
                        echo 'An error occured while adding in the database.';
                    }
                        
                }
            else{
                if($journal->edit()){
                    header('location: Journals.php');
                }else{
                    echo 'An error occured while adding in the database.';
                } 
            }
     }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Edit Journal';
    require_once('../include/head.admin.php');
    ?>
    <body>
        <?php
            require_once('../include/header.admin.php')
        ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                <a href="Journals.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
            <div class="col-12 col-lg-6">
                <form method="post" action="">
                    <div class="mb-2">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="Title" name="Title" required value="<?php if(isset($_POST['Title'])) { echo $_POST['Title']; }else if(isset($journal->Title)) { echo $journal->Title; } ?>">
                        <?php
                            if(isset($_POST['Title']) && !validate_field($_POST['Title'])){
                        ?>
                        <p class="text-danger my-1">Title is required</p>
                        <?php
                                    }
                        ?>
                    </div>
                    <div class="mb-2">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="Description" name="Description" required value="<?php if(isset($_POST['Description'])) { echo $_POST['Description']; }else if(isset($journal->Description)) { echo $journal->Description; } ?>">
                        <?php
                            if(isset($_POST['Description']) && !validate_field($_POST['Description'])){
                        ?>
                        <p class="text-danger my-1">Description is required</p>
                        <?php
                                    }
                        ?>
                    </div>
                    <div class="mb-2">
                        <label for="Author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="Author" name="Author" required value="<?php if(isset($_POST['Author'])) { echo $_POST['Author']; }else if(isset($journal->Author)) { echo $journal->Author; } ?>">
                        <?php
                            if(isset($_POST['Author']) && !validate_field($_POST['Author'])){
                        ?>
                        <p class="text-danger my-1">Author is required</p>
                        <?php
                                    }
                        ?>
                    </div>
                    <div class="mb-2">
                        <label for="Text" class="form-label">Text</label>
                        <input type="text" class="form-control" id="Text" name="Text" required value="<?php if(isset($_POST['Text'])) { echo $_POST['Text']; }else if(isset($journal->Text)) { echo $journal->Text; } ?>">
                        <?php
                            if(isset($_POST['Text']) && !validate_field($_POST['Text'])){
                        ?>
                        <p class="text-danger my-1">Text is required</p>
                        <?php
                                    }
                        ?>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary mt-2 mb-3 brand-bg-color" id="addJournalButton">Save Journal</button>
                </form>
        </main>
        <?php
            require_once('../include/js.php')
        ?>
    </body>
</html>
