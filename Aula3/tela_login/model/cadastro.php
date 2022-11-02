
<?php
  include '../banco/conexao.php';
  $conectar = getConnection();
?>

<?php
    $sql = 'INSERT INTO login (login,senha) 
            VALUES (:login, :senha)';

/*
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, "pt_BR");
            
    $agora = getdate();

    $a = $agora["year"];
    $m = strftime("%B");
    $d = $agora["mday"];
    $espaco = " ";
*/
    $login = $_POST["login"];
    $senha = $_POST["senha"];
//    $senha = md5($_POST["senha"]); // Senha CRIPTOGRAFADA

    $stmt = $conectar->prepare($sql);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);

    if($stmt->execute()){
        echo 'Salvo com sucesso!';
     //   header("location:../view/Aula3_login.html");
    }else{
        echo ' Erro ao salvar!';
        //die($stmt->execute());
    }

?>

