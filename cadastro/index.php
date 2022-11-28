<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princess Maria</title>
    
    <script src="js.js"></script>
    <style>@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium'  
}
header{
    background-color: #9b09bb;
background-image: linear-gradient(350deg, #9b09bb 0%, #C850C0 46%, #9b09bb 100%);
    width: 100% ;
    height: 75px;
    display: flex;
    box-shadow: rgb(0, 0, 0) 2px 2px 5px;
    position: fixed;
    top: 0rem;
    z-index: 1;
}
body{
    padding-top: 75px;
    background-image: url("img\back.png");
}
.logo{
   margin-left: 50px;
   padding: 10px 25px 10px 25px;
   scale: 1.2;
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
aside{
    position: absolute;
}
main{
    margin-left: 35vh;
}

.filtros{
    width: 35vh;
    height: 91vh;
    border: solid 2px #000;
    position: fixed;
    z-index: 0;
   
}
details{
    margin-left: 30%;
    text-align: justify;
    flex-wrap: wrap;
    margin-bottom: 90px;    
}
details summary{
    font-family: 'Josefin Sans', sans-serif;
    cursor: pointer;
}
details a{
    padding: 10px;
    margin-left: 35px;
    margin-bottom: 20px;
    text-decoration: none;
    color: #000 ;
    font-family: 'Josefin Sans', sans-serif;
}
.slides{
    margin-top: 10px;
    margin-left: 10px;
    margin-bottom: 20px;
    width: 1300px;
    height: 200px;
    overflow: hidden;
    border-radius:15px ;
    transition: all 0.4s;
    
}
.slide{
    width: 5120px;
    height: 376px;
    display: flex;
}
.imagens img{
    width: 1300px;
    height: 27.5vh;
    background-color: #000;
    animation-name: animação;
    animation-duration:20s;
    animation-iteration-count: infinite;
}
@keyframes animação{
    0% {margin-left: 0;}
    20%{margin-left: 0;}
    25%{margin-left: -100% ;}
    55%{margin-left: -100%;}
    60%{margin-left: -200%;}
    75%{margin-left: -200%}
    80%{margin-left: -300%;}
    100% {margin-left: -300%}
}
h1{
    text-align: center;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 45px;
    background-image: linear-gradient(147deg, #9b09bb 0%, #C850C0 74%);
   background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
}
h2{
    margin-top: 20px;
    margin-bottom: 10vh;
    text-align: center;
    font-family: Impact;
    font-size: 30px;
    font-family: 'Josefin Sans', sans-serif;
}
.lista-roupas{
    margin-top: 20px;
    margin-left: 40px;
    width: 1250px;
    height: 100%;
    border-radius: 15px;
    flex-wrap: wrap;

}
.roupas{
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    max-width: 90%;
   
}
.roupa-1, .roupa-2, .roupa-3, .roupa-4, .roupa-5, .roupa-6{
    margin: 30px;
    margin-bottom: 10vh;
    width: 300px;
    height: 400px;
    border-radius: 15px;
    overflow: hidden; 
    cursor: pointer; 
}
.roupa-1 img:hover, .roupa-2 img:hover,.roupa-3 img:hover,.roupa-4 img:hover,.roupa-5 img:hover,.roupa-6 img:hover{   
    scale: 1.2;
    padding-bottom: 20px;
    box-shadow: none;
}
.roupa-1 img, .roupa-2 img,.roupa-3 img,.roupa-4 img,.roupa-5 img,.roupa-6 img{
    transition: ease-in-out 0.5s;
    border-radius: 50%;
    margin-left: 25px;
    margin-top: 30px;
    box-shadow: #000 2px 2px 5px;
}
.roupas figcaption{
    text-align: center;
    font-family: impact;
}
footer{
    background-color: #9b09bb;
    background-image: linear-gradient(350deg, #9b09bb 0%, #C850C0 46%, #9b09bb 100%);
        width: 120% ;
        height: 65px;
        display:flex;
        box-shadow: rgb(0, 0, 0) 2px 2px 5px;
        position: absolute;
        bottom: 1;
}
</style>
</head>
<body >
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo2.png" alt="logo" width="60">
            </a>
        </div>
        <nav>
            <img src="icons/user.svg" alt="Login" width="25">
            <a href="login.php">Login</a>
            <img src="icons/carrinho.svg" alt="Carrinho" width="25">
            <a href="#">Carrinho</a>
        </nav>
    </header>
    <aside class="filtros">
        <h2>Filtros</h2>
        <details >
            <summary><B>Feminino</B></summary>
            <a href="#">Vestidos</a><br>
            <a href="#">Blusas</a><br>
            <a href="#">Camisetas</a><br>
            <a href="#">Calças</a><br>
        </details>
        <details >
            <summary><B>Infantil</B></summary>
            <a href="#">Vestidos</a><br>
            <a href="#">Blusas</a><br>
            <a href="#">Camisetas</a><br>
            <a href="#">Calças</a><br>
        </details>
        <details >
            <summary><B>Acessórios</B></summary>
            <a href="#">Brincos</a><br>
            <a href="#">Colar</a><br>
            <a href="#">Laços</a><br>
            <a href="#">Pulseiras</a><br>
        </details>
    </aside>
    <main>
            
        <section class="slides">
            <div class="slide">
                <div class="imagens">
                    <img src="img/banner1.png">
                </div>
                <div class="imagens">
                    <img src="img/banner2.png">
                </div>
                <div class="imagens">
                    <img src="img/banner3.png">
                </div>
                <div class="imagens">
                    <img src="img/banner1.png">
                </div>
            </div>
            
        </section>
        <h1>Destaques</h1>
        <section class="lista-roupas">
            <div class="roupas">
                <div class="roupa-1">
                    <figure>
                        <img src="img/imagem1.jpg" width="250">
                    <figcaption>R$ 00,00<br>Descrição</figcaption>
                    </figure>
                </div>
                <div class="roupa-2">
                    <figure>
                        <img src="img/imagem2.jpeg" width="250">
                        <figcaption>R$ 00,00<br>Descrição</figcaption>
                    </figure>
                </div>
                <div class="roupa-3">
                    <figure>
                        <img src="img/imagem3.jpeg" width="250">
                        <figcaption>R$ 00,00<br>Descrição</figcaption>
                    </figure>
                </div>
                <div class="roupa-4">
                    <figure>
                        <img src="img/imagem4.jpg" width="250">
                        <figcaption>R$ 00,00<br>Descrição</figcaption>
                    </figure>
                </div>
                <div class="roupa-5">
                    <figure>
                        <img src="img/imagem5.jpeg" width="250">
                        <figcaption>R$ 00,00<br>Descrição</figcaption>
                    </figure>
                </div>
                <div class="roupa-6">
                    <figure>
                        <img src="img/imagem6.jpeg" width="250">
                        <figcaption>R$ 00,00<br>Descrição</figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </main>
    <footer>
            <nav>
                <img src="icons/email.svg" alt="email" width="25">
                <a href="mailto: ojefdev@gmail.com">E-mail da loja</a>
                <img src="icons/telefone.svg" alt="telefone" width="25">
                <a href="#" onclick="numero()">Número da loja</a>
            </nav>
    </footer>
</body>
</html>