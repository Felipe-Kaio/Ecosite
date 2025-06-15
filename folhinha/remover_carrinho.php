<?php
session_start();
include_once("code/carrinho_functions.php");

if (isset($_GET['id'])) {
    $produto_id = intval($_GET['id']);
    removerDoCarrinho($produto_id);
}

header("Location: carrinho.php");
exit();
?>