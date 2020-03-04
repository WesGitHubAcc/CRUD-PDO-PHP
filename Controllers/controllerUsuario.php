<?php
 
    function inserirUsuario($conexao, $array){
       try {
            $usuarios = $conexao->prepare("insert into usuario (nome, email, senha, endereco, telefone, dt_nascimento) values (?, ?, ?, ?, ?, ?)");
            $query = $usuarios->execute($array);
            return $query;
            
        }catch(PDOException $event) {
            echo 'Error: ' . $event->getMessage();
        }
    }

?>