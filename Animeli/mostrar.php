
<html>
<head>
	


<style type="text/css">
.divtabla {
	background-color: #CFC;
	background-image: url(Imagenes/f16.jpg);
}
body {
	background-image: url(Imagenes/fondosao.jpg);
	background-position: center center;	  
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	
}
#apDiv1 {
	position: absolute;
	width: 177px;
	height: 187px;
	z-index: 1;
	left: 11px;
	top: 298px;
}
#apDiv2 {
	position: absolute;
	width: 111px;
	height: 112px;
	z-index: 2;
	left: -1px;
	top: 269px;
}
#apDiv3 {
	position: absolute;
	width: 83px;
	height: 70px;
	z-index: 3;
	top: 504px;
	left: 18px;
}
#apDiv4 {
	position: absolute;
	width: 110px;
	height: 90px;
	z-index: 4;
	left: 43px;
	top: 869px;
}
#apDiv5 {
	position: absolute;
	width: 120px;
	height: 110px;
	z-index: 5;
	left: 8px;
	top: -4px;
}
#apDiv6 {
	position: absolute;
	width: 119px;
	height: 97px;
	z-index: 6;
	left: 1115px;
	top: 576px;
}
#apDiv7 {
	position: absolute;
	width: 142px;
	height: 99px;
	z-index: 7;
	left: 29px;
	top: 1126px;
}
#apDiv8 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 8;
	left: -24px;
	top: 337px;
}
#apDiv9 {
	position: absolute;
	width: 111px;
	height: 0px;
	z-index: 9;
	left: 17px;
	top: 132px;
	background-color: #FF66FF;
}
#apDiv10 {
	position: absolute;
	width: 174px;
	height: 112px;
	z-index: 2;
	left: 1111px;
	top: 32px;
}
#apDiv11 {
	position: absolute;
	width: 183px;
	height: 103px;
	z-index: 3;
	left: 38px;
	top: 69px;
}
#apDiv12 {
	position: absolute;
	width: 149px;
	height: 108px;
	z-index: 4;
	left: 265px;
	top: 10px;
}
#apDiv13 {
	position: absolute;
	width: 158px;
	height: 115px;
	z-index: 5;
	left: 915px;
	top: 42px;
}
#apDiv14 {
	position: absolute;
	width: 184px;
	height: 48px;
	z-index: 6;
	left: 3px;
	top: 20px;
}
a:link {
	color: #000;
}
a:visited {
	color: #000;
}
#apDiv14 {
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
#apDiv14 {
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tabla de registros</title>
</head>
<body>
<audio src="Imagenes/Musica/sword Art Online Alicization- War of Underworld Ending Song_9Lb-7_DVQew.mp3" autoplay=""></audio>

<center>
<div align="center">
<table width="1299" height="438" border="3" cellpadding="4" cellspacing="4" bordercolor="#000000" bgcolor="#00CCCC" >
							
							<thead>
							<tr >
							<th height="45" colspan="10" bgcolor="#33FFFF"><div id="apDiv12"><img src="Imagenes/i6.png" width="150" height="150" alt="VEGUETA"></div>
								<h1 align="center"><font size="+4" style="font-size:60">Animes  </font> <img src="Imagenes/ramen.png" width="109" height="99" alt="io"></h1>
							<div id="apDiv13"><img src="Imagenes/naruto.png" width="120" height="111" alt="n"></div>
							<p align="center">&nbsp;</p>
								<div id="apDiv11"><img src="Imagenes/i2.png" width="119" height="109" alt="p"></div>
								<div id="apDiv10"><img src="Imagenes/kakashi.png" width="127" height="130" alt="KA"></div>			                  </a></th>
								</tr>
							<tr>
								<!--	<th>Número de registro</th>-->
								<th width="159" height="46" bgcolor="#78D5F3">Nombre de Anime</th>
								<th width="172"  bgcolor="#E769E3">Autor</th>
								<th width="87" bgcolor="#F892D3">Temporadas</th>
								<th width="84" bgcolor="#FF6699">Episodios</th>
								<th width="70" bgcolor="#FFFF33">Genero</th>
								<th width="67" bgcolor="#F3B372">Origen</th>
								<th width="80" bgcolor="#6FEB5C">Fecha Emison</th>
								<th width="240" bgcolor="#B0FFF5">Descripción</th>
								<th width="204" bgcolor="#CCCCCC">Imagen</th>
							</tr>
							</thead>
							<tbody>
							<div style="display: none;">
								<?php
									$conexion =mysqli_connect("localhost","root","","animes");		
	if(mysqli_connect_errno()){
			echo "fallo en la conexion : ".mysqli_connect_error();
			}else{
			echo"conexión a base de datos aprobada.";
			}

								$query = "SELECT * FROM registrosanimes";
								$resultado= $conexion->query($query);
								while ($row = $resultado->fetch_assoc()) {
							?></div>
							<tr>
							
							<!--<td> <?php //echo $row['Id_Anime']; ?></td>-->
							<td height="145" bgcolor="#FFFFFF"><div align="center"><?php echo $row['Nombre']; ?></div></td>
							<td><div align="center"><?php echo $row['Autor']; ?></div></td>
							<td><div align="center"><?php echo $row['Temporadas']; ?></div></td>
							<td><div align="center"><?php echo $row['Episodios']; ?></div></td>
							<td><div align="center"><?php echo $row['Genero']; ?></div></td>
							<td><div align="center"><?php echo $row['Origen']; ?></div></td>
							<td><div align="center"><?php echo $row['Fecha_Emision']; ?></div></td>
							<td><div align="justify"><?php echo $row['descripcion']; ?></div></td>
					<!--Mostrar la imagen-->
							<td><img width="200" height="135" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>"/></td>
							</tr>
							<?php
									}
								?>
							</tbody>
    </table>
<div id="apDiv14"><a href="Pagina Principal.html"><img src="Imagenes/volvder.PNG" width="181" height="47" alt="volver"></a></div>

</body>
</html>