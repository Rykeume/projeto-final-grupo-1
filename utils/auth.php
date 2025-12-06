<?php
session_start();

function requerLogin() {
    if (!isset($_SESSION["usuario"])) {
        header("Location: login.php");
        exit;
    }
}

function usuarioLogado() {
    return $_SESSION["usuario"] ?? null;
}
