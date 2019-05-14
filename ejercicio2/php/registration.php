<?php
include('../common/utils.php');
$user = $_POST['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incio</title>
</head>
<body>
    <h1>Inicio</h1>
    <div>
    <?php echo 'Bienvenido: ' .strtoupper($_POST['nombre']);?>
    <p>Tu nombre de usuario es:</p>
    </div>
    <label> <b>Usuario: </b><?php echo $user; ?></label>
    <div>
    
    </div>
    <div>
    <a href="../index.php">Cerrar secion</a>
    </div>
</body>
</html>