<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Acesso - IntraHelp</title>
  <style>
    /* RESET E BASE */
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
      overflow: hidden;
    }

    /* CONTAINER */
    .recovery-box {
      background: rgba(0, 0, 0, 0.6);
      padding: 40px 50px;
      border-radius: 15px;
      width: 100%;
      max-width: 420px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      animation: fadeIn 0.8s ease;
    }

    .recovery-box h1 {
      font-size: 2em;
      margin-bottom: 10px;
    }

    .recovery-box p {
      color: #dcdde1;
      font-size: 0.95em;
      margin-bottom: 25px;
      line-height: 1.4;
    }

    /* FORM */
    form {
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      font-size: 0.9em;
    }

    input[type="email"] {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
    }

    input[type="email"]:focus {
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
      margin-top: 15px;
    }

    .btn:hover {
      transform: scale(1.03);
      background: linear-gradient(to right, rgb(30, 144, 255), rgb(17, 54, 71));
    }

    .btn-voltar {
      background: transparent;
      border: 2px solid dodgerblue;
      color: dodgerblue;
    }

    .btn-voltar:hover {
      background: dodgerblue;
      color: white;
    }

    /* ANIMAÇÃO */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ASSINATURA */
    .assinatura {
      position: absolute;
      bottom: 15px;
      font-size: 0.8em;
      opacity: 0.7;
    }

  </style>
</head>
<body>

  <div class="recovery-box">
    <h1>Recuperar Acesso</h1>
    <p>Informe o e-mail cadastrado no sistema. Você receberá um link ou instruções para redefinir seu acesso.</p>

    <form action="enviar-recuperacao.php" method="POST">
      <label for="email">E-mail cadastrado:</label>
      <input type="email" id="email" name="email" placeholder="exemplo@empresa.com" required>

      <button type="submit" class="btn"> Enviar Solicitação</button>
    <button type="button" class="btn btn-voltar" onclick="window.location.href='http://localhost/Help_Desk/login.php'">Voltar ao Login
    </button>
    </form>
  </div>

  <div class="assinatura">By rykeume.dev</div>

</body>
</html>