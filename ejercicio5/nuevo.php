<?php
$conn = new mysqli('localhost','root','','base1');
if($conn->connect_error){
    echo 'existio un erro de conexion '.$conn->connect_error;
    exit;
}
if($_POST){
    
    if(!empty($_POST['nombre']) && !empty($_POST['mail']) && !empty($_POST['codCurso']) && 
    isset($_POST['nombre']) && isset($_POST['mail']) && isset($_POST['codCurso'])){
        $nombre = $_POST['nombre'];
        $emails = $_POST['mail'];
        $codCurso = $_POST['codCurso'];

        $sql_insert = " INSERT INTO alumnos 
        (Nombre, Mail, CodigoCurso)
        VALUES ('$nombre', '$emails', '$codCurso')";
     
        $conn->query($sql_insert);
        if ($conn->error) {
            echo 'Hubo un error al ingresar los datos tipo de error ' .$conn->error;
            exit;
        }else{
           
            include ('lista.php');

           
        }
    }else {
      
        echo 'ingrese todos los datos para poder realizar un registro';
		exit;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h1></h1>
    <div>
    
    
    </div>
    <div>
    
    </div>
</body>
</html>