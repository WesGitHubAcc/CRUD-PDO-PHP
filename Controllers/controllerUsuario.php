<?php
 
    function inserirUsuario($conexao, $array){

       try {
            $usuarios = $conexao->prepare("INSERT INTO usuario (nome, email, senha, telefone, dt_nascimento, endereco) VALUES (?, ?, ?, ?, ?, ?)");
            $query = $usuarios->execute($array);
            echo 'cadastrado com sucesso!';
            return $query;
            
        }catch(PDOException $event) {
            echo 'Error: ' . $event->getMessage();
        }
    }

?>