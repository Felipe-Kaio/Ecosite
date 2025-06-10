<?php
session_start();
include_once("code/conexao.php");

$erros = [];

if (isset($_POST["btns"])) {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        $erros[] = "Preencha todos os campos.";
    } else {
        // Consulta segura com prepared statement
        $stmt = $conexao->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado && $resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            if (password_verify($senha, $usuario['senha'])) {
                // Login bem-sucedido
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];
                header("Location: loja.php");
                exit();
            } else {
                $erros[] = "E-mail ou senha incorretos.";
            }
        } else {
            $erros[] = "E-mail ou senha incorretos.";
        }
    }
}
?>

<!-- HTML opcional para exibir os erros -->
<?php if (!empty($erros)): ?>
    <div class="erro-login" style="color: red; text-align: center; margin-top: 10px;">
        <?php foreach ($erros as $erro): ?>
            <p><?php echo $erro; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
