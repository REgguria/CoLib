<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $title = "Journals";
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
                    <h1 class="h3 brand-color pt-3">Journals</h1>
                    <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                                <a href="" class="btn btn-primary brand-bg-color mb-3 me-auto">Add Journal</a>
                            </div>
                    <div class="table-container">
                    <?php
                        // need natin to make and change 
                        require_once '../classes/journals.class.php';
                        require_once '../tools/functions.php';

                        $journal = new journal();

    
                        $JournalArray = $journal->show();
                        $Counter = 1;
                            
                        ?>
                        <table id="journal" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Author</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date Uploaded</th>
                                    <th scope="col">Date Edited</th>
                                    <th scope="col">link</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="journalTableBody">
                            <?php
                                if ($JournalArray) {
                                    foreach ($JournalArray as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['Author'] ?></td>
                                        <td><?= $item['Title'] ?></td>
                                        <td><?= $item['Description'] ?></td>
                                        <td><?= $item['DateUploaded'] ?></td>
                                        <td><?= $item['DateUpdated'] ?></td>
                                        <td class="text-center"><a href =""><i class="fa-solid fa-download" aria-hidden="true"></i></a></td>
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