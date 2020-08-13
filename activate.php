<?php
    //user re-directed here. Sign up link contains two get
    // paramaters: email and activation key
    session_start();
    include("db_connection.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="style.css"> -->

     <title>Notas Online-Ativação</title>
 </head>
 <body>
     <h1>Ativação da conta:</h1>
     <?php
         if(!isset($_GET["email"]) || !isset($_GET["key"])){
             echo "<div class='alert alert-danger'>Ocorreu um erro. Por favor clique no
             link de ativação no seu email.</div>";
             exit;
         }
         //store in variables
         $email = $_GET["email"];
         $key = $_GET["key"];

         //prepare for query
         $email = mysqli_real_escape_string($link,$email);
         $key = mysqli_real_escape_string($link,$key);

         //Run query: set activation field to "activated" for the provided email
         $sql = "UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key') LIMIT 1";

         $result = mysqli_query($link, $sql);

         if(mysqli_affected_rows($link) == 1){
             echo "<div class='alert alert-success'> Sua conta foi ativada!</div>";
             echo "<a href='index.php' type='button' class='btn-lg btn-success'>Entrar</a>";
         } else {
             echo "<div class='alert alert-danger'> Sua conta não pode ser ativada...Tente
             novamente mais tarde.</div>";
         }
      ?>


     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- changed bootstrap jquery to full version from cdn -->
     <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


 </body>
 </html>
