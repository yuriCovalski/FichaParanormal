<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Menu</title>

    <!-- Estilo header-->
    <style>
        header {
            margin-top: 20px;
            background-color: cadetblue;
        }

        ul li {
            display: inline-block;
            width: 25%;
            margin-left: 10%;
            margin-right: 10%;
            text-align: end;
        }

        ul {
            width: 100%;
        }

        ul #divMeusDados {
            margin-left: 20px;
        }

        nav {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
    </style>
    <!-- Estilo main-->
    <style>

    /* div padrão  display fichas*/
    .blocoFicha {
        margin: 5px;
        border-width: 5px;
        border-color: cadetblue;
        border-style: solid;
        border-radius: 10px;
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
    }

    .blocoFicha span {
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .blocoFicha a {
        margin: 5px;
    }

    /* Botoes principais */
    #criarbtn, #sairbtn {
        height: 65px;
        width: 150px;
    }

    </style> 

</head>
<body class="bg-dark">
    <header>
        <nav class="navbar pt-3 pb-4">
            <ul>
                <li>
                    <div class="container-xxl">
                        <!-- Título da Nav -->
                        <a href="../php/sobre.php" class="navbar-brand">
                            <span class="text-white fw-bold">
                                Mestre: Nome
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="container-xxl" id="divMeusDados">
                        <!-- Título da Nav -->
                        <a href="../php/sobre.php" class="navbar-brand">
                            <span class="text-white fw-bold">
                                Meus Dados
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="">
            <ul>
                <li>
                    <button class="btn btn-primary m-2" onclick="vaiCriar()">Criar ficha</button>
                </li>
                <li>
                    <button class="btn btn-primary m-2" onclick="sair()">Sair</button>
                </li>
            </ul>
        </div>
        <section>
            <div class="blocoFicha text-light text-center">
                <p><span>Jogador(a):</span> Joãozinho</p>
                <p><span>Personagem:</span> JoãozinhoOForte</p>
                <ul>
                    <li>
                        <button class ="btn btn-info m-2" onclick="acessar()">Acessar Ficha</button>
                    </li>
                    <li>
                        <button class ="btn btn-info m-2" onclick="baixarFicha()">Baixar Ficha</button>
                    </li>
                    <li>
                        <button  class ="btn btn-info m-2" onclick="vaiDeletar()">Deletar Ficha</button>
                    </li>
                    <li>
                        <button  class ="btn btn-info m-2" onclick="vaiEditar()">Editar Ficha</button>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <script src="../js/gerencialinks.js"></script>
</body>
</html>