<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46fRn8r4vH/Th/ph7eYjZoM7nFwOQzFyUWzcJb9Ee2PDT5n9n8w2LXqygqz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja de Eletrônicos</title>
</head>

<body class="bg-light">
    <header class="bg-primary text-white text-center p-3">
        <div class="container"> 
            <h1>Loja de Eletrônicos</h1>
            <nav class="nav justify-content-center">
                <a class="tela" href="#inicio">Início</a>
                <a class="tela" href="#produto">Produtos</a>
                <a class="tela" href="#contato">Contato</a>
                <button onclick="myFunction()" title="Modo escuro"><i class="fa-solid fa-circle-half-stroke"></i></button>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        <section id="idSection">
            <h2 class="h3 mb-3">Produtos em Destaque</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="desconto"><strong>45% OFF</strong></p>
                            <ol type="I"><li>
                            <h5 class="card-title">Fones de ouvido:</h5>
                            </li></ul>
                            <p class="card-text">Alta qualidade de som e conforto.</p>
                            <a href="fone.php" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <ol type="I" start="2"><li>
                            <h5 class="card-title">Luminária abajur:</h5>
                            </li></ul>
                            <p class="card-text">Ilumine seu espaço com estilo.</p>
                            <a href="luminarias.php" class="btn btn-primary">Ver mais</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <ol type="I" start="3"><li>
                            <h5 class="card-title">Capinha p/ Celulares:</h5>
                            </li></ul>
                            <p class="card-text">Proteção e personalização para seus aparelho.</p>
                            <a href="capinhas.php" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>

                <h3 class="h4 mt-4" id="produto">Categorias</h3>
                <ul type="circle">
                    <li><a href="celulares.php" class="list-group-item list-group-item-action">Celulares</a></p>
                    <li><a href="carregadores.php" class="list-group-item list-group-item-action">Carregadores</a></p>
                    <li><a href="gameretro.php" class="list-group-item list-group-item-action">Games Retro 4k</a></p>
                    <li><a href="caixadesom.php" class="list-group-item list-group-item-action">Caixas de som</a></p>
                    <li><a href="fone.php" class="list-group-item list-group-item-action">Fones de ouvidos</a></p>
                    <li><a href="capinhas.php" class="list-group-item list-group-item-action">Capinha p/ Celulares</a></p>
                    <li><a href="luminarias.php" class="list-group-item list-group-item-action">Luminárias abajur</a></p>
                    <li><a href="tecladosemauses.php" class="list-group-item list-group-item-action">Mouse e Teclados</a></p>
                </ul>
        </section>
        <ul type="none">
            <li>
            <div class="one-img">
                <img class="div-img" src="img/fone.jpg" alt="fone" title="Produto em Destaque">
            </div>
            <div class="two-img">
                    <img class="div2-img" src="img/lumi-abajur.webp" alt="abajur" title="Produto em Destaque"> 
                    <img class="div2-img" src="img/capa-celulares.webp" alt="capa" title="Produto em Destaque">
            </div>
            </li>
        </ul>    
    </main>

    <footer class="bg-dark text-white text-center p-3">
        <div class="container" id="contato">
            <p>© 2024 Loja de Eletrônicos</p>
            <p>CIO hacker do bem.</p>
            <p><small>Hallyson & Felipe Developer</small></p>
        </div>
    </footer>

    <!-- Bootstrap Bundle com Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js" integrity="sha384-oesi62hXKJ3eZ9g2QqDL0HTLAnjV8fp0vk+sYp/5mXk4yfRvH+abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
</body>

</html>