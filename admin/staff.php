<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $title = "Staff";
        require_once('../include/head.admin.php');
        ?>
    </head>
    <body>
        <?php 
        require_once('../include/header.admin.php');
        ?>
        <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                require_once('../include/sidebar.php');
            ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h2 class="h3 brand-color pt-3 pb-2">Staff</h2>
                    <a href="addstaff.php" class="btn btn-primary brand-bg-color mb-3">Add Staff</a>
                    <div id="table-container">
                        <?php
                        // need natin to make and change 
                        require_once '../classes/staff.class.php';
                        require_once '../tools/functions.php';

                        $staff = new staff();

    
                        $StaffArray = $staff->show();
                        $Counter = 1;
                            
                        ?>
                        <table id="staff" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="staffTableBody">
                            <?php
                                if ($StaffArray) {
                                    foreach ($StaffArray as $item) {
                            ?>
                                    <tr>
                                        <td><?= $Counter ?></td>
                                        <td><?= $item['LastName'] . ', ' . $item['FirstName'] ?></td>
                                        <td><?= $item['Role'] ?></td>
                                        <td><?= $item['Email'] ?></td>
                                        <td><?= $item['Status'] ?></td>
                                        <td>
                                            <a href="edit_staff.php?StaffID=<?php echo $item['StaffID']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <button type="button-fluid" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DeleteButton">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                        $Counter++;
                                }
                            }
                                    ?>
                            </tbody>
                        </table>
                        <div class="modal fade" id="DeleteButton" tabindex="-1" aria-labelledby="DeleteButton" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="DeleteButton">Delete Staff</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <p><strong>Are you sure about this?</strong></p>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                <form action="deletestaff.php" method="post">
                                    <input type="hidden" name="StaffID" value="<?php echo $item['StaffID']; ?>">
                                    <button type="submit" class="btn btn-dark" name="save">YES</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main> 
            </div>
        </div>
    </main>
    <?php
        require_once('../include/js.php')
    ?>
</body>
</html>
    </body>
</html>