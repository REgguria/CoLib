<!DOCTYPE html>
<html lang="en">
<?php
        $title = "Login";
        require_once('../include/head.php');
?>
<body>
    <main>
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center" id="login-background">
            <div class="Login-Card rounded-3 border-1 border-primary p-4" style="width: 30rem;" id="Login-Card">
                <p class="text-center">
                    <img src="../Images/Header/logo2.png" class="img-fluid" alt="" id="login-logo">
                </p>
                <h1 class="h2 my-3 mb-4 text-center brand-color"><b>Colib Admin Login</b></h1>
                <form method="post" action="">
                    <div class="mb-2">
                        <label for="adminemail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="adminemail" name="adminemail" required value="<?php if(isset($_POST['adminemail'])) { echo $_POST['adminemail']; } ?>">
                    </div>
                    <div class="mb-2">
                        <label for="adminpassword" class="form-label">Password</label>
                        <input type="adminpassword" class="form-control" id="adminpassword" name="adminpassword" required value="<?php if(isset($_POST['adminpassword'])) { echo $_POST['adminpassword']; } ?>">
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