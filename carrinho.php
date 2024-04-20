<!-- <!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras Simples</title>
    <script>
        // Função para adicionar produtos ao carrinho
        function adicionarAoCarrinho(produto) {
            var carrinho = document.getElementById('carrinho');
            carrinho.innerHTML += produto + '<br>';
        }
    </script>
</head>

<body>
    <?php
    session_start();

    // Verifique se existem produtos no carrinho
    if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
        echo "<h3>Produtos no Carrinho:</h3>";
        foreach ($_SESSION['carrinho'] as $id => $produto) {
            echo "<p>" . $produto['nome'] . " - R$" . $produto['preco'] . "</p>";
        }
    } else {
        echo "<p>Seu carrinho está vazio.</p>";
    }
    ?>

    <h2>Carrinho</h2>
    <div id="carrinho"></div>

    <h2>Cadastro de Cliente</h2>
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Finalizar Compra">
    </form>

</body>

</html>// -->
<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <form action="processa_cadastro.php" method="post">
        <h2>Informações do Cliente</h2>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="rua">Rua:</label><br>
        <input type="text" id="rua" name="rua"><br>
        <label for="numero">Número:</label><br>
        <input type="number" id="numero" name="numero"><br>
        <label for="complemento">Complemento:</label><br>
        <input type="text" id="complemento" name="complemento"><br>
        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro"><br>
        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"><br>
        <label for="uf">UF:</label><br>
        <input type="text" id="uf" name="uf"><br>
        <label for="cep">CEP:</label><br>
        <input type="text" id="cep" name="cep"><br>

        <h2>Produtos no Carrinho</h2>
        <!-- Aqui você pode listar os produtos no carrinho com a opção de remover -->
        <!-- Você precisará de um pouco de JavaScript para gerenciar isso -->

        <input type="submit" value="Finalizar Compra">
    </form>
</body>
</html>
