<?php

session_start();

// Evitar o cache no lado do cliente
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Data no passado

// Verificar se o usuário está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // O usuário não está autenticado, redirecionar para a página de login
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Lista de Arquivos</title>
    <style>
           body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #00ccff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        a {
            color: #00ccff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .upload-form {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
        }

        .downloads-section {
            background-color: #555;
            padding: 20px;
            border-radius: 10px;
        }

        input[type="file"] {
            background-color: #555;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #00ccff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .progress-container {
            background-color: #555;
            border-radius: 5px;
            height: 20px;
            margin-top: 10px;
            overflow: hidden;
        }

        .progress-bar {
            width: 0;
            height: 100%;
            background-color: #00ccff;
            transition: width 0.3s ease-in-out;
        }
		
        .upload-success {
            color: #00cc00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Arquivos Disponíveis para Download:</h1>
        
        <div class="downloads-section">
            <ul>
                <?php
                $diretorio = 'uploads/';

                // Verifica se o diretório existe
                if (is_dir($diretorio)) {
                    $arquivos = scandir($diretorio);

                    foreach ($arquivos as $arquivo) {
                        if ($arquivo != '.' && $arquivo != '..') {
                            echo '<li><a href="downloads.php?file=' . urlencode($arquivo) . '">' . $arquivo . '</a></li>';
                        }
                    }
                }
                ?>
            </ul>
        </div>


 <form action="clear_uploads.php" method="POST">
    <label for="access_key">Chave de Acesso:</label>
    <input type="password" name="access_key" required>
    <input type="submit" value="Limpar banco de dados">
</form>


        <div class="upload-form">
            <h2>Envie um Arquivo:</h2>
            <form action="upload.php" method="POST" enctype="multipart/form-data" id="upload-form">
    <input type="file" name="arquivo" id="file-input">
    <button class="btn-upload" id="upload-button" type="submit">
        <svg viewBox="0 0 640 512" width="32">
            <path d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zM393.4 288H328v112c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V288h-65.4c-14.3 0-21.4-17.2-11.3-27.3l105.4-105.4c6.2-6.2 16.4-6.2 22.6 0l105.4 105.4c10.1 10.1 2.9 27.3-11.3 27.3z"></path>
        </svg>
        <span>ENVIAR</span>
    </button>
</form>
<div class="progress-container">
    <div class="progress-bar" id="progress-bar"></div>
</div>
<div id="upload-status" class="upload-success"></div>

    <script>
        const uploadForm = document.getElementById("upload-form");
        const fileInput = document.getElementById("file-input");
        const uploadButton = document.getElementById("upload-button");
        const progressBar = document.getElementById("progress-bar");
        const uploadStatus = document.getElementById("upload-status");

        uploadForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const formData = new FormData(uploadForm);

            const xhr = new XMLHttpRequest();

            xhr.upload.addEventListener("progress", (event) => {
                if (event.lengthComputable) {
                    const percentComplete = (event.loaded / event.total) * 100;
                    progressBar.style.width = percentComplete + "%";

                    if (percentComplete === 100) {
                        uploadStatus.textContent = "Upload concluído";
                        uploadStatus.style.display = "block";

                        // Atualiza a página após 2 segundos (você pode ajustar o tempo)
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    }
                }
            });

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // O upload foi concluído
                    console.log("Upload concluído!");
                }
            };

            xhr.open("POST", "upload.php", true);
            xhr.send(formData);
        });
    </script>

 

</body>
</html>
