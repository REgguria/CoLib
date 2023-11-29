<!DOCTYPE html>
<html lang="en">
    <?php
        $title = "Home Page";
        require_once('../include/head.php');
    ?>
<body>
    <?php
        require_once('../include/header.user.php');
    ?>
    <main class="container-fluid">
        <!-- Jumbotron which showcases the website -->
        <div class="p-5 mb-2 bg-body-tertiary">
            <div class="container-fluid py-5 vh-50">
                <h1 class="display-5 fw-bold">CoLib</h1>
                    <p class="col-md-8 fs-4">Bringing you the simple, best, and yet open-source codes throughout the web!</p>
                <button class="btn btn-primary btn-dark btn-lg" type="button">Start Browsing</button>
            </div>
        </div>


        <div class="container-fluid d-flex flex-column align-items-center">
            <div class="container-fluid w-100 d-flex justify-content-end align-content-end my-2">
                <form method="post" action="" class="d-flex">
                    <div class="input-group">
                        <input type="search" class="form-control rounded w-25" placeholder="Search" name="search"/>
                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-init>Search</button>
                    </div>
                </form>
                <button class="btn btn-outline-secondary btn-add mx-2" type="button"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
            </div>

            <div class="container-fluid m-0 p-0">
                <div class="row m-2">
                    <div class="col">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php 
        require_once('../include/js.php');
    ?>
</body>
</html>