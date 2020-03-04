<html>
    
    <?php
      include_once('../conecta.php');
      include_once('../Controllers/controllerUsuario.php');
    ?>
    <link rel="stylesheet" href="">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <section class="userCard">
    <fieldset>
    <legend>Cadastrar Usuários</legend>
    <section class="userCardLight">
    
    
    
      <form action="../Model/modelUsuario.php" method="post">
        <p><input type="text"     name="nome"           placeholder="NOME" ></p>
        <p><input type="text"     name="email"          placeholder="EMAIL"></p>
        <p><input type="password" name="senha"          placeholder="SENHA"></p>
        <p><input type="text"     name="endereco"       placeholder="ENDEREÇO"></p>
        <p><input type="text"     name="telefone"       placeholder="TELEFONE"></p>
        <p><input type="date"     name="dt_nascimento"  placeholder="DATA DE NASCIMENTO">
        <p><button type="submit"  name='cadastrar' value="Cadastrar"> Cadastrar </button></p>      
      </form>
    
   
    </section>
    </fieldset>
    </section>

    <section class="userCard">
    <fieldset>
    <legend>Lista de Usuários</legend>

    <?php

        $usuarios = listarUsuarios($conexao);

        if(empty($usuarios)){
            ?>
                <section>
                    <p>Não há usuários cadastrados.</p>
                </section>
            <?php
        }
        foreach($usuarios as $usuario){
                 
            ?>
                <section class="userCardLight">
                    
                    <p>Nome: <?php echo $usuario['nome']; ?></p>
                    <p>Email <?php echo $usuario['email']; ?></p>
                    <p>Endereço: <?php echo $usuario['endereco']; ?></p>
                    <p>Telefone: <?php echo $usuario['telefone']; ?></p>
                    <p>Data Nascimento: <?php echo $usuario['dt_nascimento']; ?></p>
                    <form action="../Model/modelUsuario.php" method="post">
                        <P><button type="submit" name="editar" value="<?php echo $usuario['id']; ?>"> Editar </button> 
                        <button type="submit" name="deletar" value="<?php echo $usuario['id']; ?>"> Deletar </button></P>  
                    </form>                                        
                </section>
            <?php
        }
    ?>

    </fieldset>
    </section>

</body>

<script>
  
</script>

</html>



<style>

  body{
    background-color: #5f5e69;;
  }

  .userCard{
    background-color: #a2a2a2;
    border-radius: 3px;
    padding: 5px;
    margin: 10px;
  }

  input{
    width: 50%;
    text-decoration: hidden;
  }

  p{
    margin:10px;
  }

  .userCardLight{
    background-color: white;
    border-radius: 3px;
    padding: 5px;
    margin: 10px;
  }

</style>