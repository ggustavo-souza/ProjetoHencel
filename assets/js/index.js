window.onload = function() {
    const fraseElement = document.querySelector('.textofrase');
    const botaoElement = document.querySelector('.botaoSaibaMais');
    fraseElement.classList.add('is-visible');
    this.setTimeout(() => {
        botaoElement.classList.add('is-visible');
    }, 300);

};