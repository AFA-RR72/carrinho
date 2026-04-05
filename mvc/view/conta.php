<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="../index.php"><button>Voltar</button></a>
    <?php session_start();
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    $_SESSION['nome'] = htmlspecialchars($_POST['nome']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['senha'] = htmlspecialchars($_POST['senha']);
    header("Location: produtos.php");
    exit;
    }
    elseif(empty($_POST['nome'])){
        echo "Você precisa preencher o campo Nome.";
    }
    elseif(empty($_POST['email'])){
        echo "Você precisa preencher o campo Email.";
    }
    elseif(empty($_POST['senha'])){
        echo "Você precisa preencher o campo Senha.";
    }
?>
</body>
</html>
