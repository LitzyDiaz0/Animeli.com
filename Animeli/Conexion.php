<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

</style>
</head>

<body>
<p>&nbsp;</p>

<?php
				$conexion =mysqli_connect("localhost","root","","animes");
				mysqli_set_charset($conexion,'utf8');
			if(mysqli_connect_errno()){
			echo "fallo en la conexion : ".mysqli_connect_error();
			}else{
			echo"<h3>conexión a base de datos aprobada.<h3>";
				header("Location:Registrar Anime.php");
			}
?>

<body>
</body>
</html>