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
            <p>Atualmente contamos com amplo parque fabril com máquinas injetoras de 20 a
                300 toneladas e possuímos parcerias com Ferramentarias, Projetistas,
                Fornecedores de resinas, Serigrafias e outras empresa, as quais completam
                nossas soluções afim de oferecer a melhor solução aos nossos clientes.
            </p>
    </section>

    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-sm-12 col-md-6">
            <p><strong>Máquinas injetoras de 90 a 120 toneladas</strong>
                <br><br>
                Ideais para projetos que exigem alta precisão dimensional, repetibilidade e controle de processo, essas
                máquinas são indicadas para a produção de peças técnicas e componentes de pequeno porte.
                Com excelente estabilidade de injeção e ajustes finos de parâmetros, atendem com eficiência segmentos
                como hospitalar, eletrônico, embalagens técnicas e autopeças leves, garantindo qualidade constante mesmo
                em ciclos produtivos intensivos.
                <br><br>
                São a escolha certa para empresas que buscam confiabilidade, precisão e otimização de matéria-prima, sem
                abrir mão de produtividade.
            </p>
        </div>
        <div class="col-sm-12 col-md-5">
            <img src="<?php echo BASE_URL; ?>assets/images/90.jpeg" alt="Foto da Empresa" class="fotoEmpresa1">
        </div>
    </section>
    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-sm-12 col-md-6">
            <img src="<?php echo BASE_URL; ?>assets/images/130.jpeg" alt="Foto da Empresa" class="fotoEmpresa1">
        </div>
        <div class="col-sm-12 col-md-5">
            <p><strong>Máquinas injetoras de 130 a 160 toneladas</strong>
                <br><br>
                Consideradas as coringas da produção, essas máquinas oferecem o equilíbrio ideal entre robustez,
                confiabilidade e eficiência, sendo indicadas para grandes volumes de produção e ampla variedade de
                aplicações.
                Com excelente estabilidade de processo e capacidade de operação contínua, atendem com segurança setores
                como automotivo, bens de consumo, embalagens técnicas e indústria em geral, garantindo produtividade
                constante e qualidade dimensional das peças.
                <br><br>

                São a escolha certa para empresas que buscam flexibilidade produtiva, redução de paradas e alto
                desempenho operacional.
            </p>
        </div>
    </section>
    <section class="fotosEmpresa d-flex justify-content-around mt-5 cardEmpresa">
        <div class="col-sm-12 col-md-6">
            <p><strong>Máquinas injetoras de 220 a 300 toneladas</strong>
                <br><br>
                Projetadas para aplicações que exigem alta força de fechamento e robustez, essas máquinas são ideais
                para a produção de peças de maior porte e para o processamento de materiais de engenharia, como o Nylon.
                Com estrutura reforçada e estabilidade mesmo em ciclos mais exigentes, atendem com eficiência segmentos
                como automotivo, industrial pesado e componentes estruturais, garantindo resistência, repetibilidade e
                confiabilidade ao longo da produção.
                <br><br>
                São a solução indicada para empresas que necessitam de desempenho elevado, durabilidade e segurança de
                processo em aplicações técnicas complexas.
            </p>
        </div>
        <div class="col-sm-12 col-md-5">
            <img src="<?php echo BASE_URL; ?>assets/images/220.jpeg" alt="Foto da Empresa" class="fotoEmpresa1">
        </div>
    </section>
</main>
<?php include FOOTER_TEMPLATE; ?>