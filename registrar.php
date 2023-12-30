<?php

if (isset($_POST["senha"])) {
    include __DIR__ . '/sql/conexao.php';
    $usuario = $conn->real_escape_string($_POST["usuario"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM USER WHERE EMAIL LIKE '$email' or USUARIO LIKE '$usuario'";
    $sql_query = $conn->query($sql) or die("Falha no código SQL");

    if ($sql_query->num_rows > 0) {
        echo "Este email ou usuário já foi registrado.";
    } else {
        $sql = "INSERT INTO USER (USUARIO, EMAIL, SENHA) VALUES ('$usuario', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ./index.php');
    } else {
        echo "Falha no código SQL.";
    }
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;800&display=swap" rel="stylesheet">
    <title>Registrar-se</title>
</head>

<body>
    <div class="paiRegister">
        <div class="filhoRegister">
            <h1>Registrar-se</h1>
            <form action="?" method="POST" id="form">
                <input name="usuario" type="text" id="usuario" class="inputRegister" placeholder="Usuário" maxlength="20" required>
                <input name="email" type="text" id="email" class="inputRegister" placeholder="Email" maxlength="60" required>
                <input name="senha" type="password" id="senha" class="inputRegister" placeholder="Senha" minlength="8" required>
                <input type="submit" value="Registrar-se" class="enviar">
            </form>
            <button onclick="window.location.href='index.php'" class="registrar-logar">Fazer Login</button>
        </div>
    </div>
</body>

</html>