<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body class="container">
    <form action="verificaLogin.php" method="post">
        <fieldset class="container">
            
        <legend>Login</legend>
            
        <label>Email:</label>
            
        <input type="email" name="email" placeholder="Email">
            
        <label>Senha:</label>
            
        <input type="password" name="senha" placeholder="Senha" id="">
            
        <br>
            
        <div>
                
        <button><a href="registrar.php?c='false'">Cadastrar</a></button>
                
        
        <input type="submit" value="Entrar">
           
    </div>
       
</fieldset>
    
</form>
</body>
</html>