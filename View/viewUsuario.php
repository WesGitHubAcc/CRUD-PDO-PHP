<html>
    
    <?php
      include_once('../conecta.php');
      include_once('../Controllers/controllerUsuario.php');
    ?>
    <link rel="stylesheet" href="">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <section>
    <fieldset>
    <legend>Cadastrar Usuários</legend>

      <form action="../Model/modelUsuario.php" method="post">
        <p><input type="text"     name="nome"           placeholder="NOME" ></p>
        <p><input type="text"     name="email"          placeholder="EMAIL"></p>
        <p><input type="password" name="senha"          placeholder="SENHA"></p>
        <p><input type="text"     name="endereco"       placeholder="ENDEREÇO"></p>
        <p><input type="text"     name="telefone"       placeholder="TELEFONE"></p>
        <p><input type="date"     name="dt_nascimento"  placeholder="DATA DE NASCIMENTO">
        <p><button type="submit"  name='cadastrar' value="Cadastrar"> Cadastrar </button></p>      
      </form>

    </fieldset>
    </section>

    <section class="userArea">
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
                <section class="userCard">
                    <p>Nome: <?php echo $usuario['nome']; ?></p>
                    <p>Email <?php echo $usuario['email']; ?></p>
                    <p>Endereço: <?php echo $usuario['endereco']; ?></p>
                    <p>Telefone: <?php echo $usuario['telefone']; ?></p>
                    <p>Data Nascimento: <?php echo $usuario['dt_nascimento']; ?></p>
                    <form action="" method="post">
                        <button type="submit" name="editar" value="<?php echo $usuario['id']; ?>"> Editar </button>
                        <button type="submit" name="deletar" value="<?php echo $usuario['id']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
                    </form>
                    <br>                                                 
                </section>
            <?php
        }
    ?>

    </fieldset>
    </section>

</body>
</html>

<style>
  .userCard{
    background-color: #f1eeee;
    border-radius: 3px;
  }

</style>