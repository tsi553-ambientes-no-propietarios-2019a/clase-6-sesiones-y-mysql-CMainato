<?php
$conn = new mysqli('localhost','root','','base1');

function modifica($newName,$newMail, $newCod){
    $conn = new mysqli('localhost','root','','base1');
    $seleccionado=$_GET['seleccionado'];
    echo 'encontrado', $seleccionado;
    $sql_modificar ="UPDATE alumnos set 
    Nombre='$newName',
    Mail = '$newMail', 
    CodigoCurso ='$newCod' 
    where idAlumnos = '$seleccionado'";
    $result = mysqli_query($conn,$sql_modificar);
    echo $result;
}
if($conn->connect_error){
    echo 'ecurrio un error al tratar de conectar a la base de datos ' .$conn->connect_error;
    exit;
}else{
   
    $seleccionado=$_GET['seleccionado'];

    $sql_extrare = "select * from alumnos
    where idAlumnos = '$seleccionado'";
    $result = mysqli_query($conn,$sql_extrare);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>
<h1 align="center">Modificar datos</h1>
<form method = "post" > 
<div>
<?php 
$result = mysqli_query($conn,$sql_extrare);
while($fila = mysqli_fetch_array($result)){?>
<p>Nombre: <?php echo $fila['Nombre']; ?></p>
<label>Nuevo nombre:</label>
<input type="text" name = "userNew" required= "required">
</div>
<div>
<p>Mail: <?php echo $fila['Mail']; ?></p>
<label>Nuevo email:</label>
<input type="email" name = "emailNew" required= "required">
</div>
<div>
<p>Código del curso: <?php echo $fila['CodigoCurso']; ?></p>
<label>Nuevo código de curso:</label>
<input type="int" name = "codigoNew" required= "required">
</div>
<?php } 
if($_POST){
    modifica(strtoupper($_POST['userNew']),$_POST['emailNew'],$_POST['codigoNew']);
}

?>
<div>
	<br>
    <a href="../ejercicio5/index.php">Añadir nuevo Estudiante</a>
    </div>
    <br>
<button>Guardar</button>
</form>
</body>
</html>