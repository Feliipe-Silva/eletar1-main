<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Produtos em Destaque</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Produtos em Destaque</h2>
        <div class="row">
            <!-- Produto 1 -->
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/001.png" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 15 Pro</h5>
                        <p class="card-text">A partir de R$ 774,92/mês ou R$ 9.299*</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Produto 2 -->
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/002.png" class="card-img-top destaque" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Moto g54 5G 128 GB Grafite</h5>
                        <p class="card-text"> DE R$ 1.499,00 Por R$ 934,15 à vista via PIX ou 1x no cartão ou até 12x de
                            R$ 91,58 sem juros Total a prazo R$ 1.099,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="caminho/para/imagem2.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 3</h5>
                        <p class="card-text">R$150,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="caminho/para/imagem2.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 4</h5>
                        <p class="card-text">R$150,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="caminho/para/imagem2.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 5</h5>
                        <p class="card-text">R$150,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="caminho/para/imagem2.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 6</h5>
                        <p class="card-text">R$150,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="caminho/para/imagem7.jpg" class="card-img-top" alt="Produto 7">
                    <div class="card-body">
                        <h5 class="card-title">Produto 7</h5>
                        <p class="card-text">R$300,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Produtos em Destaque</h2>
        <!-- ... Seu código de produtos ... -->

        <!-- Botão para acionar o modal do cupom -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalCupom">
            Usar Cupom
        </button>

        <!-- Modal do Cupom -->
        <div class="modal fade" id="modalCupom" tabindex="-1" aria-labelledby="modalCupomLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCupomLabel">Cupom de Desconto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Insira seu código de cupom para receber descontos exclusivos!</p>
                        <input type="text" class="form-control" placeholder="Código do Cupom">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Aplicar Cupom</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão para acionar o modal da grande oferta -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalOferta">
            Ver Oferta
        </button>

        <!-- Modal da Grande Oferta -->
        <div class="modal fade" id="modalOferta" tabindex="-1" aria-labelledby="modalOfertaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalOfertaLabel">Grande Oferta!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Aproveite nossa oferta limitada e obtenha 50% de desconto em produtos selecionados!</p>
                        <!-- Inserir imagem da oferta aqui -->
                        <img src="caminho/para/imagem-oferta.jpg" class="img-fluid" alt="Oferta Especial">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-danger">Pegar Oferta</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>