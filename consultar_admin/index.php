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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body class="justify-content-center">
  <header>
		
		<div class="logo">
			<h3>BOUTIQUE D'KAR</h3>
			<p>Lo mejor de moda para <span>ellos!</span></p>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menu principal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ingreso de prendas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Salida de prendas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Ver prendas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Codigo de prendas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Cerrar sesion</a>
      </li>
    </ul>
  </div>
</nav>	
	</header>
  <h2 style="text-align: center;">Consultar catalogo de productos</h2>
    <!-- FORMULARIO DE CONSULTA-->
    <div class="container justify-content-center">
            <form action="./index.php" method="POST" enctype='multipart/form-data'>
                
                
                    
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
                  <input type="text" class="form-control row" name="nombre" id="nombre" value="">
                  <small id="helpId" class="text-muted">Ingrese el nombre de la prenda a buscar</small>
                </div>
              
                <div class="form-group justify-content-center align-items-center" id="categoria-div" style="display:none;">
                    <label for="categoria-selector">Seleccionar categoria: </label>
                    <select class="custom-select row" name="categoria" id="categoria">
                     
                      <option value="chompa" selected>Chompa</option>
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
   <thead class="table-primary">
    <tr>
      <th scope="col">Codigo Producto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Talla</th>
      <th scope="col">Color</th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Unidades</th>
      <th scope="col">Imagen</th>
      <th scope="col">View</th>

    </tr>
  </thead>
  <tbody class="myTable">
        <?php
            if(isset($_POST["nombre"])){
          
            $nombre_producto = $_POST['nombre'];
            $categoria_producto=$_POST['categoria'];
            //conuslta SQL
            $sql = "SELECT P.idProducto as ID, P.nombre as nombre, C.nombre as color,T.nombre as talla,C.nombre,P.precioUnitario as precioUnit,P.unidadesDisp as unidades,P.imagen as imagen FROM Producto as P
                             LEFT JOIN Categoria as C
                             ON P.idCategoria=C.idCategoria
                             LEFT JOIN Talla as T
                             ON P.idTalla=T.idTalla
                             LEFT JOIN Color as C
                             ON P.idColor=C.idColor
                   WHERE P.nombre LIKE '%$nombre_producto%' OR C.nombre LIKE '%$categoria_producto%'";
           
            $result = mysqli_query($conexion, $sql);
            //cuantos reultados hay en la busqueda
            $num_resultados = mysqli_num_rows($result);
            echo "<p>Número de prendas encontradas: ".$num_resultados."</p>";
            //mostrando informacion de los perros y detalle
            for ($i=0; $i <$num_resultados; $i++) {
            $row = mysqli_fetch_array($result); 
      

            echo "<tr>";
                                //para obtener los credenciales del formulario
                    echo  "<td>".$row['ID']."</td>";
                    echo  "<td>".$row['nombre']."</td>";    
                    
                    echo "<td>".$row['talla']."</td>";
                    echo "<td>".$row['color']."</td>";
                    echo "<td>".$row['precioUnit']."</td>";
                    echo "<td>".$row['unidades']."</td>";
                    echo "<td>";
                    echo '<img class="rounded" src="data:image/jpeg;base64,'.base64_encode( $row['imagen'] ).'" style="height:100px;width:100px";/>';
                    echo "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-warning' role='button' data-toggle='modal' data-target='#myModal'>Ver</a>";
                    echo '<div class="modal fade" id="myModal" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">'.$row['nombre'].'</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                          </div>
                          <!-- Modal body -->
                          <div class="modal-body">
                            <img class="rounded" src="data:image/jpeg;base64,'.base64_encode( $row['imagen'] ).'" style="height:100px;width:100px";/>
                            <h3>Unidades disponibles</h3>
                            <h4>Small <span class="badge badge-warning">'.$row['unidades'].'</span></h4>
                            <h3>Talla</h3>
                            <h5>Small <span class="badge badge-success">'.$row['talla'].'</span></h5>
                            <h3>Color</h3>
                            <h5>Small <span class="badge badge-success">'.$row['color'].'</span></h5>
                            <h3>Precio unitario</h3>
                            <h4>Small <span class="badge badge-warning">'.$row['precioUnit'].'</span></h4>
                          </div>
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                          </div>
                      </div>
                    </div>
                  </div>';
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