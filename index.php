<?php

include "inc/config.php";
include HEADER_TEMPLATE;

?>

<!-- home -->
<main class="container" id="home">
    <section class="justify-content-center align-items-center text-center">
        <!-- frase de efeito/destaque -->
        <div class="col-12 frase justify-content-center align-items-center text-center">
            <h3 class="textofrase">Inovação moldada com experiência.<br>Soluções em plástico <b>Hencel</b>, desde 1991
            </h3>
        </div>
        <button class="btn-grad shadow-5 mt-4"><a class="linkBotao">Saiba mais</a></button>
    </section>
    <!-- servicos home-->
    <section class="justify-content-center align-items-center text-center">
        <div class="servicosAba col-12 justify-content-center align-items-center text-center">
            <h2 class="mb-4">Nossos Serviços</h2>
            <div class="carousel slide row justify-content-center align-items-center" id="carousel">
                <div class="carousel-inner flex-row">
                    <div class="carousel-item ">
                        <img src="<?php echo BASE_URL ?>assets/images/imagem1.jpeg" alt="Imagem 1"
                            class="imgServicos mt-2 shadow-5" width="1000px" height="700px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item active ">
                        <img src="<?php echo BASE_URL ?>assets/images/imagem2.jpeg" alt="Imagem 2"
                            class="imgServicos mt-2 shadow-5" width="1000px" height="700px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="<?php echo BASE_URL ?>assets/images/imagem3.jpeg" alt="Imagem 3"
                            class="imgServicos mt-2 shadow-5" width="1000px" height="700px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="col-12 fundoTexto">
        <p>Temos larga experiência nos processos para injeção de plásticos como: resinas naturais, resinas
            compostas, e de engenharia. Desde 1991 produzindo peças injetadas de plásticos com qualidade,
            para diversos segmentos da indústria brasileira: (automobilística, eletrodomésticos, materiais
            escolares, elétricos, automação, embalagens, entre outros). Temos parceria com ferramentarias
            especializadas na construção e manutenção de moldes para injeção de plásticos.</p>
    </section>

</main>