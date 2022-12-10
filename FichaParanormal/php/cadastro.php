<?php 
require_once('conexao.php');


$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql_cadastro = mysqli_query($ligacao, "INSERT INTO `usuarios`(`nome`, `apelido`, 
`email`, `senha`) VALUES ('$nome','$apelido','$email','$senha')");

if ($sql_cadastro == true) {
    echo "
    <script>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='../html/login.html';    
    </script>
    ";

} else {
    echo "
    <script>
        alert('Falha no cadastro');
        ndow.location.href='../html/cadastro.html';
    </script>
    ";
}

?>