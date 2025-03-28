<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Normal</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/register/registerPage.css">
</head>
<body>
    <section class="main firstStep">
        <h2 class="site-title textShadow">Registrar</h1>
        <form action="controllers/actionRegister.php" method="post" class="generalForm">

            <section class="form_section">
                <label for="loginUser" class="generalLabel registerLabel">Login: </label>
                <input type="text" name="loginUser" class="generalInput inputRegister" autofocus><br>
            </section>
            
            <section class="form_section">
                <label for="loginUser" class="generalLabel registerLabel">Email: </label>
                <input type="email" name="loginUser" class="generalInput inputRegister" autofocus><br>
            </section>

            <section class="form_section">
                <label for="passwordUser" class="generalLabel registerLabel">Senha: </label>
                <input type="password" name="passwordUser" class="generalInput registerLogin"> <br>
            </section>

            <section class="form_section">
                <label for="passwordUser" class="generalLabel registerLabel">Confirmar Senha: </label>
                <input type="password" name="passwordUser" class="generalInput registerLogin"> <br>
            </section>

            <button type="submit" class="btn btnSpace">Próximo 1/5</button>
        </form>
        <a href="../index.php" class="btn returnBtn">Voltar</a>
    </section>
</body>
</html>