<?php

include '../inc/config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Gustavo, Davi, Hencel">
        <meta name="description" content="Projeto Hencel - Sistema de Gerenciamento">
        <meta name="keywords" content="Projeto, Hencel, Sistema, Gerenciamento, Plastico, Plástico, Éden, Eden, eden, Indústria, Industria, Fabrica, Fábrica">
        <title>Projeto Hencel</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/bootstrap/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <script src="<?php echo BASE_URL; ?>assets/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/index.js" defer></script>
    </head>
    <body style="background-color: #2F76C2; ">
        <nav class="corNavbar justify-content-center align-items-center mb-3">
            <ul class="ulNavbar d-flex justify-content-center align-items-center gap-5 list-unstyled p-0">
                <a href="<?php echo BASE_URL; ?>"><li><img src="<?php echo BASE_URL; ?>assets/images/logocerta2.png" alt="Logo Hencel" width="150" height="200"></a></li>
                <li class=""><a class="efeitoHover" href="<?php echo BASE_URL;?>views/empresa.php">Empresa</a></li>
                <li class=""><a class="efeitoHover" href="<?php echo BASE_URL;?>views/servicos.php">Serviços</a></li>
                <li class=""><a class="efeitoHover" href="<?php echo BASE_URL;?>views/clientes.php">Clientes</a></li>
            </ul>
        </nav>
    </body>