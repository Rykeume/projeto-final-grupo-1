<?php 
    require_once dirname(__DIR__) . "/utils/auth.php";
    requerLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abertura de Chamado - Sistema de Suporte</title>
<link rel="stylesheet" href="./criarChamado.css"/>
<script>
// function enviarChamado(event) {
//     event.preventDefault(); // evita recarregar a página

//     const categoria = document.getElementById('categoria').value.trim();
//     const titulo = document.getElementById('titulo').value.trim();
//     const descricao = document.getElementById('descricao').value.trim();
//     const prioridade = document.getElementById('prioridade').value.trim();

//     if (!titulo || !descricao) {
//         alert('Por favor, preencha todos os campos obrigatórios.');
//         return;
//     }

//     // Aqui seria o envio ao backend (ex: via fetch)
//     console.log('Chamado enviado:', { categoria, titulo, descricao, prioridade });
//     document.getElementById('form-chamado').reset();
//     document.querySelector('.sucesso').style.display = 'block';
// }
</script>
</head>

<body>
<header>
    <h1>🧾 Abertura de Chamado</h1>
</header>

<main>
    <?php if (isset($_GET['erro'])): ?>
      <div class="erro-msg">Houve um erro ao tentar criar o chamado. Tente novamente.</div>
    <?php endif; ?>
    <h2>Descreva sua solicitação</h2>
    <p>Preencha o formulário abaixo para enviar sua demanda ao suporte técnico.</p>

    <form id="form-chamado" action="../controllers/backend.php" method="POST">
        <input type="hidden" name="acao" value="criarChamado" />
        <label for="categoria">Categoria do chamado:</label>
        <select id="categoria" required>
            <option value="software">💻 Software de Computador</option>
            <option value="dispositivos">📱 Dispositivos Móveis</option>
            <option value="impressoras">🖨️ Impressoras e Outros Dispositivos</option>
            <option value="rede">🌐 Rede e Conectividade</option>
            <option value="aplicacoes">🏢 Aplicações Empresariais</option>
            <option value="documentacao">📄 Documentação de Processos</option>
            <option value="seguranca">🔒 Segurança e Acesso</option>
            <option value="telefone">📞 Telefone e Correio de Voz</option>
            <option value="outros">⚙️ Outros</option>
        </select>

        <label for="titulo">Título do chamado:</label>
        <input type="text" id="titulo" placeholder="Ex: Erro ao abrir o sistema" required>

        <label for="descricao">Descrição detalhada:</label>
        <textarea id="descricao" placeholder="Descreva o problema ou solicitação com detalhes..." required></textarea>

        <label for="prioridade">Prioridade:</label>
        <select id="prioridade">
            <option value="baixa">Baixa</option>
            <option value="media" selected>Média</option>
            <option value="alta">Alta</option>
        </select>

        <button type="submit">🚀 Enviar Solicitação</button>
        <button type="button" class="voltar" onclick="window.history.back()">⬅️ Voltar</button>
    </form>

    <div class="sucesso">✅ Seu chamado foi enviado com sucesso! A equipe de suporte entrará em contato em breve.</div>
</main>

<script>
window.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);
  const categoriaURL = params.get('categoria');

  if (categoriaURL) {
    const select = document.getElementById('categoria');
    select.value = categoriaURL;
  }
});
</script>

</body>
</html>
