<?php
session_start();
include_once('code/conexao.php');
include_once('code/carrinho_functions.php');

if (!isset($_SESSION['email'])) {
    $_SESSION['erro_compra'] = "Faça login para finalizar a compra";
    header("Location: login.php");
    exit();
}

// Obter ID do usuário
include_once('conexao.php');
$email = $_SESSION['email'];
$stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();
    $usuario_id = $usuario['id'];
    
    $pedido_id = finalizarCompra($usuario_id);
    
    if ($pedido_id) {
        $_SESSION['sucesso_compra'] = "Compra realizada com sucesso! Número do pedido: #$pedido_id";
        header("Location: sucesso_compra.php");
        exit();
    }
}

$_SESSION['erro_compra'] = "Erro ao finalizar a compra. Tente novamente.";
header("Location: carrinho.php");
exit();
?>