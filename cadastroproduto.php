<?php
// Supondo que você já tenha uma conexão com o banco de dados estabelecida

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupere os dados do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $fabricante = $_POST['fabricante'];
    $descricao = $_POST['descricao'];
    $imagem = $_FILES['imagem']['name'];

    // Caminho onde a imagem será armazenada
    $target = "imagens/" . basename($imagem);

    // SQL para inserir os dados do produto no banco de dados
    $sql = "INSERT INTO produtos (nome, preco, fabricante, descricao, imagem) VALUES ('$nome', '$preco', '$fabricante', '$descricao', '$imagem')";

    // Execute a query
    mysqli_query($conexao, $sql);

    // Mova a imagem carregada para a pasta 'imagens'
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target)) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Falha ao cadastrar o produto.";
    }
}
?>

<form action="cadastro_produto.php" method="post" enctype="multipart/form-data">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="preco">Preço:</label>
    <input type="text" id="preco" name="preco" required><br>

    <label for="fabricante">Fabricante:</label>
    <input type="text" id="fabricante" name="fabricante" required><br>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea><br>

    <label for="imagem">Imagem:</label>
    <input type="file" id="imagem" name="imagem" required><br>

    <input type="submit" value="Cadastrar Produto">
</form>