<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="view/index.css">
</head>
<body>
    <h1>seja bem vindo!</h1>
<h2>nos informe sobre você</h2>
    <form action="view/conta.php" method="post"> 
        <div class="container">
            <div class="card">
        <label for="nome" class="input2">Nome: </label><input type="text" name="nome" placeholder="Nome">
        <br>
        <label for="email" class="input2">E-mail: <input type="email" name="email" placeholder="exemplo@gmail.com"></label>
        <br>
        <label for="senha" class="input2">Senha:</label>
        <input type="password" placeholder="********" name="senha">
        <button type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>