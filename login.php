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
</head>
<body>

    <div class="titulo-login">
        <h1>FAÇA SEU LOGIN</h1> 
    </div>

    <section>
        
        <label class="login-label">
            <span></span>
        </label>

    </section>
    
</body>
</html>