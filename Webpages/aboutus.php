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
    <main class="container-fluid bg-secondary">
        <div class="p-5 mb-2 bg-body-tertiary" >
            <div class="container-fluid p-5 vh-50">
                <h1 class="display-5 fw-bold">CoLib</h1>
                    <p class="col-md-8 fs-4">Bringing you the simple, best, and yet open-source codes throughout the web!</p>
                <button class="btn btn-primary btn-dark btn-lg" type="button">Start Browsing</button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="card m-5" style="max-width: 24em">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                    <div class="card-body">
                        <h5 class="card-title">Kamil Abdurajie</h5>
                        <p class="card-text">Founder of CoLib</p>
                    </div>
                </div>
                <div class="card m-5" style="max-width: 24em">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" alt="Palm Springs Road"/>
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