<?php

    require "conexao.php";
    require "usuario.model.php";
    require "cadastro.service.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);
    

    if($nome == '' OR $email == '' OR $senha == ''){
        header('Location: cadastro.php?erro1');        
    } else{
        $usuario = new Usuario();
        $usuario->__set('nome', $nome)
        ->__set('email', $email)
        ->__set('senha', $senha);
        $conexao = new Conexao();

        $cadastro = new Cadastro($conexao, $usuario);
        $checkMail = $cadastro->verificarEmail($email);
        $emailArray = $checkMail[0]->email;

        if($emailArray == $email){
            header('Location: cadastro.php?erro2');
        } else {
            $cadastro->cadastrarUsuario();

            header('Location: index.php?sucesso');
        }

        
        
    }

    /*

    $usuario = new Usuario();
        $usuario->__set('nome', $nome)
        ->__set('email', $email)
        ->__set('senha', $senha);
        $conexao = new Conexao();

        $cadastro = new Cadastro($conexao, $usuario);
        $cadastro->cadastrarUsuario();
        

        header('Location: index.php?sucesso');

        */
    

    

    
    
    
?>