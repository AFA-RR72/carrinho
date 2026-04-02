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
        <a href="contav.php"><button>Ver sua conta</button></a>
    </div>
    <hr>
    <div class="produtos">
        <form method="post" action="carrinho.php">
            <label>Celular - R$50.00
                <input type="checkbox" name="cell">
            </label>
            <br>
            <label>Fone - R$5.00
                <input type="checkbox" name="fone">
            </label>
            <br>
            <label>Mouse - R$7.00
                <input type="checkbox" name="mouse">
            </label>
            <br>
            <label>Notebook - R$90.00
                <input type="checkbox" name="notebook">
            </label>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
    </div>
</body>
</html>