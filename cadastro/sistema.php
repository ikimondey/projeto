<?php 
session_start();
if((!isset($_SESSION['email'])==true)and($_SESSION['senha'])==true)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
   header('Location:login.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE hmtl>
<html>
    <head>
    <meta charset="UTF-8">
   
    <title>SISTEMA</title>
    </head>
    <body>
<h1>Acessou o sistema</h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">sistema</a>
        <div class="d-flex">
            <a href="" class="btn btn-danger me-5">sair</a>
</div>
<?php 
 echo "<h1>Bem vindo <u>$logado</u></h1>";

?>
    </body>  
</html>