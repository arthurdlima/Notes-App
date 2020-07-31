<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Notas Online</title>
</head>
<body>
    <!-- Nav -->
    <div class="container-fluid px-0">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark px-0 py-0 nav-style">
            <a class="navbar-brand" href="#">Notas Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <!-- to use d-flex correctly, set width to 100% -->
                <ul class="navbar-nav w-100 d-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#loginModal" data-toggle="modal">Entrar</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Login form -->
    <form method="post" id="loginForm">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Entrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Will be used later in javascript, php and ajax-->
                        <div id="loginMessage">

                        </div>

                        <div class="form-group">
                            <label for="loginEmail" class="sr-only">Email:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="loginEmail" type="text" class="form-control" name="loginEmail"
                            placeholder="Endereço de email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="loginPassword" class="sr-only">Password:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="loginPassword" type="password" class="form-control" name="loginPassword"
                            placeholder="Senha" maxlength="30">
                        </div>
                        <div class="form-check w-100 d-flex">
                            <div class="mr-auto">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">Lembrar senha</label>
                            </div>
                            <a href="#forgotPasswordModal" data-toggle="modal" data-dismiss="modal" >Esqueceu a senha?</a>
                        </div>
                    </div>
                    <div class="modal-footer w-100 d-flex">
                        <button type="button" class="btn btn-secondary mr-auto" data-target="#signUpModal" data-toggle="modal" data-dismiss="modal">Registrar</button>
                        <div class="">
                            <button class="btn btn-primary" name="login" type="submit" value="Login">Entrar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- forgot password -->
    <form method="post" id="forgotPasswordForm">
        <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Esqueceu sua senha? insira seu email:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Will be used later in javascript, php and ajax-->
                        <div id="forgotPasswordMessage">

                        </div>

                        <div class="form-group">
                            <label for="forgotEmail" class="sr-only">Email:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="forgotEmail" type="text" class="form-control" name="forgotEmail"
                            placeholder="Endereço de email" maxlength="50">
                        </div>
                    </div>
                    <div class="modal-footer w-100 d-flex">
                        <button type="button" class="btn btn-secondary mr-auto" data-target="#signUpModal" data-toggle="modal" data-dismiss="modal">Registrar</button>
                        <div class="">
                            <button class="btn btn-primary" name="forgotPassword" type="submit" value="Submit">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Sign up form -->
    <form method="post" id="signUpForm">
        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Crie sua conta e comece a usar Notas Online!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Will be used later in javascript, php and ajax-->
                        <div id="signUpMessage">

                        </div>

                        <div class="form-group">
                            <label for="userName" class="sr-only">Username:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="userName" type="text" class="form-control" name="userName"
                            placeholder="Nome de usuário" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="email" type="text" class="form-control" name="email"
                            placeholder="Endereço de email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="password" type="password" class="form-control" name="password"
                            placeholder="Escolha uma senha" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Password2:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="password2" type="password" class="form-control" name="password2"
                            placeholder="Confirme a senha" maxlength="30">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="signup" type="submit" value="Sign up">Criar conta</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Jombotron with sign up button -->
    <div class="jumbotron" id="myContainer">
        <h1 class="display-4">Notas Online!</h1>
        <p class="lead">Use Notas Online para gerenciar suas anotações.</p>
        <hr class="my-4">
        <p>Crie sua conta agora!</p>
        <a class="btn btn-primary btn-lg" data-target="#signUpModal" data-toggle="modal" href="#" role="button">Criar conta</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>Arthur Lima Copyright &copy; 2020</p>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- changed bootstrap jquery to full version from cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="index.js"></script>

</body>
</html>
