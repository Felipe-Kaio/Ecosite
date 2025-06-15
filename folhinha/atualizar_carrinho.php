<?php
session_start();
include_once("code/carrinho_functions.php");

if (isset($_POST['produto_id']) && isset($_POST['quantidade'])) {
    $produto_id = intval($_POST['produto_id']);
    $quantidade = intval($_POST['quantidade']);
    
    if ($quantidade > 0) {
        atualizarQuantidade($produto_id, $quantidade);
    } else {
        removerDoCarrinho($produto_id);
    }
}

header("Location: carrinho.php");
exit();
?>