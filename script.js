function Enviar() {
    var usuario = document.getElementById('usuario').value;
    var password = document.getElementById('password').value;
    if (usuario == "here@herenerd.com" && password == 'herehere'){
        alert('Login correto!');
    } else {
        alert('Login errado!');
    }
    document.getElementById('form').reset();
}