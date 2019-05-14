<?php
$conn = new mysqli('localhost','root','','base1');
if($conn->connect_error){
    echo 'se peodujo un error al tratar de conectar la base de datos ' .$conn->connect_error;
    exit;
}else{
    echo '';
    $sql_extrare = "select * from alumnos
    ";
    $result = mysqli_query($conn,$sql_extrare);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista Alumnos</title>
</head>
<body>
<h1 align="center">Alumnos Registrados</h1>
<form method ="post">
<div>
<table>
<tr>
<table border="2" align="center">
    <thead>
        <tr>
<th>Nombre</th>
<th>Email</th>
<th>Codigo del curso</th>
<th>Modificar</th>
</tr>

<tr>
<?php 

$cod = 0;
while($fila = mysqli_fetch_array($result)){
    $cod = $cod+1;?>
<tr>
<td><?php echo $fila['Nombre']; ?></td>
<td><?php echo $fila['Mail']; ?></td>
<td><?php echo $fila['CodigoCurso']; ?></td>
<td><?php echo "<a href='modificar.php?seleccionado=$cod'>Modificar Estudiante </a>";?> </td>

<?php  } ?>
</tr>
</tr>
</table>
</div>
</form>
</body>
</html>