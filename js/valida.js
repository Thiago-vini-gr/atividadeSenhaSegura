function validaSenha() {
    var senha = document.getElementById("senha_usuario").value;

    // Seleciona os itens da lista
    var regraTamanho = document.getElementById("regra-tamanho");
    var regraMaiuscula = document.getElementById("regra-maiuscula");
    var regraMinuscula = document.getElementById("regra-minuscula");
    var regraNumero = document.getElementById("regra-numero");
    var regraEspecial = document.getElementById("regra-especial");

    // Verifica cada regra e atualiza classe
    if (senha.length >= 8) {
        regraTamanho.classList.add("valido");
        regraTamanho.classList.remove("invalido");
    } else {
        regraTamanho.classList.add("invalido");
        regraTamanho.classList.remove("valido");
    }

    if (/[A-Z]/.test(senha)) {
        regraMaiuscula.classList.add("valido");
        regraMaiuscula.classList.remove("invalido");
    } else {
        regraMaiuscula.classList.add("invalido");
        regraMaiuscula.classList.remove("valido");
    }

    if (/[a-z]/.test(senha)) {
        regraMinuscula.classList.add("valido");
        regraMinuscula.classList.remove("invalido");
    } else {
        regraMinuscula.classList.add("invalido");
        regraMinuscula.classList.remove("valido");
    }

    if (/[0-9]/.test(senha)) {
        regraNumero.classList.add("valido");
        regraNumero.classList.remove("invalido");
    } else {
        regraNumero.classList.add("invalido");
        regraNumero.classList.remove("valido");
    }

    if (/[@$!%*?&]/.test(senha)) {
        regraEspecial.classList.add("valido");
        regraEspecial.classList.remove("invalido");
    } else {
        regraEspecial.classList.add("invalido");
        regraEspecial.classList.remove("valido");
    }
}


