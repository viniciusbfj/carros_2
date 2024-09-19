<?php
/* conexao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_viniciusfelix";
$password = "piorsaladomundo";
$database = "baseteste_viniciusfelix";

$conexao = mysqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}//checa se a conexão com o banco de dados foi um sucesso.
?>
