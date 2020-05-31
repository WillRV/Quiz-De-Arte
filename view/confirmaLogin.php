<?php
    $email = 'willynicki@hotmail.com';
    $senha = '123';
    session_start();
    if($_GET['email'] == $email && $_GET['senha'] == $senha){
        $_SESSION['logado'] = 1;
        header('Location: /quizdearte/view/jogar.php');
    } else{
        $_SESSION['logado'] = 0;
        header('Location: /quizdearte/view/logar.php');
    }
?>