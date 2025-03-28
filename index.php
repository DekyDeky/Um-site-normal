<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Normal</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/indexPage/indexPage.css">
</head>
<body>
    <section class="main mainLogin">
        <h1 class="site-title textShadow">Um site Normal</h1>
        <form action="controllers/actionLogin.php" method="POST" class="generalForm formLogin">
            <label for="loginUser" class="generalLabel loginLabel">Login: </label>
            <input type="text" name="loginUser" class="generalInput inputLogin" autofocus><br>
            
            <label for="passwordUser" class="generalLabel loginLabel">Senha: </label>
            <input type="password" name="passwordUser" class="generalInput inputLogin"> <br>

            <button type="submit" class="btn btnSpace">Login</button>
        </form>
            <a href="views/register.php" class="createAccount">Criar uma conta</a>
    </section>
</body>
</html>