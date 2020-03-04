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
    <legend>Alterar Usuario</legend>

    <form action="logica_usuario.php" method="post">
      <p><input type="text" name="nome" id="nome" value="<?php echo $usuario['nome']; ?>"></p>
      <p><input type="text" name="email" id="email" value="<?php echo $usuario['email']; ?>"></p>
      <p><input type="password" name="senha" id="senha" value="<?php echo $usuario['senha']; ?>"></p>
      <p><input type="text" name="endereco" id="endereco" value="<?php echo $usuario['endereco']; ?>"></p>
      <p><input type="text" name="telefone" id="telefone" value="<?php echo $usuario['telefone']; ?>"></p>
      <p><input type="text" name="dt_nascimento" id="dt_nascimento" value="<?php echo $usuario['dt_nascimento']; ?>"> </p>
      <p><input type="hidden" id='id' name='id' value="<?php echo $usuario['id']; ?>">
      <button type="submit" id='alterar' name='alterar' value="Alterar">Alterar</button></p>        
    </form>
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

</style>