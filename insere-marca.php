<?php 
include('controller/conexao.php');

$marca = $_POST['marca'];

echo "<h3>Marca: $marca </h3></br>";

$cad_marca = "INSERT INTO marca(DESCRICAO) VALUES ('$marca')";

if(mysqli_query($mysqli, $cad_marca)){
    echo "<h1>Marca cadastrada com sucesso! </h1></br>";
}else{
    echo "Erro: " . $cad_marca . "</br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>