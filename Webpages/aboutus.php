<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "About Us";
        require_once("../include/head.php");
    ?>
</head>
<body>
    <?php 
        require_once("../include/header.user.php")
    ?>
    <main class="container-fluid bg-secondary vh-100">
        <div class="container-fluid">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="card m-5" style="max-width: 24em ">
                    <img src="../Images/kamilphoto.jpg" class="card-img-top img-fluid"/>
                    <div class="card-body">
                        <h5 class="card-title">Kamil Abdurajie</h5>
                        <p class="card-text">Founder of CoLib</p>
                    </div>
                </div>
                <div class="card m-5" style="max-width: 24em">
                    <img src="../Images/AAAAAAAA.png" class="card-img-top img-fluid"/>
                    <div class="card-body">
                        <h5 class="card-title">Ralph Waldo B. Lahaman</h5>
                        <p class="card-text">Co-Founder of Colib</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        require_once("../include/js.php");
    ?>
</body>
</html>