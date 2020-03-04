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
        
        $array = array($nome, $email, $senha, $endereco, $telefone, $dt_nascimento);

        inserirUsuario($conexao, $array);

        print_r($array);

    }
?>