<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="view/form.css">
</head>
<body>
    <form action="view/conta.php" method="post"> 
        <div class="container">
            <div class="card">
        <label for="nome">Nome: <input type="text" name="nome" placeholder="Nome"></label>
        <br>
        <label for="email">E-mail: <input type="email" name="email" placeholder="exemplo@gmail.com"></label>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" placeholder="********" name="senha">
        <button type="submit">Enviar</button>
            </div>
        </div>

    </form>

</body>
</html>