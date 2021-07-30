<?php


?>
<!doctype html>
<html lang="es">
  <head>
    <title>Consultar catalogo disponible</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="justify-content-center">
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
    <!-- Optional JavaScript -->
    <script src="./script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>