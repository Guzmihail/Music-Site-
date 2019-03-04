<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Contacts.php");


    $account = new Account($con);

    include("includes/handlers/register-handlers.php");
    include("includes/handlers/login-handlers.php");

    function getInputValue($name){
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Slotify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>
    <?php 
        if(isset($_POST['registerButton'])){
            echo '<script>
                    $(document).ready(function() {
                        $("#loginForm").hide();
                        $("#registerForm").show();
                    });
                </script>';
        }
        else {
             echo '<script>
                    $(document).ready(function() {
                        $("#loginForm").show();
                        $("#registerForm").hide();
                    });
                </script>';
        }
     ?>
    

    <div id="baground">

        <div id="loginContainer">

            <div id="inputContainer">
                <form id="loginForm" action="register.php" method="POST">
                    <h2>Login to your account</h2>
                    <p>
                        <?php echo $account->getError(Contacts::$loginFailed); ?>
                        <label for="loginUsername">Username</label>
                        <input id="loginUsername"  name="loginUsername" type="text" placeholder="e.g. bartSimpson" value="<?php echo getInputValue('loginUsername') ?>" required>
                    </p>
                    <p>
                        <label for="loginPasswor">Password</label>
                        <input id="loginPasswor"  name="loginPasswor" type="password" placeholder=" Your password" required>
                    </p>
                    
                    <button type="submit" name="loginButton">LOG IN</button>

                    <div class="hasAcountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span>
                    </div>

                </form>

                
                 <form id="registerForm" action="register.php" method="POST">
                    <h2>Create your free account</h2>
                    <p>
                        <?php echo $account->getError(Contacts::$usernameCaracters); ?>
                        <?php echo $account->getError(Contacts::$usernameTaken); ?>
                        <label for="username">Username</label>
                        <input id="username"  name="username" type="text" placeholder="e.g. bartSimpson" value="<?php echo getInputValue('username') ?>" required>
                    </p>


                    <p>
                         <?php echo $account->getError(Contacts::$firstNameCaracters); ?>
                        <label for="firstName">First name</label>
                        <input id="firstName"  name="firstName" type="text" placeholder="e.g. Bart" value="<?php echo getInputValue('firstName') ?>" required>
                    </p>


                    <p>
                        <?php echo $account->getError(Contacts::$lastNameCaracters); ?>
                        <label for="lastName">Last name</label>
                        <input id="lastName"  name="lastName" type="text" placeholder="e.g. Simpson" value="<?php echo getInputValue('lastName') ?>" required>
                    </p>


                    <p>
                        <?php echo $account->getError(Contacts::$emailsDoNotMatch); ?>
                        <?php echo $account->getError(Contacts::$emailInvalid); ?>
                        <?php echo $account->getError(Contacts::$emailTaken); ?>
                        <label for="email">Email</label>
                        <input id="email"  name="email" type="email" placeholder="e.g. bart@gmail.com" value="<?php echo getInputValue('email') ?>" required>
                    </p>


                    <p>
                        <label for="email2">Confirm email</label>
                        <input id="email2"  name="email2" type="email" placeholder="e.g. bart@gmail.com" value="<?php echo getInputValue('email2') ?>" required>
                    </p>


                    <p>
                        <?php echo $account->getError(Contacts::$passwordDoNoMatch); ?>
                        <?php echo $account->getError(Contacts::$passwordNotAlphanumeric); ?>
                        <?php echo $account->getError(Contacts::$passwordCharacters); ?>
                        <label for="password">Password</label>
                        <input id="password"  name="password" type="password" placeholder=" Your password" required>
                    </p>






                    <p>
                        <label for="password2">Confirm password</label>
                        <input id="password2"  name="password2" type="password" placeholder=" Your password" required>
                    </p>
                    
                    <button type="submit" name="registerButton">SIGN UP</button>

                    <div class="hasAcountText">
                        <span id="hideRegister">Already have an account? Log in here.</span>
                    </div>

                </form>

            </div>

            <div id="loginText">
                <h1>Get great music, right now</h1>
                <h2>Listen to loads of songs for free</h2>
                <ul>
                    <li>Discover music you'll fall in love with</li>
                    <li>Create your playlist</li>
                    <li>Follow artist to keep up to date</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>