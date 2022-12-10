<?php 
include_once('conexao.php');

$destino = 'batata';
$query = mysqli_query($ligacao, "SELECT senha FROM usuarios where email='$destino'");
$assunto = "Recuperar senha";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';

$enviaremail = mail($destino, $assunto, $headers);

if($enviaremail){
    $mgm = "A senha será enviada para o e-mail fornecido no formulário";
    echo "<script> alert('$mgm') </script>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "<script> alert('$mgm') </script>";
    }

?>