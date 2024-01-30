<?php
$uploadDir = 'uploads'; // Substitua pelo caminho real da pasta uploads

// Lista de arquivos a serem ocultados
$hiddenFiles = array('.htaccess', '.htpasswd');

// Obtém a lista de arquivos na pasta uploads
$files = scandir($uploadDir);

// Loop para exibir apenas os arquivos não ocultos
foreach ($files as $file) {
    // Verifica se o arquivo não é oculto (não começa com um ponto) e não está na lista de arquivos ocultos
    if ($file[0] !== '.' && !in_array($file, $hiddenFiles)) {
        echo '<a href="' . $uploadDir . '/' . $file . '">' . $file . '</a><br>';
    }
}
?>
