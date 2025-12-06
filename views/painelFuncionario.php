<?php
    session_start();
    if(!isset($_SESSION['usuario']) || $_SESSION['usuario']['categoria'] !== 'Funcionario') {
        header("Location: ../index.php");
        exit;
    }
    $usuario = $_SESSION['usuario'];
    session_write_close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="container container-lg">
        <div style="text-align: left; margin-bottom: 20px;">
            <h1>Olá, Admin <?= htmlspecialchars($usuario['nome']) ?></h1>
            <p>Selecione uma opção para gerenciar o sistema.</p>
        </div>
        
        <div class="dashboard-grid">
            <a href="../views/relatorio.php" class="card-action">
                <span class="material-symbols-outlined">analytics</span>
                <span>Relatório de Usuários</span>
            </a>

            <a href="../views/cadastro.php" class="card-action">
                <span class="material-symbols-outlined">person_add</span>
                <span>Cadastrar Usuario</span>
            </a>

            <a href="../views/alterarUsuario.php" class="card-action">
                <span class="material-symbols-outlined">manage_accounts</span>
                <span>Meus Dados (Admin)</span>
            </a>
            
            </div>

        <div style="text-align: right; margin-top: 40px;">
            <a href="../controllers/backend.php?acao=sair" class="btn btn-danger" style="width: auto;">
                <span class="material-symbols-outlined" style="font-size: 18px;">logout</span> Sair do Sistema
            </a>
        </div>
    </div>
</body>
</html>