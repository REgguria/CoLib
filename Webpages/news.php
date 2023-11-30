<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Newspaper";
        require_once("../include/head.php");
    ?>
</head>
<body>
    <?php 
        require_once("../include/header.user.php");
    ?>
    <main>
        <div class="p-5 mb-2 bg-body-tertiary">
            <div class="container-fluid py-5 vh-50">
                <h1 class="display-5 fw-bold">CoLib</h1>
                    <p class="col-md-8 fs-4">Bringing you the simple, best, and yet open-source codes throughout the web!</p>
                <button class="btn btn-primary btn-dark btn-lg" type="button">Start Browsing</button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-3 border-3 rounded-3 bg-secondary m-2">
                    <form method="post" action="" class="d-flex m-2">
                        <div class="input-group">
                        <input type="search" class="form-control rounded w-25" placeholder="Search" name="search"/>
                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-init>Search</button>
                        </div>
                    </form>

                    <div class="container-75 border-2 rounded-3 bg-light p-2 mb-2">
                        <form method="post" action="">
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
                            </div>
                            <div class="mb-2">
                                    <p class="text-end"><a href="">Forgot Password?</a></p>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 brand-bg-color w-100" name="login" id="login-btn">Login</button>
                            <div class="text-center mt-3">
                                <p>Don't have account yet? Sign up here <a href="signup.php" class="brand-color text-decoration-none">Sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div> 

                <div class="col-8 bg-light m-2 d-flex justify-content-center rounded-3">
                    <div class="container-fluid d-flex justify-content-center bg-secondary m-2">
                        <h2 class="text-light m-2">NEWS HEADLINE</h2>
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