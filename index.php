<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ico/Pão_2.ico" type="image/x-icon">
    <title>Sistema Pão Delícia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #F2f2f2;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>

</head>
<body>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="car-body p-3">
                        <h3 class="fw-bold mb-3 text-uppercase text-center">Pão Delícia</h3>
                        <p class="text-black-50 mb-1 text-center">Por favor insira seu login e senha!</p>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div>
                                <div class="mb-3">
                                    <label>Login:</label>
                                    <input type="text" name="usuario" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label>Senha:</label>
                                    <input type="password" name="senha" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>