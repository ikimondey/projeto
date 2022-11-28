<?php
 session_start();
//print_r($REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
     //Acessa
     include_once('conex.php');
     $email = $_POST['email'];
     $senha = $_POST["senha"];
 
     $sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";
     $result = $conex->query($sql);

     if(mysqli_num_rows($result) <1 )
     {
        unset($_SESSION['email']) ;
        unset($_SESSION['senha']) ;
        header('Location: login.php');
     }
     else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location:sistema.php');
     }
}
else{
    // Não acessa
                 
    header('Location:login .php');
}
?>