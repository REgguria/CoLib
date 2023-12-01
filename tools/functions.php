<?php
    function validate_field($Field){
        $Field = htmlentities($Field);
        if(strlen(trim($Field))<1){
            return false;
        }else{
            return true;
        }
    }

    function validate_email($Email){
        // Check if the 'email' key exists in the $_POST array
        if (isset($Email)) {
            $Email = trim($Email); // Trim whitespace
            // Check if the email is not empty
            if (empty($Email)) {
                return 'Email is required';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Check if the email has a valid format
                return 'Email is invalid format';
            } else {
                return 'success';
            }
        } else {
            return 'Email is required'; // 'email' key doesn't exist in $_POST
        }
    }    

    function validate_password($Password) {
        $Password = htmlentities($Password);
        
        if (strlen(trim($Password)) < 1) {
            return "Password cannot be empty";
        } elseif (strlen($Password) < 16) {
            return "Password must be at least 16 characters long";
        } else {
            return "success"; // Indicates successful validation
        }
    }    

    function validate_cpw($Password, $ConfirmPassword){
        $pw = htmlentities($Password);
        $cpw = htmlentities($ConfirmPassword);
        if(strcmp($pw, $cpw) == 0){
            return true;
        }else{
            return false;
        }
    }

?>