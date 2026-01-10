<?php

include 'inc/config.php';

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
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="corNavbar justify-content-center align-items-center mb-3">
            <ul class="ulNavbar d-flex justify-content-center align-items-center gap-5 list-unstyled p-0">
                <a href="<?php echo BASE_URL; ?>"><li><img src="<?php echo BASE_URL; ?>assets/images/logocerta2.png" alt="Logo Hencel" width="150" height="200"></a></li>
                <li><a href="<?php echo BASE_URL; ?>about.php">Empresa</a></li>
                <li><a href="<?php echo BASE_URL; ?>services.php">Serviços</a></li>
                <li><a href="<?php echo BASE_URL; ?>contact.php">Clientes</a></li>
            </ul>
        </nav>
    </body>