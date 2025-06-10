<?php
if (isset($_POST['btn'])) {
    include_once('conexao.php');

    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $email = trim($_POST["email"]);
    $telefone = trim($_POST["telefone"]);
    $senha = $_POST["senha"];

    $erros = [];

    // Validação básica
    if (empty($nome) || empty($cpf) || empty($email) || empty($telefone) || empty($senha)) {
        $erros[] = "Preencha todos os campos.";
    }

    if (strlen($senha) < 6) {
        $erros[] = "A senha deve ter pelo menos 6 caracteres.";
    }

    // Verifica se e-mail já existe
    $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $erros[] = "Este e-mail já está cadastrado.";
    }

    // Verifica se CPF já existe
    $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE cpf = ?");
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $erros[] = "Este CPF já está cadastrado.";
    }

    if (empty($erros)) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere no banco
        $stmt = $conexao->prepare("INSERT INTO usuarios (nome, cpf, email, telefone, senha) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nome, $cpf, $email, $telefone, $senhaHash);

        if ($stmt->execute()) {
            // Redireciona pro login com sucesso
            header("Location: login.php");
            exit();
        } else {
            $erros[] = "Erro ao cadastrar. Tente novamente mais tarde.";
        }
    }

    // Se tiver erro, salva numa sessão pra exibir depois (opcional)
    if (!empty($erros)) {
        session_start();
        $_SESSION['cadastro_erros'] = $erros;
    }
}
?>
