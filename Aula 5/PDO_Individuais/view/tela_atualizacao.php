<?php
    //require '../control/verifica.php';
    
    include_once '../banco/conexao.php';
    $conectar = getConnection();
?>


<!DOCTYPE html>
<html> 
    <head>
        <title> Atualização </title>  
        <meta charset="utf-8">

    <style>
    body {
      background-image: url('fundo_login.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;     
    }

    .caixalogin{
        background-color: white;
        opacity: 80%;
        width: 300px;
        height: 250px
    }
    #caixalogin{
        
        border-radius: 25px;
    }

    </style>
    
    </head>

<body>


<h3> 
    <a href="tela_cadastro.php"> CADASTRO </a> | <a href="tela_listagem.php"> LISTAGEM e DELETAR </a> | <a href="tela_atualizacao.php"> ATUALIZAÇÃO </a> 
</h3>


<br><br><br><br><br><br>

<center>

<div class="caixalogin" id="caixalogin">
<br><br>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $today = date('d/m/y')." | ".date('H:i:s');; // Data formatada
        echo $today;
    ?>
<h1> Atualizar </h1> 
<form action="../model/atualizacao.php" method="post">
    ID: <input type="text" name="recebeID" id="EditaLogin"> <br>
    Login: <input type="text" name="EditaLogin" id="EditaLogin"> <br>
    Senha: <input type="text" name="EditaSenha" id="EditaSenha"> <br>
    
    <p><input type="submit" name="editar" value="ATUALIZAR"></p> <!-- Botão Atualizar -->
</form>
</div>

</center>


</body>

</html>

