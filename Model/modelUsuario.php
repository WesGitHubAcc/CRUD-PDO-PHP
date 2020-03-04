<?php
    require_once('../conecta.php');
    require_once('../Controllers/controllerUsuario.php');

    #CADASTRA USUARIO

    if(isset($_POST['cadastrar'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaEncriptada = base64_decode($senha);
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $dt_nascimento = $_POST['dt_nascimento'];
        
        $array = array($nome, $email, $senhaEncriptada, $telefone, $dt_nascimento, $endereco);

        inserirUsuario($conexao, $array);

        header('Location: ../View/viewUsuario.php');

    }

    #DELETA USUARIO

    if(isset($_POST['deletar'])){

        $id = $_POST['deletar'];
        $array = array($id);

        deletarUsuario($conexao, $array);

        header('Location: ../View/viewUsuario.php');
    }

    #EDITA USUARIO

    if(isset($_POST['editar'])){

        $id = $_POST['editar'];
        $array = array($id);

        alterarUsuario($conexao, $array);

        header('Location: ../View/viewAlteraUsuario.php');
    }


?>