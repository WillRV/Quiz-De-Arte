<?php
    session_start();
    include "navBar.html";
    if($_SESSION['logado'] == 1){
        header('Location: /quizdearte/view/jogar.php');
    } else {
        header('Location: /quizdearte/view/logar.php');
    }
?>

<!doctype html>
