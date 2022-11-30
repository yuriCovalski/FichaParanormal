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
    <title>Crie sua Ficha</title>
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
                <a type="button" href="ficha.html" class="btn btn-outline-light">Perfil</a>
            </div>
        </div>
    </nav>

    <!-- Dados da Conta -->
    <section id="ficha">
        <div class="container-lg">
            <div class="form-control text-light bg-dark p-4">
                <form>
                    <h2>Dados da Conta</h2>
                    <row class="row g-3 align-items-center">
                        <div class="col">
                            <h4>Nome</h4>
                            <?php $sql_consulta = mysqli_query($ligacao, "select * from usuarios");
                            
                            while ($dados=mysqli_fetch_array($sql_consulta)) {
                            ?>

                                <p> <?= $dados[1] ?> </p>
                            <?php } ?>
                        </div>
                        <div class="col">
                        <h4>Apelido</h4>
                            <?php $sql_consulta = mysqli_query($ligacao, "select * from usuarios");
                            
                            while ($dados=mysqli_fetch_array($sql_consulta)) {
                            ?>

                                <p> <?= $dados[2] ?> </p>
                            <?php } ?>
                        </div> 
                        
                    </row>
                    <row class="row g-3 align-items-center">
                        <div class="col">
                            <h4>Email</h4>
                            <?php $sql_consulta = mysqli_query($ligacao, "select * from usuarios");
                            
                            while ($dados=mysqli_fetch_array($sql_consulta)) {
                            ?>

                                <p> <?= $dados[3]?> </p>
                            <?php } ?>
                        </div>
                        <div class="col">
                        <h4>Senha</h4>
                            <?php $sql_consulta = mysqli_query($ligacao, "select * from usuarios");
                            
                            while ($dados=mysqli_fetch_array($sql_consulta)) {
                            ?>

                                <p> <?= $dados[4] ?> </p>
                            <?php } ?>
                        </div> 
                        
                    </row>

                    <div>
                        <button type="submit" class="btn btn-primary mt-3">Alterar Dados</button>
                        <button type="submit" class="btn btn-primary mt-3 ms-2">Deletar Conta</button>
                    </div>
                </form>
            </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>