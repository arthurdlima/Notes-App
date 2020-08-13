<?php
    // start session
    session_start();
    // connect to database
    include("db_connection.php");
    //check user inputs
    $missingEmail = '<p><strong>Por favor insira seu email!</strong></p>';
    $missingPassword = '<p><strong>Por favor insira sua senha!</strong></p>';

    //get email
    if(empty($_POST["loginEmail"])){
        $errors .= $missingEmail;
    } else {
        $email = filter_var($_POST["loginEmail"], FILTER_SANITIZE_EMAIL);
    }

    //get password
    if(empty($_POST["loginPassword"])){
        $errors .= $missingPassword;
    } else {
        $password = filter_var($_POST["loginPassword"], FILTER_SANITIZE_STRING);
    }

    // If errors

    if($errors){
        $resultMessage = "<div class='alert alert-danger'>" . $errors . "</div>";
        echo $resultMessage;
    } else {
        // no errors
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
        //hash hpassword
        $password = hash('sha256', $password);

        // run queries -> check combination of email & password exists
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated' ";

        // return result object
        $result = mysqli_query($link, $sql);

        if(!$result){
            echo "<div class='alert alert-danger'>Erro ao rodar a query!</div>";
            exit;
        }
        //if email and password dont match print errors
        $count = mysqli_num_rows($result);
        if($count !== 1){
            echo "<div class='alert alert-danger'> Usuário ou senha errada!</div>";
        } else {
            //log user in
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            if (empty($_POST['rememberMe'])) {
                echo "success";
            } else {
                /*if user checks "remember me", then create two variables,
                store them in the rememberme table, and store them also in a cookie
                on the users computer*/
                $authenticator1 = bin2hex(openssl_random_pseudo_bytes(10));
                $authenticator2 = bin2hex(openssl_random_pseudo_bytes(20));
                //store vars in cookie
                setcookie(
                    "rememberme",
                    $cookieValue,

                );
            }
        }

    }








 ?>
