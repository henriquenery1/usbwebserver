<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro e Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS externo -->
</head>
<body>
    <div class="form-container">
        <h1>Cadastro e Login</h1>
        <form>
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group btn-group">
                <input type="submit" class="btn-register" value="Cadastrar">
                <input type="submit" class="btn-login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
