<!DOCTYPE html>
<html lang="en">
<head>
   <?php
      $title = "Admin Dashboard";
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
                    <h1 class="h3 brand-color pt-3">Overview</h1>   
                    <div class="row py-2 py-lg-3">
                        <!-- Statistic Card 1 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">To be reviewed</h5>
                                    <p class="card-text"><i class="fa fa-magnifying-glass"></i> 1,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 2 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Reports</h5>
                                    <p class="card-text"><i class="fa fa-triangle-exclamation"></i> 500</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 3 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Total Users</h5>
                                    <p class="card-text"><i class="fa fa-users" aria-hidden="true"></i> &#8369;10,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 4 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Number of Codes</h5>
                                    <p class="card-text"><i class="fa fa-book"></i> 200</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="h3 brand-color">Code to be Reviewed</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date Uploaded</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Code Title</th>
                                    <th scope="col">Format</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2023-10-15</td>
                                    <td>JaydeeBallaho</td>
                                    <td>Navbar for Beginners</td>
                                    <td>CSS</td>
                                    <td>A basic navbar with shadows</td>
                                    <td class="text-center"><a href="editstaff.php?id=<?php echo $item['id']; ?>"><i class="fa-solid fa-download"></a></td>
                                </tr>
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
    