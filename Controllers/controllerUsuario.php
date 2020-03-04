<?php

require_once('../conecta.php');
 
    function inserirUsuario($conexao, $array){

       try {
            $usuarios = $conexao->prepare("INSERT INTO usuario (nome, email, senha, telefone, dt_nascimento, endereco) VALUES (?, ?, ?, ?, ?, ?)");
            $query = $usuarios->execute($array);
            return $query;
        }catch(PDOException $event) {
            echo 'Error: ' . $event->getMessage();
        }
    }

    function listarUsuarios($conexao){

        try {
          $usuarios = $conexao->prepare("SELECT * FROM usuario");      
          $usuarios->execute();
          $query = $usuarios->fetchAll(); 
          return $query;

          
        }catch(PDOException $event) {
              echo 'Error: ' . $event->getMessage();
        }  
  
    }

?>