<?php
        include_once("../database/conexion.php");
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Consultar catalogo disponible</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/31127b7562.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="justify-content-center">
  <header>
		<div class="logo">
			<h3>BOUTIQUE D'KAR</h3>
			<p>Lo mejor de moda para <span>ellos!</span></p>
		</div>
		<div class="contenedor">
			<input type="checkbox" id="menuprincipal">
			<label class="fas fa-bars" for="menuprincipal"></label>
			<nav class="menu">
				<a href="Inicio.html">INICIO</a></li>
				<a href="RegistrarIngreso.html">INGRESO DE PRENDAS</a></li>
				<a href="SalidaProducto.html">SALIDA DE PRENDAS</a></li>		
				<a href="#">VER PRENDAS</a></li>
				<a href="#">CODIGOS DE PRENDAS</a></li>
				<a href="#">CERRAR SESIÓN</a></li>
			</nav>
		</div>		
	</header>
  <h2 style="text-align: center;">Consultar catalogo de productos</h2>
    <!-- FORMULARIO DE CONSULTA-->
    <div class="container justify-content-center">
            <form action="./index.php" method="POST">
                
                
                    
                <div class="container justify-content-center align-items-center">
                        <label for="" class="form-label">Filtrar por </label>
                        <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="check_name" name="checkname" class="custom-control-input" onchange="javascript:showInputName();" checked>
                              <label class="custom-control-label" for="check_name">Nombre producto</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="check_category" name="checkcategory" class="custom-control-input" onchange="javascript:showInputCategory();">
                              <label class="custom-control-label" for="check_category">Categoria</label>
                        </div>
                </div>   
                <div class="form-group justify-content-center align-items-center" id="input-nombre" style="display:block;">
                  <label for="nombre"></label>
                  <input type="text" class="form-control row" name="nombre" id="nombre">
                  <small id="helpId" class="text-muted">Ingrese el nombre de la prenda a buscar</small>
                </div>
              
                <div class="form-group justify-content-center align-items-center" id="categoria-div" style="display:none;">
                    <label for="categoria-selector">Seleccionar categoria: </label>
                    <select class="custom-select row" name="categoria-selector" id="categoria-selector">
                      <option selected>Select one</option>
                      <option value="chompa">Chompa</option>
                      <option value="conjunto">Conjunto</option>
                      <option value="pantalones">Pantalones</option>
                      <option value="otros">Otros</option>
                    </select>
                </div>
             
                <div class="row justify-content-center align-items-center">
                    <Input type="submit" value="Buscar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-danger">
                </div>
        </form>
    </div>
    <!--TABLA DE CONTENIDOS-->

    <div class="container-fluid">
    <table class="table">
   <thead class="table-dark">
    <tr>
      <th scope="col">Codigo Producto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Talla</th>
      <th scope="col">Color</th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Imagen</th>
      <th scope="col">View</th>

    </tr>
  </thead>
  <tbody class="myTable">
        <?php
            if(isset($_POST["nombre"])){
          
            $v2 = $_POST['nombre'];
            //conuslta SQL
            $sql = "SELECT * FROM ";
            $result = mysqli_query($conexion, $sql);
            //cuantos reultados hay en la busqueda
            $num_resultados = mysqli_num_rows($result);
            echo "<p>Número de perros encontrados: ".$num_resultados."</p>";
            //mostrando informacion de los perros y detalle
            for ($i=0; $i <$num_resultados; $i++) {
            $row = mysqli_fetch_array($result); 
      

            echo "<tr>";
                                //para obtener los credenciales del formulario
                    echo  "<td>".$row['DNI']."</td>";
                    echo  "<td>".$row['Nombre']."</td>";    
                    echo "<td>".$row['Raza']."</td>";
                    
                    if($row['Genero']==1) $sexo="Macho";
                    else $sexo="Hembra";
                    echo "<td>".$sexo."</td>";
                    if($row["FechaNacimiento"]==NULL) $nac="No especificado";
                    else $nac=$row["FechaNacimiento"];
                    echo "<td>".$nac."</td>";
                   
                    echo "<td>";
                    echo '<img class="rounded" src="data:image/jpeg;base64,'.base64_encode( $row['Foto'] ).'" style="height:100px;width:100px";/>';
                    echo "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-primary' role='button' href='../model/consultar_historia.php?dni=".$row['DNI']."'>Consultar</a>";
                    echo "<a class='btn btn-warning m-1' role='button' href='../model/registrar_historia.php?dni=".$row['DNI']."'>Registrar</a>";
                    echo "</td>";
             echo " </tr>";
            }
        }
        ?>
    </tbody>
    </table>


    </div>
      
    <footer>
		<div class="pie fixed-bottom">
			<a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
			<a href="#"><i class="fab fa-instagram fa-2x"></i></a>
			<a href="#"><i class="fas fa-map-marked-alt fa-2x"></i></a>
			<p>Copyright © 2021, Todos los derechos reservados.</p>
		</div>
		
	</footer>


    <!-- Optional JavaScript -->
    <script src="./script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>