<?php

require_once(__DIR__ . "/../inc/config.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gustavo, Davi, Hencel">
    <meta name="description" content="Projeto Hencel - Sistema de Gerenciamento">
    <meta name="keywords"
        content="Projeto, Hencel, Sistema, Gerenciamento, Plastico, Plástico, Éden, Eden, eden, Indústria, Industria, Fabrica, Fábrica">
    <title>Projeto Hencel</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/infra.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/clientes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="<?php echo BASE_URL; ?>assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/index.js" defer></script>
</head>

<body style="background-color: #2F76C2; ">
    <nav class="corNavbar navbar navbar-expand-sm mb-3">

        <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="collapse navbar-collapse justify-content-center align-items-center">
            <ul class="ulNavbar navbar-nav justify-content-center align-items-center gap-5 list-unstyled p-0">
            <a href="<?php echo BASE_URL; ?>">
                <li class="nav-item"><img src="<?php echo BASE_URL; ?>assets/images/logocerta2.png" alt="Logo Hencel"
                        width="110">
            </a></li>
            <li class="nav-item"><a class="" href="<?php echo BASE_URL; ?>views/infra.php">Infraestrutura</a></li>
            <li class="nav-item"><a class="" href="<?php echo BASE_URL; ?>views/clientes.php">Clientes</a></li>
            </ul>
        </div>
    </nav>