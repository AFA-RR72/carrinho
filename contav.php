<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua conta</title>
</head>
<body>
    <div>
    <a href="produtos.php"><button>Voltar</button></a>
    <a href="../index.php"><button>Mudar os dados</button></a>
    </div>
    <div>
        <?php session_start();
        echo "Seu nome é: " . $_SESSION['nome'] . "<br>";
        echo "Seu email é: " . $_SESSION['email'] . "<br>";
        echo "Sua senha é: " . $_SESSION['senha'] . "<br>";
        ?>
    </div>
</body>
</html>