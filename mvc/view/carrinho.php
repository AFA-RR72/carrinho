<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="produtos.php"><button>Voltar</button></a>
    <?php
    $carrinho = [];
    $total = 0;
    function formataRS($numero){
        return "R$" . number_format($numero, 2, ",", ".");
    }
    if (!empty($_POST['cell']) && !empty($_POST['quantidadecell'])){
        $carrinho [] = [
            "Nome" => "celular",
            "Preço" => formataRS(50),
            "Quantidade" => $_POST['quantidadecell'],
            "Total" => 50*($_POST['quantidadecell'])
        ];
    }
    elseif (!empty($_POST['cell']) && empty($_POST['quantidadecell'])){
        echo "Você precisa preencher a quantidade desejada. <br>";
    }
    if (!empty($_POST['fone']) && !empty($_POST['quantidadefone'])){
        $carrinho [] = [
            "Nome" => "fone",
            "Preço" => formataRS(5),
            "Quantidade" => $_POST['quantidadefone'],
            "Total" => 5*($_POST['quantidadefone'])
        ];
    }
    elseif (!empty($_POST['fone']) && empty($_POST['quantidadefone'])){
        echo "Você precisa preencher a quantidade desejada. <br>";
    }
    if (!empty($_POST['mouse']) && !empty($_POST['quantidademouse'])){
        $carrinho [] = [
            "Nome" => "mouse",
            "Preço" => formataRS(7),
            "Quantidade" => $_POST['quantidademouse'],
            "Total" => 7*($_POST['quantidademouse'])
        ];
    }
    elseif (!empty($_POST['mouse']) && empty($_POST['quantidademouse'])){
        echo "Você precisa preencher a quantidade desejada. <br>";
    }
    if (!empty($_POST['pc']) && !empty($_POST['quantidadepc'])){
        $carrinho [] = [
            "Nome" => "notebook",
            "Preço" => formataRS(90),
            "Quantidade" => $_POST['quantidadepc'],
            "Total" => 90*($_POST['quantidadepc'])
        ];
    }
    elseif (!empty($_POST['pc']) && empty($_POST['quantidadepc'])){
        echo "Você precisa preencher a quantidade desejada. <br>";
    }
    if (isset($_SESSION['produtos'])) {
        foreach ($_SESSION['produtos'] as $index => $produto){
            $check = $_POST["novo_$index"] ?? null;
            $qtd = $_POST["quantidade_novo_$index"] ?? null;
        if (!empty($check) && !empty($qtd)) {
            $carrinho[] = [
                "Nome" => $produto['Nome'],
                "Valor" => formataRS($produto['Preço']),
                "Quantidade" => $qtd,
                "Total" => $produto['Preço'] * $qtd
            ];
        }
        elseif (!empty($check) && empty($qtd)) {
            echo "Você precisa preencher a quantidade de " . $produto['Nome'] . "<br>";
        }
        }
    }

    foreach($carrinho as $index => $valor){
        echo "<hr>";
        $item = $index+1;
        echo "Item: $item <br>";
        foreach($valor as $key => $valor2){
            if($key == "Total"){
                echo $key . ": " . formataRS($valor2) . "<br>";
            }
            else{
                echo $key . ": " . $valor2 . "<br>";
            }
        }
        $total = $total + $valor['Total'];
    }
    if ($total!=0){
        echo "<hr>O valor total da compra é: ". formataRS($total);
    }
    if ($total>100){
        echo "<br>Sua compra passou de R$100.00, você ganhou um desconto de 10%<br>";
        echo "Valor do desconto: " . formataRS($total*0.1) . "<br> Valor total: " . formataRS($total*0.9);
    }
    
    ?>
</body>
</html>