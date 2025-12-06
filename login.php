<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - IntraHelp</title>
  <style>
    /*  RESET E ESTILO BASE */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, rgb(20,147,220), rgb(17,54,71));
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* CONTAINER PRINCIPAL */
    .login-box {
      background: rgba(0, 0, 0, 0.6);
      padding: 40px 50px;
      border-radius: 15px;
      width: 100%;
      max-width: 400px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .login-box h1 {
      font-size: 2em;
      margin-bottom: 5px;
    }

    .login-box p {
      font-size: 0.9em;
      color: #dcdde1;
      margin-bottom: 25px;
    }

    /* CAMPOS DE LOGIN */
    .input-box {
      width: 100%;
      margin-bottom: 15px;
      text-align: left;
    }

    .input-box label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      font-size: 0.9em;
    }

    .input-box input {
      width: 100%;
      padding: 12px 14px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
    }

    .input-box input:focus {
      border-color: dodgerblue;
      box-shadow: 0 0 8px rgba(30, 144, 255, 0.5);
    }

    /* BOTÕES */
    .btn {
      display: block;
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(to right, dodgerblue, rgb(14, 100, 140));
      color: #fff;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
    }

    .btn:hover {
      transform: scale(1.02);
      background: linear-gradient(to right, rgb(30, 144, 255), rgb(17, 54, 71));
    }

    

    /* RODAPÉ */
    .footer-text {
      margin-top: 25px;
      font-size: 0.85em;
      color: #ccc;
    }

    .footer-text a {
      color: dodgerblue;
      text-decoration: none;
      font-weight: bold;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }

    /*  ASSINATURA  */
    .assinatura {
      position: absolute;
      bottom: 15px;
      font-size: 0.8em;
      opacity: 0.7;
    }

  </style>
</head>
<body>

  <div class="login-box">
    <h1>IntraHelp</h1>
    <p>Sistema de Chamados Internos</p>

    <form action="processar_formulario.php" method="POST">
      <div class="input-box">
        <label for="nome">Nome de Usuário ou E-mail</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu login" required>
      </div>

      <div class="input-box">
        <label for="password">Senha</label>
        <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
      </div>
    <br>
      <button type="submit" class="btn"> Entrar</button>
    </form>

    <div class="footer-text">
      <p>Esqueceu seu acesso? <a href="../Recuperar_acesso/recuperacao.php">Clique aqui</a></p>
    </div>
  </div>

  <div class="assinatura">By rykeume.dev</div>

</body>
</html>