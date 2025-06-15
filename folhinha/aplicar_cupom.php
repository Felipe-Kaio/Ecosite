<?php
session_start();

if (isset($_POST['cupom'])) {
    $cupom = strtoupper(trim($_POST['cupom']));
    
    if ($cupom === 'ECO10') {
        $_SESSION['cupom'] = 'ECO10';
        $_SESSION['mensagem_cupom'] = "Cupom aplicado com sucesso! 10% de desconto.";
    } else {
        $_SESSION['erro_cupom'] = "Cupom inválido ou expirado.";
    }
}

header("Location: carrinho.php");
exit();
?>