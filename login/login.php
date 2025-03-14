<?php
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();
if( $sucesso ){
    $user = $usuario->ChkUser("fabinho@gmail.com");
    if ($user){
        echo "<h1>cadastrado com sucesso! :3</h1>";
    } else {
        echo "<h1>Erros ao cadastrar!</h1>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="titulo-login">
        <h1>FAÇA SEU LOGIN</h1> 
    </div>

    <section class="login-belo">
        
    <div class="loginzinho">
        <span class="input-login">Nome</span>
        <label class="login-label">
            <input type="text" name="nome" class="input">
        </label>

        <span class="input-login">Email</span>
        <label class="login-label">
            <input type="text" name="email" class="input">
        </label>

        <span class="input-login">Senha</span>
        <label class="login-label">
            <input type="text" name="senha" class="input">
        </label>

        <button class="botao-enviar">Enviar</button>
    </div>

    </section>
    
</body>
</html>