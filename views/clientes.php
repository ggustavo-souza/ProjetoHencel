<?php

include "../inc/config.php";
include HEADER_TEMPLATE;

?>

<main class="container mt-5">
    <div class="text-center">
        <h3 class="display-4 fraseEmpresa textofrase">Clientes</h3>
    </div>

    <section class="containerSobreNos">
        <div class="row text-center textoSobreNos">
            <h4>Construímos parcerias sólidas, oferecendo soluções em plástico que atendem às necessidades de
                cada cliente.

            </h4>
    </section>

    <section class="row imagensClientes mb-5">
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" class="img-fluid rounded" alt="Cliente 1">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" class="img-fluid rounded" alt="Cliente 2">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" class="img-fluid rounded" alt="Cliente 3">
        </div>
    </section>

    <section class="row imagensClientes mb-5">
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" class="img-fluid rounded" alt="Cliente 1">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" class="img-fluid rounded" alt="Cliente 2">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" class="img-fluid rounded" alt="Cliente 3">
        </div>
    </section>

    <section class="row justify-content-center">
        <div class="col-md-6 balaoClientes">
            <div class="text-center">
                <h4>
                    Entre em contato conosco e venha fazer parte da
                    família Hencel!
                </h4>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="baloesContato d-flex gap-5 justify-content-center">
            <div class="col-5 mb-3 baloes">
                <div class="text-start">
                    <h2>Whatsapp:</h2>
                    <p class="mt-5 mb-5">Clique no botão abaixo para entrar
                        em contato conosco via WhatsApp!
                    </p>
                    <button class="botaoGancho shadow-5 mt-4 mb-3"><a class="linkBotao"><i class="bi bi-whatsapp me-3"></i>Contate-nos</a></button>
                </div>
            </div>
            <div class="col-5 mb-3 baloes">
                <div class="text-start">
                    <h2>Email:</h2>
                    <p class="mt-5 mb-5">Clique no botão abaixo para entrar
                        em contato conosco via email!</p>
                    <button class="botaoGancho shadow-5 mt-4 mb-3"><a class="linkBotao"><i class="bi bi-envelope me-3"></i>Contate-nos</a></button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include FOOTER_TEMPLATE; ?>