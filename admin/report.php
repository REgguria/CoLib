<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $title = "Reports";
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
                    <h1 class="h3 brand-color pt-3">Reports</h1>
                    <div class="table-container">
                    <?php
                        // need natin to make and change 
                        require_once '../classes/reports.class.php';
                        require_once '../tools/functions.php';

                        $report = new reports();

    
                        $reportArray = $report->show();
                        $Counter = 1;
                            
                        ?>
                        <table id="report" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Reported By</th>
                                    <th scope="col">Reported User</th>
                                    <th scope="col">Code Name</th>
                                    <th scope="col">Complaint</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Done</th>
                                </tr>
                            </thead>
                            <tbody id="reportTableBody">
                            <?php
                                if ($reportArray) {
                                    foreach ($reportArray as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['Reporter'] ?></td>
                                        <td><?= $item['Reportee'] ?></td>
                                        <td><?= $item['CodeName'] ?></td>
                                        <td><?= $item['Complain'] ?></td>
                                        <td class="text-center"><a href =""><i class="fa-solid fa-download" aria-hidden="true"></i></a></td>
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