<!DOCTYPE html>
<html lang="en">
<?php
        $title = "Sign Up";
        require_once('../include/head.php');
?>
<body>
    <main>
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center" id="login-background">
            <div class="Login-Card rounded-3 border-1 border-primary p-4" style="width: 30rem;" id="Login-Card">
                <p class="text-center">
                    <img src="../Images/Header/logo.png" class="img-fluid" alt="" id="login-logo">
                </p>
                <h1 class="h2 my-3 mb-4 text-center brand-color">Sign Up</h1>
                <form method="post" action="">
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                    </div>
                    <label for="gender" class="form-label">Gender</label>
                    <div class="d-flex mb-2">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="maleradio" id="maleradio" value="Male" checked>
                            <label class="form-check-label" for="maleradio">Male</label>
                        </div>
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="femaleradio" id="femaleradio" value="Female">
                            <label class="form-check-label" for="femaleradio">Female</label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
                    </div>
                    <div class="mb-2">
                        <label for="confirmpass" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpass" name="confirmpass" required value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 brand-bg-color w-100" name="login" id="login-btn">Login</button>
                </form>
            </div> 
        </div>
    </main>
    <?php 
        require_once('../include/js.php');
    ?>
</body>
</html>