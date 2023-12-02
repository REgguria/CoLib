<?php
    require_once '../classes/user.class.php';
    require_once  '../tools/functions.php';

    session_start();
    
    if(isset($_GET['CustomerID'])){
        $users =  new users();
        $record = $users->fetch($_GET['CustomerID']);
        $users->CustomerID = $record['CustomerID'];
        $users->Username = $record['Username'];
        $users->Email = $record['Email'];
        $users->FirstName = $record['FirstName'];
        $users->LastName = $record['LastName'];
        $old_Email = $users->Email;
    }
    if(isset($_POST['save'])){
        $users =  new users();
        //sanitize
        $users->CustomerID = $_GET['CustomerID'];
        $users->Username = htmlentities($_POST['Username']);
        $users->FirstName = htmlentities($_POST['FirstName']);
        $users->LastName = htmlentities($_POST['LastName']);
        $users->Email = htmlentities($_POST['Email']);

          //validate
          if (validate_field($users->Username) &&
            validate_field($users->FirstName) &&
          validate_field($users->LastName) &&
          validate_field($users->Email) &&
          validate_email($users->Email)){
              if($old_Email != $users->Email){
                  if(!$users->is_email_exist()){
                      if($users->edit()){
                          header('location: users.php');
                      }else{
                          echo 'An error occured while adding in the database.';
                      } 
                  }
              }else{
                  if($users->edit()){
                      header('location: users.php');
                  }else{
                      echo 'An error occured while adding in the database.';
                  } 
              }
          }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Edit Users';
require_once('../include/head.admin.php');
?>
<body>
    <?php
        require_once('../include/header.admin.php')
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                        <h2 class="h3 brand-color pt-3 pb-2">Edit user</h2>
                        <a href="users.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                    <form method="post" action="">
                            <div class="mb-2">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="Username" name="Username" required value="<?php if(isset($_POST['Username'])) { echo $_POST['Username']; }else if(isset($users->Username)) { echo $users->Username; } ?>">
                                <?php
                                    if(isset($_POST['Username']) && !validate_field($_POST['Username'])){
                                ?>
                                        <p class="text-danger my-1">First name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="Email" class="form-label">Email</label>
                                <input type="Email" class="form-control" id="Email" name="Email" required value="<?php if(isset($_POST['Email'])) { echo $_POST['Email']; }else if(isset($users->Email)) { echo $users->Email; } ?>">
                                <?php
                                    $new_users = new users();
                                    if(isset($_POST['Email'])){
                                        $new_users->Email = htmlentities($_POST['Email']);
                                    }else{
                                        $new_users->Email = '';
                                    }

                                    if(isset($_POST['Email']) && strcmp(validate_email($_POST['Email']), 'success') != 0){
                                ?>
                                        <p class="text-danger my-1"><?php echo validate_email($_POST['Email']) ?></p>
                                <?php
                                    }else if ($new_users->is_email_exist() && $_POST['Email']&& $old_Email != $users->Email){
                                ?>
                                        <p class="text-danger my-1">Email already exist</p>
                                <?php      
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="Firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="FirstName" name="FirstName" required value="<?php if(isset($_POST['FirstName'])) { echo $_POST['FirstName']; }else if(isset($users->FirstName)) { echo $users->FirstName; } ?>">
                                <?php
                                    if(isset($_POST['FirstName']) && !validate_field($_POST['FirstName'])){
                                ?>
                                        <p class="text-danger my-1">First name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="LastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="LastName" name="LastName" required value="<?php if(isset($_POST['LastName'])) { echo $_POST['LastName']; }else if(isset($users->LastName)) { echo $users->LastName; } ?>">
                                <?php
                                    if(isset($_POST['LastName']) && !validate_field($_POST['LastName'])){
                                ?>
                                        <p class="text-danger my-1">Last name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <button type="submit" name="save" class="btn btn-primary mt-2 mb-3 brand-bg-color" id="editUsersButton">Save User</button>
                        </form>
                    </div>
        </div>
    </main>
    <?php
        require_once('../include/js.php')
    ?>
</body>
</html>