<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página de Luminárias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Cards -->
            <div class="col-sm-4" id="card1">
                <div class="card">
                    <img src="#" class="card-img-top" alt="Luminária 1">
                    <div class="card-body">
                        <h5 class="card-title">Luminária 1</h5>
                        <p class="card-text">Preço</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                            Ver detalhes
                        </button>
                    </div>
                </div>
            </div>
            <!-- Adicione mais cards aqui -->
        </div>
    </div>

    <!-- Modais -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1Label">Detalhes da Luminária 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <img src="#" alt="Luminária 1">
                    <p>Preço</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Adicione mais modais aqui -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>