<?php
    require_once("validador_acesso.php");
    require "conexao.php";
    require "cadastro.service.php";
    require "usuario.model.php";

    $usuario_autenticado = false;

    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);

    $usuario = new Usuario();
    $usuario->__set('email', $email)
            ->__set('senha', $senha);
    $conexao = new Conexao();
    $login = new Cadastro($conexao, $usuario);
    $userObj = $login->verificaLogin($email, $senha);
    $logArray = $userObj;
    
    echo '<pre>';
    print_r($logArray);
    echo '</pre>';

    if(!$logArray){
        header('Location: index.php?logError1');
    } else {
        $usuario_autenticado = true;

        if($usuario_autenticado){
            echo 'Login Efetuado';
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $logArray[0]->id;
            $_SESSION['nome'] = $logArray[0]->nome;
            
            header('Location: index2.php?logSuccess');
        }
        
    }

    

?>