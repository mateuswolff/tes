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

                    <li class="divider-vertical"><a href="usuario.php">Aluno</a></li>
                </ul>
                <ul class="nav pull-right">
                    <a class="brand" href="#">Login</a>
                </ul>                           
            </div>
        </div>

        <div class="row-fluid">
        <div class="span12 cor1">

        
            <?php
                require "bootstrap.php";
                
                
               $usuario = new Usuario();
                
                
               if(isset($_POST['nome'])){
                  $usuario->setNome($_POST['nome']);
               }
                
               if(isset($_POST['sobrenome'])){
                   $usuario->setSobrenome($_POST['sobrenome']);
               }
                
               if(isset($_POST['cpf'])){
                    
                   $usuario->setCpf($_POST['cpf']);
               }
                
               if(isset($_POST['senha'])){
                   $usuario->setSenha($_POST['senha']);
               }
                
               if(isset($_POST['email'])){
                   $usuario->setEmail($_POST['email']);
               }
                
               $usuario->setCod_ativacao('123');
               $usuario->setAtivo(0);
                
               
               $entityManager->persist($usuario);
               $entityManager->flush();                
               
               echo "<h3>Dados Cadastrados com sucesso!!!</h3>"

            ?>
            
        
            
        </div>

        
        </div>
    </body>
</html>

