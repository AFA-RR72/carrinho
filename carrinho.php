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
        return "R$" . number_format($numero, 2, ".", ",");
    }
    if (!empty($_POST['cell'])){
        $carrinho []= [
            "nome" => "celular",
            "valor" => 50
        ];
    }
    if (!empty($_POST['fone'])){
        $carrinho []= [
            "nome" => "fone",
            "valor" => 5
        ];
    }
    if (!empty($_POST['mouse'])){
        $carrinho []= [
            "nome" => "mouse",
            "valor" => 7
        ];
    }
    if (!empty($_POST['notebook'])){
        $carrinho []= [
            "nome" => "notebook",
            "valor" => 90
        ];
    }
    foreach($carrinho as $index => $valor){
        echo "<hr>";
        $item = $index+1;
        echo "Item: $item <br>";
        foreach($valor as $key => $valor2){
            echo $key . ": " . $valor2 . "<br>";
        }
        $total = $total + $valor["valor"];
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