<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abertura de Chamado - Sistema de Suporte</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f5f6fa;
        margin: 0;
        padding: 0;
    }
    header {
        background: linear-gradient(to right, rgb(20,147, 220), rgb(17,54,71));
        color: white;
        padding: 15px;
        text-align: center;
    }
    main {
        max-width: 700px;
        margin: 30px auto;
        background: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 20px;
    }
    h2 {
        border-bottom: 2px solid #718093;
        padding-bottom: 5px;
        color: #2f3640;
    }
    label {
        font-weight: bold;
        margin-top: 10px;
        display: block;
    }
    input, textarea, select, button {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }
    textarea {
        resize: vertical;
        min-height: 120px;
    }
    button {
        background-color: #44bd32;
        color: white;
        border: none;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
        margin-top: 15px;
    }
    button:hover {
        background-color: #4cd137;
    }
    .voltar {
        background-color: #353b48;
    }
    .voltar:hover {
        background-color: #2f3640;
    }
    .sucesso {
        background: #e7f9ed;
        border: 1px solid #27ae60;
        color: #27ae60;
        padding: 10px;
        border-radius: 5px;
        margin-top: 15px;
        display: none;
    }
</style>
<script>
function enviarChamado(event) {
    event.preventDefault(); // evita recarregar a página

    const categoria = document.getElementById('categoria').value;
    const titulo = document.getElementById('titulo').value.trim();
    const descricao = document.getElementById('descricao').value.trim();
    const prioridade = document.getElementById('prioridade').value;

    if (!titulo || !descricao) {
        alert('Por favor, preencha todos os campos obrigatórios.');
        return;
    }

    // Aqui seria o envio ao backend (ex: via fetch)
    console.log('Chamado enviado:', { categoria, titulo, descricao, prioridade });

    document.getElementById('form-chamado').reset();
    document.querySelector('.sucesso').style.display = 'block';
}
</script>
</head>

<body>
<header>
    <h1>🧾 Abertura de Chamado</h1>
</header>

<main>
    <h2>Descreva sua solicitação</h2>
    <p>Preencha o formulário abaixo para enviar sua demanda ao suporte técnico.</p>

    <form id="form-chamado" onsubmit="enviarChamado(event)">
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
