<?php 
  require_once dirname(__DIR__) . "/utils/auth.php";
  requerLogin();
  $usuario = usuarioLogado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Painel do Usuário - Sistema de Chamados internos</title>
<link rel="stylesheet" href="./painel.css"/>

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
    <a href="../controllers/backend.php?acao=sair" onclick="alert('Sessão encerrada!')">🚪 Sair</a>
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
        <h2>Meu Perfil, <?= htmlspecialchars($usuario['nome'])?></h2>
        <form method="POST" action="../controllers/backend.php">
          <input type="hidden" name="acao" value="alterarDados" />
            <label>Nome:</label>
            <input id="nomeNovo" type="text" name="nomeNovo" value="<?= htmlspecialchars($usuario['nome']) ?>">
            <label>Email:</label>
            <input id="emailNovo" type="email" name="emailNovo" placeholder="<?= htmlspecialchars($usuario['email']) ?>">
            <br>
            <button type="submit">Salvar Alterações</button>
        </form>
    </section>
</main>

<!-- FUNCIONALIDADE das categorias -->
<script>
  const categorias = document.querySelectorAll('.categoria-item');

  categorias.forEach(item => {
    item.addEventListener('click', () => {
      const tipo = item.dataset.tipo;

      // Redireciona para a página de abertura de chamado
      window.location.href = `./criarChamado.php?categoria=${tipo}`;
    });
  });
</script>

</body>
</html>