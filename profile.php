<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Perfil</title>
    <style media="screen">
        #container {
            margin-top: 10rem;
        }
        .buttonss {
            margin-bottom: 1rem;
        }
        #notePad, #done, #allNotes {
            display: none;
        }
        textarea {
            width: 100%;
            max-width: 100%;
            font-size: 1.2rem;
            line-height: 1.6rem;

            border-left-width: 1.2rem;
            border-color: grey;
            color: grey;
            padding: 1rem;
        }
        tr {
            cursor: pointer;
        }
    </style>
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
                        <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <!-- text-nowrap to prevent line break -->
                        <a class="nav-link text-nowrap" href="#">Minhas Notas </a>
                    </li>
                </ul>
                <!-- to use d-flex correctly, set width to 100% -->
                <ul class="navbar-nav w-100 d-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuário: <b>nome</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Update username -->
    <form method="post" id="updateUsernameForm">
        <div class="modal fade" id="updateUsername" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Nome de Usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Will be used later in javascript, php and ajax-->
                        <div id="loginMessage">

                        </div>

                        <div class="form-group">
                            <label for="userName" class="sr-only">Username:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="userName" type="text" class="form-control" name="userName" maxlength="30"
                            value="Nome de Usuário">
                        </div>
                    </div>
                    <div class="modal-footer w-100 d-flex">
                        <div class="">
                            <button class="btn btn-primary" name="updateUsername" type="submit" value="Submit">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Update email -->
    <form method="post" id="updateEmailForm">
        <div class="modal fade" id="updateEmail" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Will be used later in javascript, php and ajax-->
                        <div id="loginMessage">

                        </div>

                        <div class="form-group">
                            <label for="email" class="sr-only">Email:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="email" type="text" class="form-control" name="email" maxlength="50"
                            value="Email">
                        </div>
                    </div>
                    <div class="modal-footer w-100 d-flex">
                        <div class="">
                            <button class="btn btn-primary" name="updateEmail" type="submit" value="Submit">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Update password -->
    <form method="post" id="updatePasswordForm">
        <div class="modal fade" id="updatePassword" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Senha</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Will be used later in javascript, php and ajax-->
                        <div id="loginMessage">

                        </div>

                        <div class="form-group">
                            <label for="currentPassword" class="sr-only">Senha Atual:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="currentPassword" type="password" class="form-control" name="currentPassword" maxlength="30"
                            placeholder="Senha Atual">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Nova Senha:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="password" type="password" class="form-control" name="password" maxlength="30"
                            placeholder="Nova Senha">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirme Senha:</label>
                            <!-- the id is used, in this case, for the for label-->
                            <input id="password2" type="password" class="form-control" name="password2" maxlength="30"
                            placeholder="Confirme Senha">
                        </div>
                    </div>
                    <div class="modal-footer w-100 d-flex">
                        <div class="">
                            <button class="btn btn-primary" name="updateUsername" type="submit" value="Submit">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Container -->
    <div class="container" id="container">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-hover table-light table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" colspan="2">Configurações da Conta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-target="#updateUsername" data-toggle="modal">
                                <th scope="row">Nome do Usuário</td>
                                <td>value</td>
                            </tr>
                            <tr data-target="#updateEmail" data-toggle="modal">
                                <th scope="row">Email</td>
                                <td>value</td>
                            </tr>
                            <tr data-target="#updatePassword" data-toggle="modal">
                                <th scope="row">Senha</td>
                                <td>Hidden</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>Arthur Lima Copyright &copy; 2020</p>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
