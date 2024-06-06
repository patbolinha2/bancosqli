<?php
include ("conexao.php");
$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha= password_hash ($_POST['senha'],PASSWORD_DEFAULT);

$consulta = "UPDATE usuario set nome ='$nome', email = '$email', senha = '$senha'
WHERE id = '$id'";

    if($conexao=mysqli_query($conexao, $consulta)){
        echo"alteraçao realizada com sucesso";
    }
    else{
        echo"erro ao cadastra-se".mysqli_connect_error($conexao);
    }
?>











<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
              
                <div class="jumbotron">
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button" style="color:black      ">𝔳𝔬𝔩𝔱𝔞𝔯</a>
  </p>
</div>