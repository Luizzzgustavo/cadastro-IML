<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Estilo css -->
    <link rel="stylesheet" href="css/estilo.css">


    <title>Cadastro</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="?page=novo">Novo corpo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="?page=listar">Listas de Corpos</a>
        </li>

        </ul>
    </div>
    </div>
</nav>


<div class="container">
    <div class="row" >
        <div class="col mt-5">
        <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("novo-usuario.php");
                break;
            case "listar":
                include("listar-usuario.php");
                break;
            case "salvar";
                include("salvar-usuario.php");
                break;
            case "editar";
                include("editar-usuario.php");
                break;
            default:
                print "<div class='menu_cadastro'>
                    <h1 class=''>Cadastro IML</h1>
                    <p class='text-white'>Clique no botão abaixo para cadastrar o corpo</p>
                        <a href='?page=novo'><button class='botao_cadastro'>CADASTRAR</button></a>
                        </div>

                        <div class='menu_gif'>
                        <img src='img/caveira.gif' alt='Descrição da Imagem'>
                        </div>
                ";
    }
        ?>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>