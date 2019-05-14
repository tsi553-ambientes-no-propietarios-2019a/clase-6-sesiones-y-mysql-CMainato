<?php
include('php/connection.php');

if($_POST){
	if(isset($_POST['username'])&&isset($_POST['queja'])&&!empty($_POST['username'])&&!empty($_POST['queja'])){
		$username = $_POST['username'];
		$queja = htmlspecialchars($_POST['queja']);
		$sqlinsert = "INSERT INTO quejas
		(Usuario, Queja) VALUES ('$username', '$queja')";
		$conn->query($sqlinsert);
		if ($conn->error) {
			header('Location: pagina1.php?message_error=Error en la insercion'.$conn->error);
			exit;
		}else{
			echo 'Datos enviados correctamente!';
            ?>

            <!doctype html>
                <html>
                <body>
                    <a href="pagina1.php">Volver</a>    
                </body>
                </html>
	<?php	}
    
	}else{
		header('Location: pagina1.php?message_error=Llene todos los campos');
			exit;
	}
}
?>