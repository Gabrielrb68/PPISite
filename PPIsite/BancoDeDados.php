<?php               
    function conectarBanco(){
        $con = new PDO("mysql:host=localhost;dbname=banco", "root", "aluno");
        return $con;
    }

    function inserirUsuarios($nome, $email, $senha){
        try{
            $con=conectarBanco();
            
            $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
            
            $stm=$con->prepare($sql);
           
            $stm->bindParam(1, $nome);
           
            $stm->bindParam(2, $email);
           
            $stm->bindParam(3, $senha);
           
            $stm->execute();
        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function alterarUsuarios($id, $nome, $email, $senha){
        try{
            $con=conectarBanco();
            $sql = "UPDATE usuario SET email = ?, senha = ?, nome = ? WHERE id = ?;";
            
            $stm=$con->prepare($sql);
            
            $stm->bindParam(1, $email);
            
            $stm->bindParam(2, $senha);
           
            $stm->bindParam(3, $nome);
            
            $stm->bindParam(4, $id);
           
            $stm->execute();
        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function deletarUsuarios($id){
        try{
            
            $con=conectarBanco();
           
            $sql = "DELETE FROM usuario WHERE id = ?;";
            
            $stm=$con->prepare($sql);
            
            $stm->bindParam(1, $id);
           
            $stm->execute();
        } catch(PDOException $e){
            
            echo $e->getMessage();
        }
    }  

    function listarUsuarios(){
        try{
            
            $con=conectarBanco();
           
            $sql="SELECT * FROM usuario";
            
            $stm=$con->prepare($sql);
            
            $stm->execute();
           
            $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function getUsuarios($id){
        try{
            $con=conectarBanco();
            $sql="SELECT * FROM user WHERE id=?";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $id);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function verificarCadastro($email){
        try{
                $con=conectarBanco();
                $sql="SELECT * FROM usuario WHERE email LIKE ?;";
                $stm=$con->prepare($sql);
                $stm->bindParam(1, $email);
                $stm->execute();
                $result=$stm->fetch(PDO::FETCH_ASSOC);
            } catch(PDOException $e){
                echo $e->getMessage();
            }
            return $result;
        }

    function login($email, $senha){
        try{
            $con=conectarBanco();
            $sql="SELECT * FROM user WHERE email LIKE ? AND senha LIKE ?;";
            $stm=$con->prepare($sql);
            $stm->bindParam(1, $email);
            $stm->bindParam(2, $senha);
            $stm->execute();
            $result=$stm->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    function verificarUsuario(){
        session_start();
        if($_SESSION['usuarioAtual']==null){
            $result = 'false';
        } else {
            $result = 'true';
        }
        return $result;
    }
?>