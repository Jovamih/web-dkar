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

<body class="body" background="./img/cielo.jpg">


    <div class="container " styles="">
        <form action="login.php" method="post" class="text-center justify-content-center" style="margin-top:5%;">
            <h2>Login de Usuario</h2>
            <div class="container" style="margin-left: 30%;">
                <div class="form-group col-4 ">
                    <label for="">Usuario</label>
                    <input type="email" class="form-control" name="user" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Coloque su correo o su nombre de usuario</small>
                </div>
                <div class="form-group col-4">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="" minlength="8">
                </div>
                

                <div class="form-group col-4">
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                    <input type="reset" value="Cancelar" class="btn btn-danger">
                </div>
            </div>

        </form>
    </div>


    <!--Pie de pagina-->
    <footer class="text-center text-white fixed-bottom" style=" height:7%;" id="footer">

        <div class="text-center p-3" style="background-color: rgba(102, 90, 90, 0.2);">
            © 2021 Copyright. Boutique D'KAR
            <a class="text-white" href="#">www.boutiquedkar.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>