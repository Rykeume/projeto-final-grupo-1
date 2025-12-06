<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - IntraHelp</title>  
  <link rel="stylesheet" href="./login.css"/>
</head>
<body>

  <div class="login-box">
    <h1>IntraHelp</h1>
    <p>Sistema de Chamados Internos</p>

    <form action="../controllers/backend.php" method="POST">
      <input type="hidden" name="acao" value="login" />
      <div class="input-box">
        <label for="nome">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Digite seu login" required>
      </div>

      <div class="input-box">
        <label for="password">Senha</label>
        <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
      </div>
    <br>
      <button type="submit" class="btn"> Entrar</button>
    </form>

    <div class="footer-text">
      <p>Esqueceu seu acesso? <a href="./recuperacao.php">Clique aqui</a></p>
    </div>
  </div>

  <div class="assinatura">By rykeume.dev</div>

</body>
</html>