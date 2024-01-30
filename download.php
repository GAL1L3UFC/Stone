<?php
// Gere um link único para a página temporária (por exemplo, usando um UUID)
$link = uniqid();

// Diretório onde as páginas temporárias serão armazenadas
$tempDirectory = 'temp_pages';

// Crie a página temporária com um link de download e um temporizador
$pageContent = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Página Temporária</title>
    <meta http-equiv="refresh" content="60;url=delete.php?link=$link">
</head>
<body>
    <h1>Link de Download Temporário</h1>
    <p>Clique no link abaixo para baixar o arquivo:</p>
    <a href="download/arquivo.pdf">Arquivo para Download</a>
</body>
</html>
HTML;

// Crie a página temporária no diretório
file_put_contents("$tempDirectory/$link.html", $pageContent);

// Redirecione o usuário para a página temporária
header("Location: $tempDirectory/$link.html");
exit();
?>
