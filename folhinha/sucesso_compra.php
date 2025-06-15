<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra realizada com sucesso - Sustainfy</title>
    <link rel="stylesheet" href="css/carrinho.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar Premium -->
    <nav class="navbar">
        <a class="logo">Sustainfy</a>
    </nav>
    
    <div class="success-container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Compra realizada com sucesso!</h1>
        
        <?php if (isset($_SESSION['sucesso_compra'])): ?>
            <p><?php echo $_SESSION['sucesso_compra']; unset($_SESSION['sucesso_compra']); ?></p>
        <?php else: ?>
            <p>Obrigado por sua compra na Sustainfy!</p>
        <?php endif; ?>
        
        <p>Você receberá um e-mail com os detalhes do seu pedido.</p>
        
        <div class="success-actions">
            <a href="loja.php" class="btn-continue">
                <i class="fas fa-shopping-bag"></i> Continuar comprando
            </a>
            <a href="index.php" class="btn-home">
                <i class="fas fa-home"></i> Página inicial
            </a>
        </div>
    </div>
</body>
</html>