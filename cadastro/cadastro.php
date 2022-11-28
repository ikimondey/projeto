<?php
if(isset($_POST['subimt']))
{
  //print_r('Nome:' .$_POST['nome']);
  //print_r('Cpf:' .$_POST['cpf']);
  //print_r('Data de nascimento:' .$_POST['nascimento']);
  //print_r('Telefone:' .$_POST['tel']);
  //print_r('Email:' .$_POST['email']);
  //print_r('senha:' .$_POST['senha']);
  //print_r('Cep:' .$_POST['cep']);
  //print_r('Rua:' .$_POST['rua']);
  //print_r('Numero da casa:' .$_POST['nunmcasa']);
  //print_r('Cidade:' .$_POST['cidade']);
  //print_r('Estado:' .$_POST['estado']);
  
include_once("conex.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numcasa'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$result = mysqli_query($conex, "INSERT INTO clientes(nome,cpf,nascimento,tel,email,senha,cep,rua,numcasa,cidade,estado) VALUES ('$nome','$cpf','$nascimento','$tel','$email','$senha','$cep','$rua','$numcasa','$cidade','$estado')");
header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <script src="js.js"></script>
    <title>Cadastro</title>
    <style>*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium'  
}
header{
    background-color: #9b09bb;
background-image: linear-gradient(350deg, #9b09bb 0%, #C850C0 46%, #9b09bb 100%);
    height: 65px;
    display: flex;
    box-shadow: rgb(0, 0, 0) 2px 2px 5px;
    margin-bottom: 20px;
}
body{
    background-image: url("/img/back.png");
    background-size: cover;
    background-repeat: repeat;
}
.logo{
   margin-left: 50px;
}
nav{
    padding-top: 18px;
    position: absolute;
    right: 0; 
    display: flex;  
}
nav a{
    margin-right: 70px;
    font-size: 20px;
    text-decoration: none;
    color: #FF95FB;
    text-shadow: black 2px 2px 2px;
}
.corpo{
    margin: auto;
    padding-bottom: 50px;
    height: 66rem;
    width: 900px;
    border-radius: 15px;
    border: solid 2px;
    box-shadow: black 1px 1px 5px;
   background-color: #ffffff;
}
input{
    text-align: center;
    color: #ffffff;
    border: solid #000000 1px ;
    width: 600px;
    height: 50px;
    border-radius: 10px;
    margin-top: 30px;
    margin-left: 150px;
    font-size: 30px;
    box-shadow: black 3px 3px 5px;
    text-shadow: #000000 1px 1px 5px;
    background-color: #9b09bb;
background-image: linear-gradient(43deg, #9b09bb 0%, #C850C0 46%, #9b09bb 100%);

}
::-webkit-input-placeholder{
    color: #ffffff;
    opacity: 50%;
    text-align: center;
}


form input[type=submit]{
    margin-top: 30px;
    margin-left: 100px;
    width: 700px;
    height: 50px;
    border-radius: 10px;
    font-size: 30px;
    cursor: pointer;
    box-shadow: black 2px 2px 5px;
    text-shadow: #f9baff 1px 1px 1px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: #1f1f1f;
}
div#msg-sucesso{
    width: 880px;
    margin: 10px auto;
    padding: 10px ;
    background-color:  rgb(50,205,50.3);
    border : 1px solid rgb(34,139,34);

}
div.msg-erro{
    width: 880px;
    margin: 10px auto;
    padding: 10px ;
    background-color:  rgb(250,128,114.3);
    border : 1px solid rgb(165,42,42);
}

</style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo2.png" alt="logo" width="60">
            </a>
        </div>
        <nav>
            <img src="icons/email.svg" alt="email" width="25">
            <a href="mailto: ojefdev@gmail.com">E-mail da loja</a>
            <img src="icons/telefone.svg" alt="telefone" width="25">
            <a href="#" onclick="numero()">Número da loja</a>
        </nav>
    </header>
    <section class="cadastro">
        <div class="corpo">
            <form action="cadastro.php" name="formCadastro" method="POST" >
            
		
		
                <input type="text" name="nome" placeholder="Nome completo" id="txtNome" required>
                <input type="number" name="cpf" placeholder="CPF" required id="cpf">
                <input type="text" name="nascimento" placeholder="Data de nascimento" onfocus="this.type='date'" required >
                <input type="number" name="tel" placeholder="Seu telefone" required id="tel">
                <input type="text" name="email" placeholder="E-mail" required id="email">
                <input type="password" name="senha" minlength="5" placeholder="Senha" required>
                <input type="password" name="confsenha" minlength="5" placeholder="confirmar senha" required>
                <input type="number" name="cep" placeholder="CEP" required>
                <input type="text" name="rua" placeholder="Nome da rua" required>
                <input type="number" name="numcasa" placeholder="Número da casa" required>
                <input type="text" name="cidade" placeholder="Cidade"required>
                <input type="text" name="estado" placeholder="Estado" required>
                <input type="submit" nome="submit" onclick="verificar()" value="Cadastrar"></input>
                
            </form>
        </div>
        </section>
</body>
</html>