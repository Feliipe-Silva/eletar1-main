<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consoles Retrô</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .console-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .console {
            margin: 1%;
            padding: 20px;
            background: #222;
            text-align: center;
        }

        img {
            width: 100%;
            height: auto;
        }

        .btn-buy {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1 class="text-center mb-4">Coleção de Consoles Retrô</h1>
    <div class="console-container">
        <!-- Modelo de Console 1 -->
        <div class="console col-12 col-md-6 col-lg-4">
            <h2>Console Retrô 1</h2>
            <img src="img/0001.jpg" alt="Console Retrô 1" class="img-fluid">
            <p>R$ 150,00</p>
            <button class="btn btn-primary btn-buy">Comprar</button>
        </div>
        <!-- Modelo de Console 2 -->
        <div class="console col-12 col-md-6 col-lg-4">
            <h2>Console Retrô 2</h2>
            <img src="img/0002.jfif" alt="Console Retrô 2" class="img-fluid">
            <p>R$ 200,00</p>
            <button class="btn btn-primary btn-buy">Comprar</button>
        </div>
        <!-- Adicione mais modelos de consoles aqui -->
    </div>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>