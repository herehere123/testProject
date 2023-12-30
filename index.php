<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Cornmanthe3rd-Plex-Other-html-5.ico" type="image/x-icon">
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
                        <input type="text" id="usuario" class="inputLogin" placeholder="Usuário ou Email" required>
                        <input type="password" id="password" class="inputLogin" placeholder="Senha" required>
                        <div>
                        <a href="#" class="esquecer-senha">Esqueci minha senha</a>
                    </div>
                <input type="submit" value="Enviar" class="enviar">
            </form>
            <button onclick="window.location.href='registrar.php'" class="registrar-logar">Registrar-se</button>
            </div>
        </div>
    <script src="script.js"></script>
</body>
</html>