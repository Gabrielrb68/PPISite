<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body class="container">
    
    <?php
    include_once "BancoDeDados.php";
    include_once "usuario.php";
    
    session_start();
    
    $usuarioAtual = $_SESSION['usuarioAtual'];
    
    ?>
   
    <label>Usuario Atual: <?php echo $usuarioAtual->getNome(); ?></label>
    
    <br>
    
    <fieldset class="container">
        
    <legend>Lista de usuarios</legend>
       
    <table id="tabela">
            
    <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Editar</th>
            </tr>
            
            <?php foreach($getUsuarios as $usuario){ ?>
            
                <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><button><a href="informacoesUsuario.php?id=<?php echo $usuario['id'] ?>">Editar</a></button></td>
            </tr>
            
            <?php } ?>
       
        </table>
        
        <div>
            <button><a href="logoff.php">Deslogar</a></button>
            <button><a href="registrar.php?c=true">Cadastrar</a></button>
        </div>
   
    </fieldset>

</body>

</html>