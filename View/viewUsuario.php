<html>
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

</body>
</html>