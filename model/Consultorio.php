<?php
require_once "../config/conexionpoo.php";

class Consultorio extends Conectar
{
	protected $Numconsul;
	protected $Nombreconsul;

   public function _construct()
   {
    parent::_construct();
   }
public function registroconsultorio($Numconsul,$Nombreconsul)
  {   
    //verificar de que no exista un usuario en la bd 
    $sql1 = "SELECT * FROM consultorios WHERE NumeroC = '$Numconsul'";
    $Resultado=$this->_bd->query($sql1);
    $fila = mysqli_num_rows($Resultado);
    if($fila > 0)
    {
      echo "<script>
          alert('Consultorio ya esta registrado');
          window.location = '../view/Fconsultorios1.php';
      </script>";   
    }else
    {
    $sql = "INSERT INTO consultorios(NumeroC,NombreC) VALUES ('".$Numconsul."','".$Nombreconsul."')";
    $Resul=$this->_bd->query($sql);
    if(!$Resul)
    {
      print "<script>alert(\"Fallo al ingresar los datos.\");
    window.location='../index.php';</script>";
    }else{
      return $Resul;
      print "<script>alert(\"Datos Ingresados.\");
    window.location='../view/Fconsultorios1.php';</script>";
      $Resul->close();
      $this->db->close();
    }
  }
}

public function listarconsultorios()
{
 $sql1 = "SELECT * FROM consultorios ORDER BY NumeroC";
 $Resul=$this->_bd->query($sql1);
 if($Resul->num_rows > 0)
 {
  while($row = $Resul->fetch_assoc())
  {
       $resultset[]=$row;
  }
 }
  return $resultset;


}

 public function eliminarconsultorio()
 {
  $query = "DELETE FROM consultorios WHERE NumeroC='$id'";
  $Resul=$this->_bd->query($query);
  if(!$Resul)
  {
    print "<script>alert(\"Registro eliminado\");
    window.location='../view/Fconsultorios1.php';</script>";
  }else 
  {
   print "<script>alert(\"No se puede eliminar  consultorio\");
    window.location='../view/Fconsultorios1.php';</script>"; 
  }
 }


}


?>