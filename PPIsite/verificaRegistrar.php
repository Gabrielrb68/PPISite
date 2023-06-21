<?php
    include_once "BancoDeDados.php";
    include_once "usuario.php";

    $nome = $_POST['nome'];
    
    $email = $_POST['email'];
   
    $senha = $_POST['senha'];

    if($nome==null || $email == null || $senha == null || verificarCadastro($email) != null){
        
        header("Location: registrar.php?c=false");
    } else {    
        
        $usuario = new Usuario();
        
        $usuario->setNome($nome);
        
        $usuario->setEmail($email);
        
        $usuario->setSenha($senha);

        $usuario->setId(inserirUsuarios($usuario->getNome(), $usuario->getEmail(), $usuario->getSenha()));

        session_start();
        $_SESSION['usuarioAtual'] = $usuario;
        
        header('Location: home.php?p=');
    }
?>