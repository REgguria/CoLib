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
                                        <td class="text-center"><a href="approveudcode.php?CodeID=<?php echo $item['CodeID']; ?>"><i class="fa-solid fa-check" aria-hidden="true"></i></a></td>
                                        <td class="text-center"> <button type="button-fluid" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DeleteButton">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button></td>
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
                                        <h5 class="modal-title" id="DeleteButton">Delete Code?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <p><strong>Are you sure about this?</strong></p>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                <form action="deleteucode.php" method="post">
                                    <input type="hidden" name="CodeID" value="<?php echo $item['CodeID']; ?>">
                                    <button type="submit" class="btn btn-dark" name="save">YES</button>
                                </form>
                            </div>
                        </div>                                           
                    </div>
                </main>
         </div>
      </div>
        </main>
    </body>    
</html>