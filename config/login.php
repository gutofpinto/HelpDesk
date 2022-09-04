<?php
    // Variaveis:
    $Usuario = $_POST['usuario'];
    $Senha = $_POST['senha'];

    // Usuarios Permitidos:
    $usuarios = array(
        array('usuarios' => 'admin', 'senhas' => 'admin'),
        array('usuarios' => 'guto', 'senhas' => '12345'),
    );

    // Autenticação:
    // $user = variavel escolhida para achar os usuarios
    foreach($usuarios as $user){
        if($Usuario == $user['usuarios'] && $Senha == $user['senhas']){
            $usuario_autenticado = true;
        }
    }

    // Verificação de Autenticação:
    if($usuario_autenticado == true){
        header('location: http://localhost/helpDesk/view/home.php');
    }else{
        header('location: http://localhost/helpDesk/index.php?login=erro');
        
    }











?>