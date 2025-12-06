<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Acesso - IntraHelp</title>
  <link rel="stylesheet" href="./recuperacao.css"/>
</head>
<body>

  <div class="recovery-box">
    <h1>Recuperar Acesso</h1>
    <p>Informe o e-mail cadastrado no sistema. Você receberá um link ou instruções para redefinir seu acesso.</p>

    <form action="enviar-recuperacao.php" method="POST">
      <label for="email">E-mail cadastrado:</label>
      <input type="email" id="email" name="email" placeholder="exemplo@empresa.com" required>

      <button type="submit" class="btn"> Enviar Solicitação</button>
    <button type="button" class="btn btn-voltar" onclick="window.location.href='../login.php'">Voltar ao Login
    </button>
    </form>
  </div>

  <div class="assinatura">By rykeume.dev</div>

</body>
</html>