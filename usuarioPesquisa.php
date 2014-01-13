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

        
            <?php
                require "bootstrap.php";
                
                
                $usuario = new Usuario();
                $rs = $usuario->pesquisaUsuario();
                
                echo "<table border='1'>\n";
                echo "<tr>\n";
                echo "<td>Nome</td>\n";
                echo "<td>Sobrenome</td>\n";
                echo "<td>CPF</td>\n";
                echo "<td>Email</td>\n";
                echo "</tr>\n";
                foreach ($rs as $reg){
                    echo "<tr>\n";
                    echo "<td>$rs->getNome</td>";
                    echo "<td>$rs->getSobrenome</td>";
                    echo "<td>$rs->getCpf</td>";
                    echo "<td>$rs->getEmail</td>";
                    echo "<\tr>\n";
                }
                
                
                echo "</tr>\n";
                echo "</table>\n";
                
                
                
                
               
            ?>
            
        
            
        </div>

        
        </div>
    </body>
</html>

