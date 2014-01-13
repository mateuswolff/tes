<!doctype html>
<html lang="pt-BR">
<head>
    
    <meta charset="utf-8" />
    <meta name="description" content="Monitoria" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Biblioteca Leds</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css>"/>
    <link rel="stylesheet" href="css/style.css">

</head>


    <body class="container-fluid">
        
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav">
                    <li class="divider-vertical active"><a href="index.php">Início</a></li>

                    <li class="divider-vertical"><a href="usuario.php">Usuario</a></li>
                </ul>
                <ul class="nav pull-right">
                    <a class="brand" href="#">Login</a>
                </ul>                           
            </div>
        </div>

        <div class="row-fluid">
        <div class="span12 cor1">

        <form method="post" action="usuarioCadastrado.php">
                    <fieldset>
                       <legend>Cadastrar Usuario</legend>
                        
                        <label>Primeiro nome</label>
                        <input type="text" name="nome" placeholder="Digite o nome..."></input>
                        
                        
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome" placeholder="Digite o sobrenome..."></input>
                        
                        <label>CPF</label>
                        <input type="text" name="cpf" placeholder="Digite o cpf..."></input>
                       
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Digite o email..."></input>
                        
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Digite a senha..."></input>
                        
                        <br />
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn"/>
                        <input type="reset" class="btn" value="Limpar"/>
                    </fieldset>
        </form>

            
        
            
        </div>

        
        </div>
    </body>
</html>