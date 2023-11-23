<!DOCTYPE html>
<html lang="en">
<?php
        $title = "Home Page";
        require_once('../include/head.php');
?>
<body>
    <main>
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center" id="login-background">
            <div class="Login-Card rounded-3 border-1 border-primary p-4 m-5" style="width: 24rem;" id="Login-Card">
                <p class="text-center">
                    <img src="../Images/Header/logo.png" class="img-fluid" alt="" id="login-logo">
                </p>
                <h1 class="h2 my-3 mb-4 text-center brand-color">Welcome to CoLib</h1>
                <form method="post" action="">
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
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