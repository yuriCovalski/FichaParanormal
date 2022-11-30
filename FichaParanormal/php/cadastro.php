<?php 

// importa conexao.php
require_once('conexao.php');


// pega os conteúdos dos inputs pelo post do formulário pelo index name do input 
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// manda a query 1 parametro p
//pegar o banco q queremos pela variavel (ligacao, no arquivo conexao.php)
// segundo executa o comando desejado, como queremos inserir o insert value de acordo
//com o modelo
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