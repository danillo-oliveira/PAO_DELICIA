<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $tipo = $_POST["tipo"];

            $sql = "INSERT INTO usuarios (nome, email, usuario, senha, tipo, data) VALUES ('{$nome}', '{$email}', '{$usuario}', '{$senha}', '{$tipo}', Now())";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível Cadastrar.');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $tipo = $_POST["tipo"];
            
            $sql = "UPDATE usuarios SET
                        nome = '{$nome}',
                        email = '{$email}',
                        usuario = '{$usuario}',
                        tipo = '{$tipo}',
                        dh_alteracao = Now()
                    WHERE
                        id = ".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível Editar.');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível Excluir.');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
    }
