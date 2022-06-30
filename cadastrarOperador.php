<?php

 
$nome = ($_POST['nome']); 

$email = ($_POST['email']); 

$endereco = $_POST['endereco'];

$telefone = $_POST['telefone'];

$senha = MD5($_POST['senha']);

$connect = mysql_connect('nome_do_servidor','email','senha');

$db = mysql_select_db('nome_do_banco_de_dados');

$query_select = "SELECT email FROM usuarios WHERE usuarios = '$usuarios'";

$select = mysql_query($query_select,$connect);

$array = mysql_fetch_array($select);

$logarray = $array['usuarios'];

 

  if($email == "" || $email == null){

    echo"<script language='javascript' type='text/javascript'>alert('O campo e-mail deve ser preenchido');window.location.href='cadastrarOperador.php';</script>";

    }else{

      if($emailarray == $email){

        echo"<script language='javascript' type='text/javascript'>alert('Esse e-mail já existe');window.location.href='cadastrarOperador.php';</script>";

        die();

 

      }else{

        $query = "INSERT INTO usuarios (nome,email,endereco,telefone,senha) VALUES ('$nome','$email','$endereco','$telefone','$senha')";

        $insert = mysql_query($query,$connect);

        if($insert){

          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastrarOperador.php'</script>";

        }else{

          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrarOperador.php'</script>";

        }

      }

    }

?>