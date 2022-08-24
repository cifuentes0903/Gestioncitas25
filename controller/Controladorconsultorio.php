<?php
require_once "../config/conexionpoo.php";
require_once "../model/Consultorio.php";
require_once "../view/Fconsultorio1.php";

if(isset($_POST["registroConsul"]))
{
  $idconsultorio = $_POST['txtnumconsul'];
  $nomconsultorio = $_POST['txtnomconsul'];

  $consul= new Consultorio();
  $reg = $consul->registroconsultorio($idconsultorio,$nomconsultorio);

  if($reg){
  	print "<script>alert(\"Consultorio registrado\");
		window.location='../view/Fconsultorios1.php';</script>";
  }else {
  	print "<script>alert(\"Fallo al ingresar los datos.\");
		window.location='Fconsultorios1.php';</script>";
  }
}

?>