<?php
session_start();
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}
if (isset($_POST['limpar'])){
    $_SESSION['produtos'] = [];
    header("Location: produtos.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Produtos</h1>
    <div>
        <a href="sobre.php"><button>Sobre nós</button></a>
        <a href="criar.php"><button>Criar produto</button></a>
        <a href="contav.php"><button>Ver sua conta</button></a>
    </div>
    <hr>
    <div class="produtos">
        <h3>Escolha produtos:</h3>
        <form method="post" action="carrinho.php">
            <label>Celular - R$50,00
                <input type="checkbox" name="cell">
                <input type="number" name="quantidadecell" placeholder="Qtd.">
            </label>
            <br>
            <label>Fone - R$5,00
                <input type="checkbox" name="fone">
                <input type="number" name="quantidadefone" placeholder="Qtd.">
            </label>
            <br>
            <label>Mouse - R$7,00
                <input type="checkbox" name="mouse">
                <input type="number" name="quantidademouse" placeholder="Qtd.">
            </label>
            <br>
            <label>Notebook - R$90,00
                <input type="checkbox" name="pc">
                <input type="number" name="quantidadepc" placeholder="Qtd.">
            </label>
            <br>
            <?php
            foreach ($_SESSION['produtos'] as $index => $produto) {
                ?>
                <label>
                    <?php
                    echo $produto['Nome'] . " - R$" . number_format($produto['Preço'], 2, ",", "."); ?>
                    <input type="checkbox" name="novo_<?php echo $index ?>">
                    <input type="number" name="quantidade_novo_<?php echo $index ?>" placeholder="Qtd.">
                    <br>
                </label>
                <?php
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
    </div>
</body>
</html>