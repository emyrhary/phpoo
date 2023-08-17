<link rel="stylesheet" href="php.css">
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cafe_bistro_phpoo_turmaA";

//criação de conexão
$conn = new mysqli($servername, $username, $password, $databasename);

//verificação de conexão
if (!$conn) {
    die("conexão falhou". mysqli_connect_error());
}else {
    echo "conectado";
}
?>