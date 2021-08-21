<?php
	//conexion a la Base de datos
	$conn = mysqli_connect("boutiquedkar.cuxsffuy95k9.us-east-1.rds.amazonaws.com","admin", "admin12345678", "boutique");
	if (!$conn) {
        echo "Error de conexion: " . mysqli_connect_error();
        echo "NO TE PREOCUPES,INTENTA VOLVER A CARGAR LA PAGINA.EL SERVIDOR DE BASE DE DATOS PUEDE ESTAR OCUPADO";
        die();		
	}

	//FALTAAAAAAAAAAAAAAAAAAAAAAAAA TODAVIA NO ESTA LISTO - NO PROBAR!!!
	
	//capturando datos
	$v1 = $_REQUEST['Categoria'];
	$v2 = $_REQUEST['Subcategoria']; 
	$v3 = $_REQUEST['Talla']; 
	$v4 = $_REQUEST['Color']; 
	$v5 = $_REQUEST['Cantidad']; 
	$v6 = $_REQUEST['FotoA']; 
    $v7 = $_REQUEST['FotoB']; 
	
	//Obtenemos la subcategoria
	$consultaSC="SELECT idSubcategoria FROM Subcategoria where nombre='$v2'";
	$resultadoSC=mysqli_query($conn,$consultaSC);
	$array=mysqli_fetch_array($resultadoSC);
	$codSubcat = $array[0];

	//Obtenemos la talla
	$consultaT="SELECT idTalla FROM Talla where nombre='$v3'";
	$resultadoT=mysqli_query($conn,$consultaT);
	$array=mysqli_fetch_array($resultadoT);
	$codTalla = $array[0];

	//Obtenemos el color
	$consultaC="SELECT idColor FROM Color where nombre='$v4'";
	$resultadoC=mysqli_query($conn,$consultaC);
	$array=mysqli_fetch_array($resultadoC);
	$codColor = $array[0];

	//conuslta SQL
	$consulta="SELECT COUNT(*) as contar FROM Producto where idSubcategoria='$codSubcat' AND idTalla='$codTalla' AND idColor='$codColor'";
	$resultado=mysqli_query($conn,$consulta);
	$array=mysqli_fetch_array($resultado);

	//si registra campos vacios
	if($v1=="" or  $v2=="" or $v5=="" or $v6=="" or $v7==""){
		echo 	"<script>
	                alert('Error: Complete todos los campos!');
	                window.location= 'RegistrarIngreso.php'
	   			 </script>";
	}else{
		$sql = "INSERT INTO Producto VALUES ('', '$codSubcat', '$codTalla', '$codColor', '','','$v5')";
		if (mysqli_query($conn, $sql)) {
			echo 	"<script>
		        alert('Registro exitoso!');
	            window.location= 'RegistrarIngreso.php'
		   		</script>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		
	}
	mysqli_close($conn);	
?>
