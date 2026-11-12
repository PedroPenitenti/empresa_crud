<?php
    //obter o id
    $id = $_GET['id'];
    //criar o delete sql
    $sql = "delete from funcionario WHERE id = $id";
    //executar
    include_once("../conexao.php"); //conectar ao bd
    $result=mysqli_query($conexao,$sql);
    //redirecionar para o listar
    if ($result)
    {
        header("location:listar.php");
    }
    else
    {
        $mysqli_error($conexao);
    }




?>