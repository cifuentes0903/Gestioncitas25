<!DOCTYPE html>
<html lang="en">
<head>
  <title>Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="imagenes/principal.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Consultorio</button>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Medicos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pacientes</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Citas</a>
    </li>
  </ul>
   <ul class="nav navbar-nav ml-auto">
       <button class="btn btn-danger navbar-btn">Cerrar Sesion</button>
    </ul>
</nav>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
       <form action="" method="POST">

            <div class=" w3l-form-group">
                <label># CONSULTORIO:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="txtnunconsul"class="form-control" placeholder="Numero de consultorio" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Nombre del Consultorio:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="txtnombreconsul"class="form-control" placeholder="Nombre del consultorio" required="required" />
                </div>
            </div>
            
<label class="block">
                      <br>
      <br>
            <button name="registroConsul"  class="btn btn-danger" type="submit">Registrar</button>
        </form>
      

  </div>
</div>

</body>
</html>


