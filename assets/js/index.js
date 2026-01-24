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
