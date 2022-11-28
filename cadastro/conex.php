<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$dbname = 'cadastro';

//Criar a conexao
$conex = new mysqli($servidor, $usuario, $senha, $dbname);
//Teste de conexão
//if($conex->connect_errno){
//  echo"Erro";
//}
//else{
//    echo "Conexão efetuada com sucesso";}
?>