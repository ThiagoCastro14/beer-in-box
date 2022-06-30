<?php

 
$tipoProduto = ($_POST['tipoProduto']); 

$marca = ($_POST['marca']); 

$categoria = $_POST['categoria'];

$custo = $_POST['custo'];

$quantidade = $_POST['quantidade'];

$connect = mysql_connect('127.0.0.1','admin','5rbvdQzFp2ARsZ51');

$db = mysql_select_db('bib_db');

$query_select = "SELECT * FROM produto";

$select = mysql_query($query_select,$connect);

$array = mysql_fetch_array($select);

$logarray = $array['produto'];

 

  if($tipoProduto == "" || $tipoProduto == null){

    echo"<script language='javascript' type='text/javascript'>alert('O campo produto deve ser preenchido');window.location.href='manterProduto.php';</script>";

    

      }else{

        $query = "INSERT INTO produto (tipoProduto,marca,categoria,custo,quantidade) VALUES ('$tipoProduto','$marca', '$categoria', '$custo', '$quantidade')";

        $insert = mysql_query($query,$connect);

        if($insert){

          echo"<script language='javascript' type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location.href='manterProduto.php'</script>";

        }else{

          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse produto!');window.location.href='manterProdutos.php'</script>";

        }

      }
   
?>