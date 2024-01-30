<?php
session_start();

// Defina aqui as credenciais válidas (usuário e senha)
$validUsername = 'xarp';
$validPassword = 'xarp';

// Verifique se os dados de login correspondem às credenciais válidas
if ($_POST['username'] === $validUsername && $_POST['password'] === $validPassword) {
    // Credenciais válidas, crie uma sessão de autenticação
    $_SESSION['authenticated'] = true;

    // Redirecione para a página inicial após o login
    header('Location: index.php');
    exit();
} else {
    // Credenciais inválidas, exiba uma mensagem de erro ou redirecione de volta para a página de login
   header('Location: login.php?error=1'); // Adicione ?error=1 à URL
    exit();
}
?>
