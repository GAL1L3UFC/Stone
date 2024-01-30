<?php
$link = $_GET['link'];
$tempDirectory = 'temp_pages';

// Verifique se a página temporária existe e é antiga o suficiente para ser excluída
if (file_exists("$tempDirectory/$link.html") && (time() - filemtime("$tempDirectory/$link.html")) > 60) {
    unlink("$tempDirectory/$link.html"); // Exclui a página temporária
}

// Redirecione o usuário de volta para a página de downloads ou alguma outra página
header("Location: downloads.php");
exit();
?>
