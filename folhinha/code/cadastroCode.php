
<?php



if(isset($_POST['btn'])){
include_once('code/conexao.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

//verifica se a senha possui menos de 6 números
if (strlen($senha) < 6) {
    $erros[] = "A senha deve ter pelo menos 6 caracteres.";
}
$resultado = mysqli_query($conexao, "SELECT cpf FROM usuarios WHERE email = '$email'");

if (mysqli_num_rows($resultado) > 0) {
    $erros[] = "Este e-mail já está cadastrado.";
}

$resultado = mysqli_query($conexao, "SELECT cpf FROM usuarios where cpf = '$cpf'");
if (mysqli_num_rows($resultado) > 0) {
    $erros[] = "Este cpf já está cadastrado.";
}

if (empty($erros)) {

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);


$sql = mysqli_query($conexao, "INSERT INTO usuarios (nome, cpf, email, telefone, senha) 
VALUES('$nome', '$cpf', '$email', '$telefone', '$senha_hash')");

} 
}


?>
