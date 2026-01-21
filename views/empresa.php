<?php

include "../inc/config.php";
include HEADER_TEMPLATE;

?>


<main class="container mt-5">
    <div class="text-center">
        <h3 class="display-4 fraseEmpresa textofrase">Empresa</h3>
    </div>

    <section class="containerSobreNos">
        <div class="row text-start textoSobreNos">
            <h2>Sobre nós</h2>
            <p>Estamos no mercado desde 1991 e trabalhamos com clientes de diversos segmentos, tais como:
                Automotivo, Hospitalar, Automação, Construção Civil, Escolar & Escritório, Utilidade Domésticas
                entre outros.<br><br>


                Auxiliamos os nossos clientes durante todo processo de criação de uma peça plástica, desde o
                projeto, prototipagem, desenvolvimento do ferramental, PPAPs, definição de resinas, produção das
                peças, montagem, gravação, pintura até a embalagem.<br><br>


                Atualmente contamos com amplo parque fabril com máquinas injetoras de 20 a 300 toneladas e
                possuímos parcerias com Ferramentarias, Projetistas, Fornecedores de resinas, Serigrafias e outras
                empresa, as quais completam nossas soluções afim de oferecer a melhor solução aos nossos
                clientes.</p>
    </section>
    <div class="accordion" id="accordionEmpresa">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Missão
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionEmpresa">
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
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionEmpresa">
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
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionEmpresa">
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

    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-5">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil veniam eveniet iste pariatur? Magni,
                asperiores voluptas? Blanditiis assumenda impedit cupiditate laudantium, itaque voluptatibus beatae sit
                possimus soluta. Repellat, quae aperiam?</p>
        </div>
        <div class="col-5">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" alt="Foto da empresa" class="fotoEmpresa1">
        </div>
    </section>
    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-5">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" alt="Foto da empresa" class="fotoEmpresa1">
        </div>
        <div class="col-5">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil veniam eveniet iste pariatur? Magni,
                asperiores voluptas? Blanditiis assumenda impedit cupiditate laudantium, itaque voluptatibus beatae sit
                possimus soluta. Repellat, quae aperiam?</p>
        </div>
    </section>
    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-5">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil veniam eveniet iste pariatur? Magni,
                asperiores voluptas? Blanditiis assumenda impedit cupiditate laudantium, itaque voluptatibus beatae sit
                possimus soluta. Repellat, quae aperiam?</p>
        </div>
        <div class="col-5">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" alt="Foto da empresa" class="fotoEmpresa1">
        </div>
    </section>
    </main>
<?php include FOOTER_TEMPLATE; ?>