<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ambientes</title>
</head>
<body>

<form action="php/registration.php" method ="post">
<h1>FORMULARIO 1</h1>
<div>
<label >
Usuario:
</label>
<input type="text" id = "username" name="nombre" required="required">
</div>
<div>
<label>Password: </label>
<input type="password" name="password" required ="required">
</div>
<button>Ingresar</button>
</form>

    
</body>
</html>