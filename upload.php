<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDirectory = "uploads/"; // Diretório onde os arquivos serão armazenados
    $file = $_FILES["arquivo"];

    // Verifica se o upload ocorreu sem erros
    if ($file["error"] === UPLOAD_ERR_OK) {
        $filename = basename($file["name"]);
        $targetPath = $uploadDirectory . $filename;

        // Move o arquivo para o diretório de uploads
        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            echo "Arquivo enviado com sucesso.";
        } else {
            echo "Erro ao mover o arquivo para o diretório de uploads.";
        }
    } else {
        echo "Erro no upload do arquivo: " . $file["error"];
    }
}
?>
