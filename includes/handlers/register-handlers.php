<?php 

 function sanitizeFormPassword($intputText){
        $intputText = strip_tags($intputText);
        return $intputText;

    }
    
    function sanitizeFormUsername($intputText){
        $intputText = strip_tags($intputText);
        $intputText = str_replace(" ", "", $intputText);
        return $intputText;

    }


    function sanitizeFormString($intputText){
        $intputText = strip_tags($intputText);
        $intputText = str_replace(" ", "", $intputText);
        $intputText = ucfirst(strtolower($intputText));
        return $intputText;

    }

    

    






    if (isset($_POST['registerButton'])) {
         //Register button was pressed
        $username = sanitizeFormUsername($_POST['username']);
        $firstName = sanitizeFormString($_POST['firstName']);
        $lastName = sanitizeFormString($_POST['lastName']);
        $email = sanitizeFormString($_POST['email']);
        $email2 = sanitizeFormString($_POST['email2']);
        $password = sanitizeFormPassword($_POST['password']);
        $password2 = sanitizeFormPassword($_POST['password2']);


        $wasSiccessful=$account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
        if($wasSiccessful == true ) {
            $_SESSION['userLoggedIn'] = $username;
            header("Location: index.php");
        }
        
    }


 ?>