<?php
    include "navBar.html";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/quizdearte/css/formlogin.css">
    <title>Bem vindo!</title>
  </head>
  <body>
    
    <form>
      <p class="cadastroH3">Cadastro</p>
      <div class="form-group">
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email aqui!">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha aqui!">
        <small>Ainda não tem uma conta? <a href="#">Cadastre-se aqui! <br></a></small>
        <small><a href="#">Esqueci minha senha</a></small>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="checkLembrar">
        <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
      </div>
      <button type="submit" class="btn btn-primary">Logar</button>
    </form>
  </body>
</html>