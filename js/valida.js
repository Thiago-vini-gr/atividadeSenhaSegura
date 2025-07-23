function validaSenha() {
    var senha = document.getElementById("senha_usuario").value;
    var mensagem = "";

    if (senha.length < 8) {
        mensagem += "A senha deve ter pelo menos 8 caracteres.\n";
    }
    if (!/[A-Z]/.test(senha)) {
        mensagem += "A senha deve conter pelo menos uma letra maiúscula.\n";
    }
    if (!/[a-z]/.test(senha)) {
        mensagem += "A senha deve conter pelo menos uma letra minúscula.\n";
    }
    if (!/[0-9]/.test(senha)) {
        mensagem += "A senha deve conter pelo menos um número.\n";
    }
    if (!/[@$!%*?&]/.test(senha)) {
        mensagem += "A senha deve conter pelo menos um caractere especial (@, $, !, %, *, ?, &).\n";
    }

    if (mensagem) {
        alert(mensagem);
    }
}