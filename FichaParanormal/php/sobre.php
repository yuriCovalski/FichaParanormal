<?php
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sobre</title>
    <style>
        section{
            padding: 60px 0;
        }

        .inline-block {
            display: inline-block;
        }
    </style>
</head>

<body class="bg-dark">
    <!-- Barra de Navegação-->
    <nav class="navbar pt-3 pb-4">
        <div class="container-xxl ">
            <!-- Título da Nav -->
            <a href="../html/index.html" class="navbar-brand">
                <span class="text-white fw-bold">
                    Ficha Paranormal
                </span>
            </a>
            <!-- Itens da Nav -->
            <div class="navbar-text me-4 ">
                <a type="button" href="../html/gerenciafichas.html" class="btn btn-outline-light"> Menu </a>
            </div>
        </div>
    </nav>

    <!-- Dados da Conta -->
    <section id="ficha">
        <p> <?php echo $id ?></p>
        <div class="container-lg">
            <div class="form-control text-light bg-dark p-4">
                <form>
                    <h2>Dados da Conta</h2>
                    <row class="row g-3 align-items-center">
                        <div class="col">
                            <h4>Nome</h4>
                            <p> <?php 
                                $result_usuarios = "select * from usuarios where id =12";
                                $resultado_usuarios = mysqli_query($ligacao, $result_usuarios);
                                while ($row = mysqli_fetch_assoc($resultado_usuarios) ) {
                                    echo $row['nome'];
                                };
                            ?></p>            
                        </div>
                        <div class="col">
                        <h4>Apelido</h4>
                                <p> <?php 
                                $result_usuarios = "select * from usuarios";
                                $resultado_usuarios = mysqli_query($ligacao, $result_usuarios);
                                while ($row = mysqli_fetch_assoc($resultado_usuarios) ) {
                                    echo $row['apelido'];
                                };
                            ?> </p>
                        </div> 
                        
                    </row>
                    <row class="row g-3 align-items-center">
                        <div class="col">
                            <h4>Email</h4>
                            <p> <?php 
                                if (isset($_SESSION['usario'])) {
                                    echo $_SESSION['usuario'];
                                    unset($_SESSION['usario']);
                                } 
                                $result_usuarios = "select * from usuarios";
                                $resultado_usuarios = mysqli_query($ligacao, $result_usuarios);
                                while ($row = mysqli_fetch_assoc($resultado_usuarios) ) {
                                    echo $row['email'];
                                };
                            ?></p>
                        </div>
                        <div class="col">
                        <h4>Senha</h4>
                        <p><?php 
                                if (isset($_SESSION['usario'])) {
                                    echo $_SESSION['usuario'];
                                    unset($_SESSION['usario']);
                                } 
                                $result_usuarios = "select * from usuarios";
                                $resultado_usuarios = mysqli_query($ligacao, $result_usuarios);
                                while ($row = mysqli_fetch_assoc($resultado_usuarios) ) {
                                    echo $row['senha'];
                                };
                            ?></p>
                        </div> 
                        
                    </row>

                    <div>
                        <a href="eliminar.php">Excluir Conta</a>
                        <a href="editar.php">Editar Dados</a>
                    </div>
                </form>
            </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>