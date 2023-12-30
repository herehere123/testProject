<?php
if (isset($_POST["senha"])) {

    include __DIR__ . "/sql/conexao.php";

    $usuarioEmail = $conn->real_escape_string($_POST["usuarioEmail"]);
    $senha = $conn->real_escape_string($_POST["senha"]);

    $sql = "SELECT * FROM USER WHERE EMAIL LIKE '$usuarioEmail' OR USUARIO LIKE '$usuarioEmail' LIMIT 1";
    $sql_query = $conn->query($sql) or die("Falha no código SQL.");
    $usuario = $sql_query->fetch_assoc();

    if (isset($usuario) && password_verify($senha, $usuario["SENHA"])) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["user"] = $usuario["ID_USER"];
        $_SESSION["nome"] = $usuario["USUARIO"];
        header("Location: ./startpage.php");
    } else {
        echo "Email ou senha inválida.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon." type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;800&display=swap" rel="stylesheet">
    <title>Projeto teste</title>
</head>

<body>
    <div class="pai">
        <div class="filho">
            <h1>Login</h1>
            <form action="?" method="POST" id="form">
                <input name="usuarioEmail" type="text" id="usuarioEmail" class="inputLogin" placeholder="Usuário ou Email" required>
                <input name="senha" type="password" id="senha" class="inputLogin" placeholder="Senha" required>
                <div>
                    <a href="#" class="esquecer-senha">Esqueci minha senha</a>
                </div>
                <input type="submit" value="Enviar" class="enviar">
            </form>
            <button onclick="window.location.href='registrar.php'" class="registrar-logar">Registrar-se</button>
        </div>
    </div>
</body>

</html>