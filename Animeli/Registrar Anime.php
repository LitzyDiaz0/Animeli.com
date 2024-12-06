<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Registro</title>
<style>
.error{color:red;}
body {
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	background-image: url(Imagenes/fondo%201.jpg);
}
#apDiv1 {
	position: absolute;
	width: 108px;
	height: 71px;
	z-index: 1;
	left: 159px;
	top: -22px;
}
#apDiv2 {
	position: absolute;
	width: 158px;
	height: 45px;
	z-index: 2;
	left: -11px;
	top: 7px;
}
#apDiv3 {
	position: absolute;
	width: 154px;
	height: 156px;
	z-index: 3;
	left: 22px;
	top: 181px;
}
#apDiv4 {
	position: absolute;
	width: 123px;
	height: 143px;
	z-index: 4;
	left: 966px;
	top: 210px;
}
</style>
</head>
<body>
<audio src="Imagenes/Musica/Crossing Field - Subtitulado Al Español. _ Sword Art Online OP.1_Zxk1Jpq_8fk.mp3" autoplay=""></audio>
<?php
				$Nombrea="";
				$Generoa="";
				$Temporadaa="";
				$Episodiosa="";
				$Fechaa="";
				$Descripciona="";
				$Origena="";
				$Autora="";
				$Imagena="";
				$Nombree="";
				$Generoe="";
				$Temporadae="";
				$Episodiose="";
				$Fechae="";
				$Descripcione="";
				$Origene="";
				$Autore="";
				$Imagene="";
					$errores=false;
				
					function limpia($dato){
					$dato = trim($dato);
					$dato = stripslashes($dato);
					$dato = htmlspecialchars($dato);
					return $dato;
				}

				
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					if(empty($_POST["NombreAnime"])){
						$Nombree="Ingresa el nombre del anime.";
						$errores=true;
						
					}
					else{
						$Nombrea = limpia($_POST["NombreAnime"]);
						
					}
					
					if(empty($_POST["GeneroAnime"])){
						$Generoe="Ingresa el genero del anime.";
						$errores=true;
					}
					else{
						$Generoa = limpia($_POST["GeneroAnime"]);
						
					}
					
					if(empty($_POST["TemporadasAnime"])){
						$Temporadae="Ingresa la temporada";
						$errores=true;
					}
					else{
						$Temporadaa = limpia($_POST["TemporadasAnime"]);
						
					}
					if(empty($_POST["EpisodiosAnime"])){
						$Episodiose="Ingresa los Episodios";
						$errores=true;
					}
					else{
						$Episodiosa = limpia($_POST["EpisodiosAnime"]);
						
					}
					
					if(empty($_POST["AutorAnime"])){
						$Autore="Ingresa el Autor del anime.";
						$errores=true;
					}
					else{
						$Autora = limpia($_POST["AutorAnime"]);
						
					}
					
					if(empty($_POST["FechaAnime"])){
						$Fechae="Ingresa la fecha.";
						$errores=true;
					}
					else{
						$Fechaa = limpia($_POST["FechaAnime"]);
						
					}
					
					
					if(empty($_POST["DescripcionAnime"])){
						$Descripcione="Ingresa la descripcion del anime.";
						$errores=true;
					}
					else{
						$Descripciona = limpia($_POST["DescripcionAnime"]);
						
					}
					
					if(empty($_POST["OrigenAnime"])){
						$Origene="Ingresa el origen del anime.";
						$errores=true;
					}
					else{
						$Origena = limpia($_POST["OrigenAnime"]);
						
					}
				}
				
			?>
<div id="apDiv1"><img src="Imagenes/ramen.png" width="116" height="101" alt="j" /></div>

               
<center><b><h3 style=" border-radius:800px; background-color:#F0C;  border-style:ridge; margin: 10px; color:black; border-color: black;"><font size="+2">Registrar Anime</font></h3></b></center>
			<br>
            <center>
			<fieldset style=" border-style:groove; border-top-right-radius: 50px;border-bottom-left-radius: 50px; background-color:#0FF;  background-size:all; background-image: url(Imagenes/f5.jpeg); background-repeat:no-repeat; background-position: left; background-size: 37.5%;  ">
				<form  method="POST" enctype="multipart/form-data">
                <div align="center"><font size="+2">
                
                </font>
                <div id="apDiv3"><img src="Imagenes/SAOO.gif" width="249" height="195" alt="sao" /></div>
                <font size="+2">
<table align="center">
    <tr>
    <th></th>
    <th></th>
    </tr>
    <tr>
    <td><label for="nombre" class="label">Nombre de Anime: </label></td>
    <td><input type="text" name="NombreAnime"
			id="NombreAnime"
			placeholder="Ingresa el nombre del anime" maxlength="50" size="50px"  value="<?php echo $Nombrea ?>"></td>
    
    </tr>
    <tr>
    <td><label for="genero" class="label">Genero: </label>
    
    <td>
        <select name="GeneroAnime" id="GeneroAnime"
			maxlength="40"   value="<?php echo $Generoa ?>">
			<option value="Shounen">Shounen</option> 
			<option value="Shojo">Shojo</option> 
			<option value="Kemono">Kemono</option> 
			<option value="RomaKome">RomaKome</option> 
			<option value="Sentai">Sentai</option> 
			<option value="Gore">Gore</option> 
			<option value="Komodo">Komodo</option> 
			<option value="Gakuen">Gakuen</option> 
			<option value="Deportes">Deportes</option> 
		</select>
    </td>
    </tr>
    <tr>
    <td>	<label for="Temporadas" class="label">Temporadas: </label></td>
    <td><input type="number" name="TemporadasAnime" placeholder="Ingresa las temporadas" 
			id="TemporadasAnime"  size="50px"  value="<?php echo $Temporadaa ?>"></td> </td>
    
    </tr>
    <tr>
    <td>	<label for="Episodios" class="label">Episodios: </label></td>
    <td><input type="number" name="EpisodiosAnime" placeholder="Ingresa los Episodios" 
			id="EpisodiosAnime"  size="50px"  value="<?php echo $Episodiosa ?>" >
	
	
    </td>
    
    </tr>
    <tr>
    <td><label for="Autor" class="label">Autor: </label></td>
    <td><input type="text" name="AutorAnime" maxlength="30" placeholder="Ingresa el autor" 
			id="AutorAnime"  size="50px"  value="<?php echo $Autora ?>"> 
    </td></td>
    <tr>
        <td><label for="Decha" class="label">Fecha Emision: </label></td>
        <td><input type="date" name="FechaAnime" maxlength="30" placeholder="Ingresa el autor" 
			id="FechaAnime"  size="50px""value" <?php echo $Fechaa ?>">
        </td> </td>
    <tr>
		<!--Seleccion de la imagen--> 
    <td><label for="Imagen" class="label">Imagen Anime: </label></td>
    <td><input type="file"  required name="ImagenAnime"  
			id="ImagenAnime"  size="15px" >
    
    </td>
    </td>
    </tr>
    <tr>
    <td><label for="Descripcion" class="label">Descripción: </label></td>
    <td><input type="text" name="DescripcionAnime" maxlength="1000" placeholder="Ingresa una breve decripción del anime" 
			id="DescripcionAnime"  size="50px" " value"<?php echo $Descripciona ?>"> 
        </td>
    </td>
    </tr>
    <tr>
    <td><label for="Origen" class="label">Origen: </label></td>
    <td><input type="text" name="OrigenAnime" maxlength="15" placeholder="Ingresa el origen del anime" 
			id="OrigenAnime"  size="50px"  value"<?php echo $Origena ?>">
    </td>
    </td>
    </tr>
</table>
                </font><font size="+2">

			
		
<input  type="submit" value="Registrar Anime" name="RegistrarAnime"> <input type="reset" value="Limpiar campos" name="borrar" onclick="limpiar()" id="bo">
                </font>


</form>

<script type="text/javascript">function limpiar(){
	document.getElementById("NombreAnime").value="";
	document.getElementById("GeneroAnime").value="";
	document.getElementById("TemporadasAnime").value="";
	document.getElementById("EpisodiosAnime").value="";
	document.getElementById("AutorAnime").value="";
	document.getElementById("ImagenAnime").value="";
	document.getElementById("DescripcionAnime").value="";
    document.getElementById("FechaAnime").value="";
        document.getElementById("OrigenAnime").value="";
    
}</script>
<br />
<br />
<br /> 


    
<table>
    <th></th>
    <tr>
    	<td> <span class="error"><?php echo $Nombree ?></span></td>     
    </tr>
    <tr>
  	  <td>  <span class="error"><?php echo $Generoe ?></span></td>     
    </tr>
    <tr>
   	 <td> <span class="error"><?php echo $Temporadae ?></span></td>     
    </tr>
    <tr>
   	 <td> <span class="error"><?php echo $Episodiose ?></span></td>     
	</tr>
	<tr>
   	 <td> <span class="error"><?php echo $Autore ?></span></td>     
	</tr>
	<tr>
   	 <td> <span class="error"><?php echo $Fechae ?></span> </td>     
	</tr>
	<tr>
   	 <td><span class="error"><?php echo $Imagene ?> </span></td>     
	</tr>
	<tr>
   	 <td> <span class="error"><?php echo $Descripcione ?> </span></td>     
	</tr>
	<tr>
  	  <td></span> <span class="error"><?php echo $Origene ?></span></td>     
	</tr>

<?php

//Linea de codigo para agregar la imagen en la base de datos			
if(isset($_REQUEST['RegistrarAnime'])&&($errores==false)){
	
		$conexion =mysqli_connect("localhost","root","","animes");		
	if(mysqli_connect_errno()){
			echo "fallo en la conexion : ".mysqli_connect_error();
		}else{
			echo"conexión a base de datos aprobada.";
		}
//codificacion para darle e formato a la imagen
	$Imagena = addslashes(file_get_contents($_FILES['ImagenAnime']['tmp_name']));
//linea de codigo para insertar en la base de datos el registro
		$insert= "Insert into registrosanimes (Nombre,Autor,Temporadas,Episodios,Genero,Origen,Fecha_Emision,descripcion,Imagen)
		VALUES('$Nombrea','$Autora','$Temporadaa','$Episodiosa','$Generoa','$Origena','$Fechaa','$Descripciona','$Imagena')";
					if (!mysqli_query($conexion,$insert)){
						echo "Error".mysqli_error($conexion);
						echo "Error al insertar registro";
					}
					else
					{
					echo "<br /> Registro exitoso.";
					echo "<br /><h1>Datos de entrada:</h1><br/>";
					echo "<br/>Nombre Anime: ".$Nombrea."<br/>";
					echo "<br/>Genero: ".$Generoa."<br>";
					echo "<br/>Temporadas: ".$Temporadaa."<br>";
					echo "<br/>Episodios: ".$Episodiosa."<br/>";
					echo "<br/>Autor: ".$Autora."<br>";
					echo "<br/>Fecha: ".$Fechaa."<br/>";
					echo "<br/>Descripción: ".$Descripciona."<br/>";
					echo "<br/>Origen: ".$Origena."<br/>";
		
					/*
					$Nombrea="";
				$Generoa="";
				$Temporadaa="";
				$Episodiosa="";
				$Fechaa="";
				$Descripciona="";
				$Origena="";
				$Autora="";
				$Imagena="";
			$errores = false;*/
			?>
<script type="text/javascript">
	limpiar();
</script>
<?php

					}
				}
					if(isset($_REQUEST['RegistrarAnime'])&&($errores==true)){
			echo "Se encontraron errores en los datos favor de verificar.";
		}		
			
	?>
<div id="apDiv2"><a href="Pagina Principal.html"><img src="Imagenes/volvder.PNG" width="158" height="44" alt="volver" /></a></div>
</body>
</html>