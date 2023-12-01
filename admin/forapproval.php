<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $title = "For Approval";
        require_once('../include/head.admin.php');
        ?>
    </head>
    <body>
        <?php 
        require_once('../include/header.admin.php');
        ?>

        <?php
          require_once('../include/js.php');
      ?>
      <main>
        <div class="container-fluid">
                <div class="row">
                    <?php
                    require_once('../include/sidebar.php');
                    ?>
                 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h1 class="h3 brand-color pt-3">Code to be Reviewed</h1>
                    <div class="table-container">
                    <?php
                        // need natin to make and change 
                        require_once '../classes/code.class.php';
                        require_once '../tools/functions.php';

                        $code = new code();

    
                        $codeArray = $code->showUnapproved();
                        $Counter = 1;
                            
                        ?>
                        <table id-="code" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code Title</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Format</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date Uploaded</th>
                                    <th scope="col">link</th>
                                    <th scope="col">approval</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if ($codeArray) {
                                    foreach ($codeArray as $item) {
                            ?>
                                    <tr>
                                        <td><?= $Counter ?></td>
                                        <td><?= $item['CodeName'] ?></td>
                                        <td><?= $item['Author'] ?></td>
                                        <td><?= $item['Format'] ?></td>
                                        <td><?= $item['Description'] ?></td>
                                        <td><?= $item['DateCreated'] ?></td>
                                        <td class="text-center"><a href=""><i class="fa-solid fa-download" aria-hidden="true"></i></a></td>
                                        <td class="text-center"><a href=""><i class="fa-solid fa-check" aria-hidden="true"></i></a></td>
                                        <td class="text-center"><a href=""><i class="fa-solid fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <?php
                                        $Counter++;
                                }
                            }
                                    ?>

                            </tbody>
                        </table>                                             
                    </div>
                </main>
         </div>
      </div>
        </main>
    </body>    
</html>