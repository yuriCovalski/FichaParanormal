<?php
include_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];



$sqlLogar = mysqli_query($ligacao, "SELECT email,senha FROM usuarios 
where email='$email' and senha='$senha'");

if (mysqli_num_rows($sqlLogar) > 0 and mysqli_num_rows($sqlLogar) <= 2 ) {

    header('location:../php/gerenciaFichas.php');

} else {
    echo "
    <script>
        alert('Email e/ou senha invalidos.');
        window.location.href='../html/login.html';
    </script>
    ";

}

?>