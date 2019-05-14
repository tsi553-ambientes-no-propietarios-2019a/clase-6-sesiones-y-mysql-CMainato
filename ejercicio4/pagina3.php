<?php
include('php/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quejas</title>
</head>
<body>
    <center>
        <h2>QUEJAS REGISTRADAS</h2>
        
        <table border="1">
		<tr>
			<tH>Nombre</tH>
			<th>Queja</th>
			<th>Fecha</th>
		</tr>

		<?php
			$sqlquery = "SELECT * FROM quejas";
			$res = $conn->query($sqlquery);
			while ($mostrar = $res->fetch_assoc()) {
			
		?>
		<tr>
            <td><?php echo $mostrar['codigo']?></td>
			<td><?php echo $mostrar['usuario']?></td>
			<td><?php echo $mostrar['queja']?></td>
		</tr>

		<?php
			}
		?>
            
	</table>
        <br>
        <a href="pagina1.php">Salir</a>
    </center>
	
</body>
</html>
