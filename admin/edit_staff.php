<?php
    require_once '../classes/staff.class.php';
    require_once  '../tools/functions.php';

    session_start();
    
    if(isset($_GET['StaffID'])){
        $staff =  new Staff();
        $record = $staff->fetch($_GET['StaffID']);
        $staff->StaffID = $record['StaffID'];
        $staff->FirstName = $record['FirstName'];
        $staff->LastName = $record['LastName'];
        $staff->Role = $record['Role'];
        $staff->Email = $record['Email'];
        $old_Email = $staff->Email;
        $staff->Status = $record['Status'];
    }
    if(isset($_POST['save'])){
        $staff = new Staff();
        //sanitize
        $staff->StaffID = $_GET['StaffID'];
        $staff->FirstName = htmlentities($_POST['FirstName']);
        $staff->LastName = htmlentities($_POST['LastName']);
        $staff->Role = htmlentities($_POST['Role']);
        $staff->Email = htmlentities($_POST['Email']);
        if(isset($_POST['Status'])){
            $staff->Status = htmlentities($_POST['Status']);
        }else{
            $staff->Status = '';
        }

        //validate
        if (validate_field($staff->FirstName) &&
        validate_field($staff->LastName) &&
        validate_field($staff->Role) &&
        validate_field($staff->Email) &&
        validate_field($staff->Status) &&
        validate_email($staff->Email)){
            if($old_Email != $staff->Email){
                if(!$staff->is_email_exist()){
                    if($staff->edit()){
                        header('location: staff.php');
                    }else{
                        echo 'An error occured while adding in the database.';
                    } 
                }
            }else{
                if($staff->edit()){
                    header('location: staff.php');
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
    $title = 'Edit Staff';
    require_once('../include/head.admin.php');
    ?>
<body>
    <?php
        require_once('../include/header.admin.php')
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                        <h2 class="h3 brand-color pt-3 pb-2">Edit Staff</h2>
                        <a href="staff.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form method="post" action="">
                            <div class="mb-2">
                                <label for="Firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="FirstName" name="FirstName" required value="<?php if(isset($_POST['FirstName'])) { echo $_POST['FirstName']; }else if(isset($staff->FirstName)) { echo $staff->FirstName; } ?>">
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
                                <input type="text" class="form-control" id="LastName" name="LastName" required value="<?php if(isset($_POST['LastName'])) { echo $_POST['LastName']; }else if(isset($staff->LastName)) { echo $staff->LastName; } ?>">
                                <?php
                                    if(isset($_POST['LastName']) && !validate_field($_POST['LastName'])){
                                ?>
                                        <p class="text-danger my-1">Last name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="Role" class="form-label">Role</label>
                                <select name="Role" id="Role" class="form-select">
                                    <option value="">Select Role</option>
                                    <option value="Manager" <?php if(isset($_POST['Role']) && $_POST['Role'] == 'Manager') { echo 'selected'; }else if(isset($staff->Role) && $staff->Role == 'Manager') { echo 'selected'; } ?>>Manager</option>
                                    <option value="Staff" <?php if(isset($_POST['Role']) && $_POST['Role'] == 'Staff') { echo 'selected'; }else if(isset($staff->Role) && $staff->Role == 'Staff') { echo 'selected'; }  ?>>Staff</option>
                                    <option value="Cashier" <?php if(isset($_POST['Role']) && $_POST['Role'] == 'Cashier') { echo 'selected'; }else if(isset($staff->Role) && $staff->Role == 'Cashier') { echo 'selected'; } ?>>Cashier</option>
                                </select>
                                <?php
                                    if(isset($_POST['Role']) && !validate_field($_POST['Role'])){
                                ?>
                                        <p class="text-danger my-1">Select staff Role</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="Email" class="form-label">Email</label>
                                <input type="Email" class="form-control" id="Email" name="Email" required value="<?php if(isset($_POST['Email'])) { echo $_POST['Email']; }else if(isset($staff->Email)) { echo $staff->Email; } ?>">
                                <?php
                                    $new_staff = new Staff();
                                    if(isset($_POST['Email'])){
                                         $new_staff->Email = htmlentities($_POST['Email']);
                                    }else{
                                         $new_staff->Email = '';
                                    }

                                    if(isset($_POST['Email']) && strcmp(validate_email($_POST['Email']), 'success') != 0){
                                ?>
                                        <p class="text-danger my-1"><?php echo validate_email($_POST['Email']) ?></p>
                                <?php
                                    }else if ($new_staff->is_email_exist() && $_POST['Email']&& $old_Email != $staff->Email){
                                ?>
                                        <p class="text-danger my-1">Email already exist</p>
                                <?php      
                                    }
                                ?>
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label">Status</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="statusActive" name="Status" value="Active" <?php if(isset($_POST['Status']) && $_POST['Status'] == 'Active') { echo 'checked'; } else if(isset($staff->Status) && $staff->Status == 'Active') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="statusActive">Active</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="statusDeactivated" name="Status" value="Deactivated" <?php if(isset($_POST['Status']) && $_POST['Status'] == 'Deactivated') { echo 'checked'; }else if(isset($staff->Status) && $staff->Status == 'Deactivated') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="statusDeactivated">Deactivated</label>
                                    </div>
                                </div>
                                <?php
                                    if((!isset($_POST['Status']) && isset($_POST['save'])) || (isset($_POST['Status']) && !validate_field($_POST['Status']))){
                                ?>
                                        <p class="text-danger my-1">Select staff status</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <button type="submit" name="save" class="btn btn-primary mt-2 mb-3 brand-bg-color" id="addStaffButton">Save Staff</button>
                        </form>
                    </div>
    </main>
    <?php
        require_once('../include/js.php')
    ?>
</body>
</html>
