<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
    *{
   padding: 0;
   margin: 0;
   box-sizing: border-box;
   font-family: 'Franklin Gothic Medium'  
}
header{
   background-color: #9b09bb;
background-image: linear-gradient(350deg, #9b09bb 0%, #C850C0 46%, #9b09bb 100%);
   height: 60px;
   display: flex;
   box-shadow: rgb(0, 0, 0) 2px 2px 5px;
  
}
body{
    background-image: url("img\background-login.png");
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
.teto{
   background-color: #9b09bb;
background-image: linear-gradient(43deg, #9b09bb 0%, #C850C0 46%, #9b09bb 100%);
   position: absolute;
   top: 90px;
   left: 350px;
   width: 800px;
   height: 105px;
   border-radius: 15px;
   box-shadow: black 2px 2px 2px;

}
.teto2{
   margin: auto;
   margin-top: 8px;
   text-align: center;
   background-color: #FF95FB;
      width: 500px;
   height: 90px;
   border-radius: 15px;
   box-shadow: black 2px 2px 2px;
}
.texto-teto{
   color: #ffffff;
   padding-top: 25px;
   font-size: 40px;
   text-shadow: #000000 3px 3px 2px;
}
.corpo{
   height: 500px;
   width: 800px;
   border-radius: 15px;
   border: solid 2px;
   position: absolute;
   top: 215px;
   left: 350px;
   box-shadow: black 1px 1px 5px;
  background-color: #ffffff;
}
input{
   text-align: center;
   color: #ffffff;
   border: solid #000000 1px ;
   width: 500px;
   height: 50px;
   border-radius: 10px;
   margin-top: 35px;
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
form{
   margin-top: 20px;
   margin-left: 150px;

}

form a{
   text-decoration: none;
   color: black;
}
.btn1{
   margin-top: 80px;
   width: 500px;
   height: 50px;
   border-radius: 10px;
   font-size: 30px;
   cursor: pointer;
   box-shadow: black 2px 2px 5px;
   text-shadow: #ffffff 1px 1px 1px;
   background-color: #FF95FB;
   font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.btn2{
   margin-top: 25px;
   width: 500px;
   height: 50px;
   border-radius: 10px;
   font-size: 30px;
   cursor: pointer;
   box-shadow: #000000 2px 2px 5px;
   background-color: #fda5fa;
   border: solid #000000 2px;
   text-align: center;

}
.btn2 h3{
   width: 500px;
   height: 50px;
   color: black;
   text-shadow: #ffffff 1px 1px 1px;  
}
.pp{
   position: absolute;
   left: 290px;
   bottom: 30px;
   font-size: 23px;
}
.es{
   position: absolute;
   right: 160px;
   top: 210px;
   font-size: 19px;
}
.pp:hover,.es:hover{
   text-decoration: underline;
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js"></script>
    <title>Login</title>
</head>
<body background="background-login.png">
<div class="container text-center">
        
    </div>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo2.png" alt="logo" width="60">
            </a>
        </div>
        <nav>
            <img src="icons/email.svg" alt="email" width="25">
            <a href="mailto:ojefdev@gmail.com " target="_blank">E-mail da loja</a>
            <img src="icons/telefone.svg" alt="telefone" width="25">
            <a href="#" onclick="numero()">Número da loja</a>
        </nav>
    </header>
    <section class="Login">
        <div class="teto">
            <div class="teto2">
                <div class="texto-teto">Bem vindo!</div>
            </div>
        </div>
        <div class="corpo">
            <form name="form-login" action="testlogin.php" method="POST" >
                <input type="text" name="email" id="login" placeholder="E-mail ou CPF" required>
                <br><br>
                <input type="password" name="senha" minlength="5" placeholder="Senha" required>
                <div class="es">
                    <a href="#">Esqueceu a senha?</a>
                </div>
                <input type="submit" nome="submit"  class="btn1" onclick="verificarLogin()" velue="Entrar">
                <div class="btn2">
                    <a href="cadastro.php" target="_blank"><h3>Sou cliente novo</h3></a>
                </div>
                <div class="pp"><a href="#">Politica de Privacidade</a></div>
            </form>
        </div>
        </section>
</body>
</html>