<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fones de Ouvido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();

    // Verifique se a ação de adicionar ao carrinho foi acionada
    if (isset($_POST['adicionar'])) {
        // Supondo que cada produto tenha um ID único
        $produto_id = $_POST['produto_id'];
        $produto_nome = $_POST['produto_nome'];
        $produto_preco = $_POST['produto_preco'];

        // Adicione o produto à sessão do carrinho
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
        }

        // Verifique se o produto já está no carrinho
        if (isset($_SESSION['carrinho'][$produto_id])) {
            // Atualize a quantidade e o total
            $_SESSION['carrinho'][$produto_id]['quantidade'] += 1;
            $_SESSION['carrinho'][$produto_id]['total'] = $_SESSION['carrinho'][$produto_id]['quantidade'] * $produto_preco;
        } else {
            // Adicione o produto ao carrinho
            $_SESSION['carrinho'][$produto_id] = array(
                'nome' => $produto_nome,
                'preco' => $produto_preco,
                'quantidade' => 1, // Quantidade padrão é 1
                'total' => $produto_preco // Total é o preço do produto
            );
        }
    }
    ?>


    <div class="container mt-5">
        <h2 class="mb-4">Variedade de Fones de Ouvido</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/fone1.jpg" class="card-img-top" alt="Fone Bluetooth JBL Tune 510BT">
                    <div class="card-body">
                        <h5 class="card-title">Fone Bluetooth JBL Tune 510BT</h5>
                        <p class="card-text">Descrição do Fone Bluetooth JBL Tune 510BT.</p>
                        <p class="card-text"><strong>Preço:</strong> R$72,04</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="produto_id" value="fone1">
                            <input type="hidden" name="produto_nome" value="Fone Bluetooth JBL Tune 510BT">
                            <input type="hidden" name="produto_preco" value="72.04">
                            <button type="submit" name="adicionar" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/fone2.webp" class="card-img-top" alt="Fone Bluetooth JBL Tune 510BT">
                    <div class="card-body">
                        <h5 class="card-title">Fone Bluetooth JBL Tune 510BT</h5>
                        <p class="card-text">Descrição do Fone Bluetooth JBL Tune 510BT.</p>
                        <p class="card-text"><strong>Preço:</strong> R$72,04</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="produto_id" value="fone1">
                            <input type="hidden" name="produto_nome" value="Fone Bluetooth JBL Tune 510BT">
                            <input type="hidden" name="produto_preco" value="72.04">
                            <button type="submit" name="adicionar" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/fone3.webp" class="card-img-top" alt="Fone Bluetooth JBL Tune 510BT">
                    <div class="card-body">
                        <h5 class="card-title">Fone Bluetooth JBL Tune 510BT</h5>
                        <p class="card-text">Descrição do Fone Bluetooth JBL Tune 510BT.</p>
                        <p class="card-text"><strong>Preço:</strong> R$72,04</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="produto_id" value="fone1">
                            <input type="hidden" name="produto_nome" value="Fone Bluetooth JBL Tune 510BT">
                            <input type="hidden" name="produto_preco" value="72.04">
                            <button type="submit" name="adicionar" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/fone4.webp" class="card-img-top" alt="Fone Bluetooth JBL Tune 510BT">
                    <div class="card-body">
                        <h5 class="card-title">Fone de Ouvido Headset Gamer Quantum 610 Wireless Preto </h5>
                        <p class="card-text">O que você precisa saber sobre este produto
                            Cor da luz: Azul
                            Possui tecnologia True Wireless.
                            Modo mãos-livres incluído.
                            Tem cancelamento de ruído.
                            Microfone flexível incorporado.
                            O comprimento do cabo é de 1.5m.
                            Som superior e ilimitado.
                            Confortávels e práticos..</p>
                        <p class="card-text"><strong>Preço:</strong> R$ 715,00 ou em 12x R$ 69,32 sem juros </p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="produto_id" value="fone1">
                            <input type="hidden" name="produto_nome" value="Fone de Ouvido Headset Gamer Quantum 610 Wireless Preto">
                            <input type="hidden" name="produto_preco" value=" R$ 715,00">
                            <button type="submit" name="adicionar" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/fone5.webp" class="card-img-top" alt="Fone Bluetooth JBL Tune 510BT">
                    <div class="card-body">
                        <h5 class="card-title">Fone Bluetooth JBL Tune 510BT</h5>
                        <p class="card-text">Descrição do Fone Bluetooth JBL Tune 510BT.</p>
                        <p class="card-text"><strong>Preço:</strong> R$ 715,00 ou em 12x R$ 69,32</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="produto_id" value="fone1">
                            <input type="hidden" name="produto_nome" value="Fone Bluetooth JBL Tune 510BT">
                            <input type="hidden" name="produto_preco" value="1,00">
                            <button type="submit" name="adicionar" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/fone6.jpg" class="card-img-top" alt="Fone Bluetooth JBL Tune 510BT">
                    <div class="card-body">
                        <h5 class="card-title">Fone Bluetooth JBL Tune 510BT</h5>
                        <p class="card-text">Descrição do Fone Bluetooth JBL Tune 510BT.</p>
                        <p class="card-text"><strong>Preço:</strong> R$72,04</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="produto_id" value="fone1">
                            <input type="hidden" name="produto_nome" value="Fone Bluetooth JBL Tune 510BT">
                            <input type="hidden" name="produto_preco" value="72.04">
                            <button type="submit" name="adicionar" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>