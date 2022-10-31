var botao = document.getElementById('recuperar')
var div = document.getElementById('recuperarDiv')

botao.addEventListener('click', function() {
    if (div.style.display === 'block') {
        div.style.display = 'none';
    } else {
        div.style.display = 'block';
    }
})