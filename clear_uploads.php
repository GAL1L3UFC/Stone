<?php
// Verifica se a chave de acesso foi fornecida corretamente
$accessKey = $_POST['access_key']; // Suponha que a chave seja enviada via POST
$correctAccessKey = file_get_contents('private/access_key.txt'); // Lê a chave armazenada no arquivo

if ($accessKey === $correctAccessKey) {
    // Chave de acesso correta, então realiza a limpeza da pasta "uploads"
    $directory = 'uploads/';

    if (is_dir($directory)) {
        $files = glob($directory . '*');
        
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file); // Remove cada arquivo na pasta
            }
        }

        // Mensagem de sucesso
        echo '<p style="color: #00cc00; font-weight: bold;">O banco de dados foi limpado com sucesso.
        espere 2 segundos ,para ser redirecionado para a pagina inicial</p>';

        // Redireciona para a página principal após 2 segundos (você pode ajustar o tempo)
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    } else {
        echo 'A pasta "uploads" não existe.';
    }
} else {
    // Chave de acesso incorreta
    echo 'Chave de acesso incorreta. A limpeza do banco de dados não foi autorizada.';
}
?>
