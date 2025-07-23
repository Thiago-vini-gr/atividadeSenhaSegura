<?php
// Incluindo a conexão com o banco de dados
include 'conexao2.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css"> <!-- Corrigido "sytle.css" para "style.css" -->
    <script src="js/valida.js" defer></script> <!-- Carrega JS corretamente com defer -->
</head>
<body>
    <form action="cadastrar.php" method="POST">
        <h2>Cadastro de Usuário</h2>

        <label for="nome_usuario">Nome:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" required>

        <label for="contato_usuario">Contato:</label>
        <input type="text" id="contato_usuario" name="contato_usuario" required>

        <label for="email_usuario">E-mail:</label>
        <input type="email" id="email_usuario" name="email_usuario" required>

        <label for="senha_usuario">Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" onkeyup="validaSenha()" required>

        <h3>Segurança de senha</h3>
        <ul id="regrasSenha">
    <li id="regra-tamanho" class="invalido">Pelo menos 8 caracteres</li>
    <li id="regra-maiuscula" class="invalido">Pelo menos uma letra maiúscula</li>
    <li id="regra-minuscula" class="invalido">Pelo menos uma letra minúscula</li>
    <li id="regra-numero" class="invalido">Pelo menos um número</li>
    <li id="regra-especial" class="invalido">Pelo menos um caractere especial (@, $, !, %, *, ?, &)</li>
</ul>
<br>

        <label for="senha_usuario">confimar senha</label>
        <input type="password" id="confirma_senha_usuario" name="confirma_senha_usuario" onkeyup="validaSenha()" required>

        <!-- Aqui aparece o feedback de validação da senha -->
        <div id="mensagemSenha" class="message error"></div>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
