<?php

include "inc/config.php";
include HEADER_TEMPLATE;

?>

<!-- home -->
<main class="container" id="home">
    <section class="justify-content-center align-items-center text-center marginTexto">
        <!-- frase de efeito/destaque -->
        <div class="col-12 frase justify-content-center align-items-center text-center">
            <h3 class="textofrase">Inovação moldada com experiência.<br>Soluções em plástico <b>Hencel</b>, desde 1991
            </h3>
        </div>
        <button class="btn-grad shadow-5 mt-4"><a class="linkBotao">Saiba mais</a></button>
    </section>
    <!-- sobre nos home-->
    <section class="row">
        <div class="d-flex mt-5 gap-5">
            <div class="textoSobreNos col-6">
                <h2 class="mb-4">Sobre Nós</h2>
                <p>Estamos no mercado desde 1991 e trabalhamos com
                    clientes de diversos segmentos, tais como:
                    Automotivo, Hospitalar, Automação, Construção Civil,
                    Escolar & Escritório, Utilidade Domésticas entre
                    outros.<br><br>
                    Auxiliamos os nossos clientes durante todo processo
                    de criação de uma peça plástica, desde o projeto,
                    prototipagem, desenvolvimento do ferramental,
                    PPAPs, definição de resinas, produção das peças até a
                    embalagem.
                </p>
            </div>
            <div class="imagemSobreNos col-6">
                <img src="<?php echo BASE_URL ?>assets/images/imagem2.jpeg" alt="Imagem Sobre Nós"
                    class="imgSobreNos shadow shadow-5" height="330px" width="500px">
            </div>
        </div>
    </section>

    <section class="col-12 fundoTexto d-flex">
        <p class="balaoTexto">Temos larga experiência nos processos para injeção de plásticos como: resinas naturais,
            resinas
            compostas, e de engenharia. Desde 1991 produzindo peças injetadas de plásticos com qualidade,
            para diversos segmentos da indústria brasileira: (automobilística, eletrodomésticos, materiais
            escolares, elétricos, automação, embalagens, entre outros). Temos parceria com ferramentarias
            especializadas na construção e manutenção de moldes para injeção de plásticos.</p>
    </section>

    <div class="accordion" id="accordionInfra">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Missão
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionInfra">
                <div class="accordion-body">
                    <p>Entregar aos nossos clientes mais do que produtos,
                        soluções no ramo de injeção de plástico.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Visão
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionInfra">
                <div class="accordion-body">
                    <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It’s also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Valores
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionInfra">
                <div class="accordion-body">
                    <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It’s also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
    </div>

    <section class="ganchoInfra d-flex">
        <div class="row">
            <div class="col-6 textoGanchoInfra align-items-center justify-content-center text-center">
                <h3>Conheça nossa infraestrutura e saiba como podemos ajudar no seu projeto!</h3>
                <button class="botaoGancho shadow-5 mt-4"><a class="linkBotao">Saiba mais</a></button>
            </div>
            <div class="col-6 imagemGanchoInfra">
                <img src="<?php echo BASE_URL ?>assets/images/imagem3.jpeg" alt="Imagem Gancho Infraestrutura"
                    class="imgGanchoInfra shadow shadow-5" height="330px" width="500px">
            </div>
        </div>
    </section>

    <section class="balaoPolitica">
        <div class="fundoPolitica d-block text-center">
            <p class="textoPolitica col-8 col-sm-12"><b>Política de Qualidade</b><br><br>A <b>Hencel</b> tem como
                objetivo atender
                as
                expectativas de nossos clientes
                com produtos e industrialização, atuando na melhoria continua de seus
                processos, com a participação de todos os nossos colaboradores.<br><br>SGQ – Sistema da Garantia da
                Qualidade<br><br>Implantado e certificado pela NBR ISO 9001</p>
            <img src="<?php echo BASE_URL ?>assets/images/selo-brtuv.jpg" alt="Imagem Política de Qualidade"
                class="imgPolitica shadow shadow-5 col-3 col-sm-6 col-md-3 mt-3" height="250px" width="250px">
        </div>
    </section>
</main>

<?php include FOOTER_TEMPLATE; ?>