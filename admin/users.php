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
                                        <td class="text-center"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                        <td class="text-center"><a href=""><i class="fa-solid fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <?php
                                        $Counter++;
                                }
                            }
                                    ?>
                                <!-- You now have a total of 10 rows with spicy pizza orders -->
                            </tbody>
                        </table>                                             
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