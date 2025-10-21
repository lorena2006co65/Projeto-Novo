<?php
    require "../../autoload.php";

    // Construir o objeto do Produto
    $produto = new Produto();
    $produto->setNome($_POST['nome_produto']);
    $produto->setQuantidade($_POST['quant_produto']);
    $produto->setPreco($_POST['preco']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setId($_POST['id']);

    // Atualizar registro no Banco de Dados
    $dao = new ProdutoDAO();
    $dao->update($produto);

    // Redirecionar para o index (Comentar quando não funcionar)
    header('Location: index.php');