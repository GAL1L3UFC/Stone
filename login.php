<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<p style="color: #ff0000;">Credenciais inválidas. Tente novamente.</p>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(120deg, #3498db, #8e44ad);
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 250px;
            text-align: center;
        }

        .login-container h1 {
            color: #333;
        }

        .login-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }

        .login-form input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .signup-link {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Por favor, faça login</h1>
        <form action="auth.php" method="POST" class="login-form">
            <label for="username">Nome de Usuário:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Login">
        </form>
       
    </div>
</body>
</html>
