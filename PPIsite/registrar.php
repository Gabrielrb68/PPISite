<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>

<body class="container">
    
<form action="verificarregistro.php" method="post">
        
    <fieldset class="container">
            
        <legend>Cadastro</legend>
            
            <label>Nome:</label>
            
            <input type="text" name="nome" placeholder="Nome">
            
            <label>Email:</label>
            
            <input type="email" name="email" placeholder="Email">
            
            <label>Senha:</label>
            
            <input type="password" name="senha" placeholder="Senha" id="senha">
            <br>
            
            <div>
                <button><a href="index.php">Entrar</a>
                </button>
                <input type="submit" value="Cadastrar" id="submit">
            
            </div>
       
        </fieldset>
    
    </form>
</body>
</html>