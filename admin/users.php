<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $title = "Users";
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
                <h1 class="h3 brand-color pt-3">Users</h1>
                <div class="table-container">
                    <?php
                        // need natin to make and change 
                        require_once '../classes/user.class.php';
                        require_once '../tools/functions.php';

                        $users = new users();

    
                        $JournalArray = $users->show();
                        $Counter = 1;
                            
                        ?>
                        <table id="users" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Date Updated</th>
                                    <th scope="col">Compose</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="usersTableBody">
                            <?php
                                if ($JournalArray) {
                                    foreach ($JournalArray as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['Username'] ?></td>
                                        <td><?= $item['LastName'] . ', ' . $item['FirstName'] ?></td>   
                                        <td><?= $item['Email'] ?></td>
                                        <td><?= $item['DateCreated'] ?></td>
                                        <td><?= $item['DateUpdated'] ?></td>
                                        <td class="text-center"><a href =""><i class="fa-solid fa-envelope" aria-hidden="true"></i></a></td>
                                        <td class="text-center"><a href="edituser.php?CustomerID=<?php echo $item['CustomerID'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                        <td class="text-center"> <button type="button-fluid" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DeleteButton">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button></td>
                                    </tr>
                                    <?php
                                        $Counter++;
                                }
                            }
                                    ?>
                                <!-- You now have a total of 10 rows with spicy pizza orders -->
                            </tbody>
                        </table>           
                        <div class="modal fade" id="DeleteButton" tabindex="-1" aria-labelledby="DeleteButton" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="DeleteButton">Delete User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <p><strong>Are you sure about this?</strong></p>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                <form action="deleteUsers.php" method="post">
                                    <input type="hidden" name="CustomerID" value="<?php echo $item['CustomerID']; ?>">
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
          require_once('../include/js.php');
        ?>
    </body>

</html>