<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/cadastro.css" rel="stylesheet">
        
        <title>Cadastrar</title>
    </head>
    <body>
        <form action="usuario.php" method="post">
            <h2>Cadastrar</h2>

            <div class="input-group">
                <img class="input-icon" src=>
                <input type="text" placeholder="Nome Completo" name="nome" required>
            </div>

            <div class="input-group">
                <img class="input-icon" src=>
                <input type="email" placeholder="Seu melhor email" name="email" required>
            </div>

            <div class="input-group">
                <img class="input-icon" src=>
                <input type="password" placeholder="Senha mínimo 6 Dígitos" name="senha" required>
            </div>



            <button class="btn-blue" type="submit"> <a input type="submit" value="Cadastrar" name="enviar" >Cadastrar</a></button>

         
        </form>
    </body>
            
</html>