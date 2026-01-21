window.onload = function () {
    const fraseElement = document.querySelector('.textofrase');
    const textoSobreNos = document.querySelector('.textoSobreNos');
    const botaoElement = document.querySelector('.btn-grad');
    fraseElement.classList.add('is-visible');
    this.setTimeout(() => {
        botaoElement.classList.add('is-visible');
    }, 300);
    textoSobreNos.classList.add('is-visible');

};

function mostrartitulo() {
    const tituloElement = document.querySelector('.servicosAba h2');
    tituloElement.classList.add('is-visible');
}

function carroussel() {
    const fotos = ['imagem1.jpg', 'imagem2.jpg', 'imagem3.jpg'];
    const carrousselElement = document.querySelector('.carroussel');

    let index = 0;
    setInterval(() => {
        console.log(index);
        carrousselElement.innerHTML = `<img src="../images/${fotos[index]}" alt="Serviço ${index + 1}" class="imgServicos col-3 m-2 shadow-5">`;
        index = (index + 1) % fotos.length;
    }, 3000);

}