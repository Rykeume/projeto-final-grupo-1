<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Painel do Usuário - Sistema de Chamados</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f5f6fa;
        margin: 0;
        padding: 0;
    }
    header {
        background: linear-gradient(to right, rgb(20,147, 220), rgb(17,54,71));
        color: #fff;
        padding: 15px;
        text-align: center;
    }
    nav {
        background-color: #072A3D;
        padding: 10px;
        text-align: center;
    }
    nav a {
        color: white;
        margin: 0 15px;
        text-decoration: none;
        font-weight: bold;
    }
    nav a:hover {
        text-decoration: underline;
    }
    main {
        padding: 20px;
        max-width: 800px;
        margin: 20px auto;
        background: white;
        border-radius: 6px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        border-bottom: 2px solid #718093;
        padding-bottom: 5px;
        color: #2f3640;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    table, th, td {
        border: 1px solid #dcdde1;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background: #f1f2f6;
    }
    input, textarea, select, button {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border-radius: 4px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background: #44bd32;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }
    button:hover {
        background: #4cd137;
    }
    .hidden {
        display: none;
    }
</style>

<script>
function mostrarSecao(secao) {
    // Esconde todas as seções principais
    document.querySelectorAll("main > section").forEach(s => s.classList.add("hidden"));
    // Mostra apenas a seção selecionada
    document.getElementById(secao).classList.remove("hidden");
}
</script>
</head>
<body>

<header>
    <h1>Tecnologia da Informação</h1>
</header>

<nav>
    <a href="#" onclick="mostrarSecao('painel')">🏠 Painel</a>
    <a href="#" onclick="mostrarSecao('notificacoes')">🔔 Notificações</a>
    <a href="#" onclick="mostrarSecao('meus')">📋 Meus Chamados</a>
    <a href="#" onclick="mostrarSecao('perfil')">👤 Meu Perfil</a>
    <a href="http://localhost/Help_Desk/login.php" onclick="alert('Sessão encerrada!')">🚪 Sair</a>
</nav>

<main>
    <!-- Painel inicial -->
    <section id="painel">
        <h2>Bem-vindo!</h2>
        <p>Escolha abaixo para registrar uma nova solicitação ou acima para administrar seus chamados.</p>

        <!-- SEÇÃO: Categorias de Chamado -->
        <section id="chamados" class="chamados-categorias">
          <h2>Selecione o tipo de chamado</h2>
          <div class="categoria-container">

            <div class="categoria-item" data-tipo="software">
              <div class="icone">💻</div>
              <span>Software de Computador</span>
            </div>

            <div class="categoria-item" data-tipo="dispositivos">
              <div class="icone">📱</div>
              <span>Dispositivos Móveis</span>
            </div>

            <div class="categoria-item" data-tipo="impressoras">
              <div class="icone">🖨️</div>
              <span>Impressoras e Outros Dispositivos</span>
            </div>

            <div class="categoria-item" data-tipo="rede">
              <div class="icone">🌐</div>
              <span>Rede e Conectividade</span>
            </div>

            <div class="categoria-item" data-tipo="aplicacoes">
              <div class="icone">🏢</div>
              <span>Aplicações Empresariais</span>
            </div>

            <div class="categoria-item" data-tipo="documentacao">
              <div class="icone">📄</div>
              <span>Documentação de Processos</span>
            </div>

            <div class="categoria-item" data-tipo="seguranca">
              <div class="icone">🔒</div>
              <span>Segurança e Acesso</span>
            </div>

            <div class="categoria-item" data-tipo="telefone">
              <div class="icone">📞</div>
              <span>Telefone e Correio de Voz</span>
            </div>

            <div class="categoria-item" data-tipo="outros">
              <div class="icone">⚙️</div>
              <span>Outros</span>
            </div>

          </div>
        </section>
    </section>

    <!-- Notificações -->
    <section id="notificacoes" class="hidden">
        <h2>Notificações</h2>
        <p>Confira abaixo as atualizações mais recentes dos seus chamados:</p>
        <ul>
            <li><strong>Chamado #102</strong> foi resolvido com sucesso.</li>
            <li><strong>Chamado #107</strong> está em andamento.</li>
            <li><strong>Chamado #110</strong> recebeu nova resposta.</li>
        </ul>
    </section>

    <!-- Meus chamados -->
    <section id="meus" class="hidden">
        <h2>Meus Chamados</h2>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Prioridade</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Erro ao acessar o sistema</td><td>Alta</td><td>Aberto</td></tr>
                <tr><td>Solicitação de nova conta</td><td>Média</td><td>Em andamento</td></tr>
                <tr><td>Dúvida sobre relatório</td><td>Baixa</td><td>Resolvido</td></tr>
            </tbody>
        </table>
    </section>

    <!-- Perfil -->
    <section id="perfil" class="hidden">
        <h2>Meu Perfil</h2>
        <form>
            <label>Nome:</label>
            <input type="text" value="João da Silva">
            <label>Email:</label>
            <input type="email" value="joao@email.com">
            <br>
            <button type="submit">Salvar Alterações</button>
        </form>
    </section>
</main>

<!-- ESTILO das categorias -->
<style>
  .chamados-categorias {
    text-align: center;
    font-family: Arial, sans-serif;
    margin: 30px auto;
  }
  .chamados-categorias h2 {
    margin-bottom: 15px;
    color: #333;
  }
  .categoria-container {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    margin-top: 15px;
  }
  .categoria-item {
    background: #f0f2f5;
    border: 2px solid transparent;
    border-radius: 10px;
    padding: 20px;
    width: 160px;
    cursor: pointer;
    transition: 0.2s;
  }
  .categoria-item:hover {
    background: #e4e9ef;
    transform: translateY(-3px);
  }
  .categoria-item.selecionado {
    border-color: #007bff;
    background: #e7f1ff;
  }
  .categoria-item .icone {
    font-size: 30px;
    margin-bottom: 10px;
  }
  .categoria-item span {
    display: block;
    font-size: 14px;
    color: #333;
  }
</style>

<!-- FUNCIONALIDADE das categorias -->
<script>
  const categorias = document.querySelectorAll('.categoria-item');

  categorias.forEach(item => {
    item.addEventListener('click', () => {
      const tipo = item.dataset.tipo;

      // Redireciona para a página de abertura de chamado
      window.location.href = `http://localhost/Help_Desk/Seleção%20de%20chamados/?categoria=${tipo}`;
    });
  });
</script>

</body>
</html>