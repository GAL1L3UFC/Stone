<?php
session_start();

// Destrua a sessão
session_destroy();

// Redirecione para a página de login após o logout
header('Location: login.php');
exit();
?>
