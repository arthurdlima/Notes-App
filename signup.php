
<?php
    // start session
    session_start();
    // connect to database
    include("db_connection.php");

    //define error messages
    $missingUsername = "<p><strong>Por favor insira um nome de usuário.</strong></p>";
    $missingEmail = "<p><strong>Por favor insira um email.</strong></p>";
    $invalidEmail = "<p><strong>Email inserido inválido.</strong></p>";
    $missingPassword = "<p><strong>Por favor insira uma senha.</strong></p>";
    $invalidPassword = "<p><strong>Sua senha deve conter pelo menos 6 caracteres e incluir 1 letra maiúscula e 1 número.</strong></p>";
    $differentPassword = "<p><strong>As senhas não correspondem.</strong></p>";
    $missingPassword2 = "<p><strong>Por favor confirme sua senha.</strong></p>";

    //get username
    if(empty($_POST["userName"])){
        $errors .= $missingUsername;
    } else {
        $username = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    }

    //get email
    if(empty($_POST["email"])){
        $errors .= $missingEmail;
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidEmail;
        }
    }

    //get password
    if(empty($_POST["password"])){
        $errors .= $missingPassword;
    } elseif (!(strlen($_POST["password"]) > 6 and preg_match('/[A-Z]/',$_POST["password"]) and
    preg_match('/[a-z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]))){
        $errors .= $invalidPassword;
    } else {
        $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);

        if(empty($_POST["password2"])){
            $errors .= $missingPassword2;
        } else {
            $password2 = filter_var($_POST["password2"],FILTER_SANITIZE_STRING);

            if($password !== $password2) {
                $errors .= $differentPassword;
            }
        }
    }

    // If there are any errors print Error
    if($errors){
        $resultMessage = "<div class='alert alert-danger'>" . $errors . "</div>";
        echo $resultMessage;
    }

    // ---- No errors -----
    // Prepare variables for queries
    $username = mysqli_real_escape_string($link, $username);
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);

    //If username exists in the users table, print error
    //Obs: to use php variable in the statement, need double quotes
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>Erro ao rodar a query!</div>";
        exit;
    }
    $results = mysqli_num_rows($result);
    if($results){
        echo "<div class='alert alert-danger'>Esse nome de usuário já está registrado!</div>";
        exit;
    }
    // If email exists in the users table, print error
    //If username exists in the users table, print error
    //Obs: to use php variable in the statement, need double quotes
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>Erro ao rodar a query!</div>";
        //echo "<div class='alert alert-danger'>" . mysqli_error($link) ."</div>";
        exit;
    }
    $results = mysqli_num_rows($result);
    if($results){
        echo "<div class='alert alert-danger'>Esse email já está registrado!</div>";
        exit;
    }

    //Create a unique activation code
    // 16bytes -> 1byte = 8bits
    // 16 bytes = 16*8 = 128 bits
    // 16 * 16 * .. -> 32 char
    $activationKey = bin2hex(openssl_random_pseudo_bytes(16));

    //Insert user details and activation code in the users table




 ?>
