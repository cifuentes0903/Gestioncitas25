<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class=" w3l-login-form">
        <h2>Ingresar aqui</h2>
        <form action="" method="POST">
             <div class=" w3l-form-group">
                <label>Usuario:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="txtusuarios"class="form-control" placeholder="Username o Email" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="txtpass1" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>
            
            <button type="submit" name="ingresar">Ingresar</button>
        </form>
        <p class=" w3l-register-p">No tienes cuenta?<a href="view/Registro.php" class="register"> Registrarse</a></p>

       
    </div>

    <footer>
        <p class=""> &copy; TECNICO DE PROGRAMACION 2022</a></p>
    </footer>
        </form>    

</body>
</html>