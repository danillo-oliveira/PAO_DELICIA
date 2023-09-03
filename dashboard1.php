<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ico/Pão_2.ico" type="image/x-icon">
    <title>Sistema Pão Delícia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Sistema Pão Delícia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo Usuário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Usuários</a>
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo Pedido</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Pedido</a>
                </li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php print "Olá, " .$_SESSION["nome"]; ?>
            </button>
            <ul class="dropdown-menu">
                <li><?php print "<a href='logout.php' class='dropdown-item'>Sair</a>"; ?></li>
            </ul>
        </div>


    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-usuario.php");
                    break;
                    case "listar";
                        include("listar-usuario.php");
                    break;
                    case "salvar";
                        include("salvar-usuario.php");
                    break;
                    case "editar";
                        include("editar-usuario.php");
                    break;
                    default:
                        print "<h1>Bem Vindos!</h1>";
                }
            ?>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>