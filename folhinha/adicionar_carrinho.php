<?php
session_start();
include_once('code/conexao.php');
include_once('code/carrinho_functions.php');

if (isset($_POST['produto_id'])) {
    $produto_id = intval($_POST['produto_id']);
    $quantidade = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 1;
    
    if ($quantidade > 0) {
        adicionarAoCarrinho($produto_id, $quantidade);
    }
}

// Redirecionar de volta
header("Location: " . ($_SERVER['HTTP_REFERER'] ?? 'loja.php'));
exit();
?>

