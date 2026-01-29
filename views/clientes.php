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
            <img src="<?php echo BASE_URL; ?>assets/images/1.png" class="img-fluid rounded" alt="Ecoplast Ind. e Comercio">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/2.png" class="img-fluid rounded" alt="Inova Aluminio LTDA">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/3.png" class="img-fluid rounded" alt="La Termoplastic F.B.M.S.A.">
        </div>
    </section>

    <section class="row imagensClientes mb-5">
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/4.png" class="img-fluid rounded" alt="Ace Schmersal Eletro.">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/5.png" class="img-fluid rounded" alt="Implastec Plas. E Tec.">
        </div>
        <div class="col-md-4 mb-3">
            <img src="<?php echo BASE_URL; ?>assets/images/6.png" class="img-fluid rounded" alt="Moinho Prod. Sustentáveis">
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
            <div class="col-sm-12 col-md-6 mb-3 baloes">
                <div class="text-start">
                    <h2>Whatsapp:</h2>
                    <p class="mt-5 mb-5">Clique no botão abaixo para entrar
                        em contato conosco via WhatsApp!
                    </p>
                    <button class="botaoGancho shadow-5 mt-4 mb-3"><a class="linkBotao"><i class="bi bi-whatsapp me-3"></i>Contate-nos</a></button>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 mb-3 baloes">
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