<?php
include("code/loginCode.php");
include("code/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Sustainfy - Login</title>

</head>
<body>
    <div class="leaf-decoration leaf-1">
        <svg width="150" height="150" viewBox="0 0 24 24" fill="#2e8b57">
            <path d="M12 3c-3.9 0-7 3.1-7 7 0 2.4 1.2 4.6 3.1 5.8-0.3 1.3-0.7 2.6-1.1 3.8-0.3 0.9-0.1 1.8 0.5 2.5 0.6 0.7 1.5 1 2.5 1 3.3 0 6-2.7 6-6 0-0.6-0.1-1.2-0.2-1.8 1.8-1.3 3.2-3.3 3.2-5.7 0-3.9-3.1-7-7-7z"/>
        </svg>
    </div>
    
    <div class="login-container">
        <div class="logo">
            <?php
            echo $nome;
            ?>
            <h1>Sustainfy</h1>
            <p>Conecte-se à sua conta e continue sua jornada ecológica</p>
        </div>
        
        <form class="login-form" action="login.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
            </div>
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="••••••••" required>
            </div>
            
            
            <button type="submit" class="login-btn" name="btns">Entrar</button>
            
            <div class="divider"></div>
   
            
            <div class="register-link">
                Não tem uma conta? <a href="cadastro.php">Registre-se</a>
            </div>
        </form>
    </div>
    
    <div class="leaf-decoration leaf-2">
        <svg width="150" height="150" viewBox="0 0 24 24" fill="#2e8b57">
            <path d="M17 8C8 10 5.9 16.2 4 19.9c-0.5 1-0.3 2.2 0.5 3 0.7 0.7 1.7 1 2.7 0.8 3.6-0.7 6.8-3.2 8.8-6.1 1.1-1.6 2.6-2.9 4.2-3.7 1.6-0.8 3.3-1.2 5-1.2v-4.8l-4.5 1.7-0.7-1.7 6.2-2.3v6.8c-1.7 0-3.4 0.4-4.9 1.2-1.5 0.8-2.8 2-3.8 3.4-1.7 2.5-4.4 4.5-7.4 5.1 1.3-2.9 2.8-7.4 0.6-11.1 2.6 1.5 5.3 2.1 7.9 1.8 2.6-0.3 5-1.4 6.5-3.2-1.4 0.5-2.9 0.7-4.4 0.5z"/>
        </svg>
    </div>
</body>
</html>