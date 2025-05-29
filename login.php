<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
        }
        .custom-btn {
            background-color: #ff5733; /* Cor personalizada (laranja avermelhado) */
            color: white; /* Cor do texto */
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        .custom-btn:hover {
            background-color: #e04d2b; /* Cor ao passar o rato */
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="login-container">
            <h2 class="text-center">Login</h2>
            <form action="../api/auth.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Palavra-passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn custom-btn w-100" value="Login" name="submit">Entrar</button>

                <!-- Links adicionais -->
                <div class="text-center mt-3">
                    <a href="recuperacao_senha.php" class="text-decoration-none">Esqueceu-se da palavra-passe?</a>
                </div>
                <div class="text-center mt-2">
                    <span>Ainda não tem uma conta? <a href="registo.php" class="text-decoration-none">Registe-se aqui</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
