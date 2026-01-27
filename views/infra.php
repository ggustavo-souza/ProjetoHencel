<?php

include "../inc/config.php";
include HEADER_TEMPLATE;

?>


<main class="container mt-5">
    <div class="text-center">
        <h3 class="display-4 fraseEmpresa textofrase">Infraestrutura</h3>
    </div>

    <section class="containerSobreNos">
        <div class="row text-center textoSobreNos ">
            <p >Atualmente contamos com amplo parque fabril com máquinas injetoras de 20 a
                300 toneladas e possuímos parcerias com Ferramentarias, Projetistas,
                Fornecedores de resinas, Serigrafias e outras empresa, as quais completam
                nossas soluções afim de oferecer a melhor solução aos nossos clientes.
            </p>
    </section>

    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-sm-12 col-md-6">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil veniam eveniet iste pariatur? Magni,
                asperiores voluptas? Blanditiis assumenda impedit cupiditate laudantium, itaque voluptatibus beatae sit
                possimus soluta. Repellat, quae aperiam?</p>
        </div>
        <div class="col-sm-12 col-md-5">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" alt="Foto da Empresa" class="fotoEmpresa1">
        </div>
    </section>
    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-sm-12 col-md-6">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" alt="Foto da Empresa" class="fotoEmpresa1">
        </div>
        <div class="col-sm-12 col-md-5">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil veniam eveniet iste pariatur? Magni,
                asperiores voluptas? Blanditiis assumenda impedit cupiditate laudantium, itaque voluptatibus beatae sit
                possimus soluta. Repellat, quae aperiam?</p>
        </div>
    </section>
    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-sm-12 col-md-6">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil veniam eveniet iste pariatur? Magni,
                asperiores voluptas? Blanditiis assumenda impedit cupiditate laudantium, itaque voluptatibus beatae sit
                possimus soluta. Repellat, quae aperiam?</p>
        </div>
        <div class="col-sm-12 col-md-5">
            <img src="<?php echo BASE_URL; ?>assets/images/imagem1.jpeg" alt="Foto da Empresa" class="fotoEmpresa1">
        </div>
    </section>
</main>
<?php include FOOTER_TEMPLATE; ?>