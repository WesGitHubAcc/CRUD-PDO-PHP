<?php
 
    function inserirUsuario($conexao, $array){

       try {
            $usuarios = $conexao->prepare('INSERT INTO usuario (nome, email, senha, telefone, dt_nascimento, endereco) VALUES (?, ?, ?, ?, ?, ?)');
            $query = $usuarios->execute($array);
            return $query;

        }catch(PDOException $event){
            echo 'Error: ' . $event->getMessage();
        }
    }

    function listarUsuarios($conexao){

        try {
          $usuarios = $conexao->prepare('SELECT * FROM usuario');      
          $usuarios->execute();
          $query = $usuarios->fetchAll(); 
          return $query;
      
        }catch(PDOException $event){
              echo 'Error: ' . $event->getMessage();
        }  
  
    }

    function deletarUsuario($conexao, $array){
        try {
            $usuarios = $conexao->prepare('DELETE FROM usuario WHERE id = ?');
            $query = $usuarios->execute($array);
            return $query;

        }catch(PDOException $event){
            echo 'Error: ' . $event->getMessage();
        }
    }

    function alteraUsuario($conexao, $array){
        try {
            $usuarios = $conexao->prepare('UPDATE usuarios SET nome= ?, email = ?, senha= ?, endereco= ?, telefone= ?, dt_nascimento=? WHERE id = ?"');
            $query = $usuarios->execute($array);
            return $query;
            
        }catch(PDOException $event){
            echo 'Error: ' . $event->getMessage();
        }
    }

?>