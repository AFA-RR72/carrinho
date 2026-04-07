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
    <title>Criar Produto</title>
    <link rel="stylesheet" href="criar.css">
</head>
<body>
    <hr>
    <div>
        <h1>adicione produtos ao nosso catálogo</h1>
        <form method="post" action="criar.php">
            <label>Nome:
                <input type="text" name="nomenv" placeholder="Ex.: Carro">
            </label>
            <br>
            <label>Preço:
                <input type="number" name="preconv" placeholder="R$00,00">
            </label>
            <br>
            <input type="submit" value="Enviar" class="enviar">
            <br>
            <button type="submit" name="limpar">Limpar produtos</button>
            <br>

           <a href="produtos.php"><button type="button">Voltar</button></a>
        
            <?php
            if (!empty($_POST['nomenv']) && !empty($_POST['preconv'])) {
                $_SESSION['produtos'][] = [
                    "Nome" => htmlspecialchars($_POST['nomenv']),
                    "Preço" => floatval(str_replace(",", ".", $_POST['preconv']))
                ];
                header("Location: produtos.php");
                exit;
            }
            ?>
        </form>
    </div>
</body>
</html>