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
</head>
<body>
    <hr>
    <div>
        <h3>Adicione produtos:</h3>
        <form method="post" action="criar.php">
            <label>Nome:
                <input type="text" name="nomenv" placeholder="Ex.: Carro">
            </label>
            <br>
            <label>Preço:
                <input type="number" name="preconv" placeholder="R$00,00">
            </label>
            <br>
            <input type="submit" value="Enviar">
            <br>
            <button type="submit" name="limpar">Limpar produtos</button>
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