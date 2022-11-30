// mostrar e esconder senha
const senha = document.getElementById('senha');

function mostrarSenha() {
    if (senha.type == "password") {
        senha.setAttribute("type","text")
    } else {
        senha.setAttribute("type","password")
    }
}