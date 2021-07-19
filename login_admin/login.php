<?php

?>
<!doctype html>
<html lang="es">

<head>
    <title>Login Boutique</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="body">


    <div class="container ">
        <form action="login.php" method="post" class="text-center justify-content-center" style="margin-top:5%;">
            <h1 style="color:white;text-align:center;">Login de Usuario</h1>
            <div class="container" style="margin-left: 30%;">
                <div class="form-group col-4 ">
                    <label for="user" style="color:white;">Usuario</label>
                    <input type="email" class="form-control" name="user" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted" style="color:white;">Coloque su correo o su nombre de usuario</small>
                </div>
                <div class="form-group col-4">
                    <label for="password" style="color:white;">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="" minlength="8">
                </div>
                <div class="form-group col-4">
            
                    <label for="password" style="color:white"><a href="mailto:boutique.dkar@hotmail.com">No recuerdas tu contraseña? Click Aqui</a></label>
                </div>

                <div class="form-group col-4">
                    <input type="submit" value="Ingresar" class="btn btn-danger">
                   
                </div>
            </div>

        </form>
    </div>


   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>