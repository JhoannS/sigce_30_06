<?php
require ('../../Model/conexion.php');

$Programa = $_POST['program'];
   $ficha = $_POST['ficha'];
   $Tide  = $_POST['Tide'];
   $ideApr  = $_POST['ideApr'];
   $ideIns  = $_POST['ideIns'];
   $motivo  = $_POST['motivo'];
   $gravedad  = $_POST['gravedad'];
   

$name= $_FILES['ARCHIVO']['name'];
$guardado= $_FILES['ARCHIVO']['tmp_name'];
if (!file_exists("Documentacion")) {
    mkdir('Documentacion',0777,true);
    if (file_exists("Documentacion")) {
        if (move_uploaded_file($guardado,'Documentacion/'.$name)) {
            echo"Guardado satisfactoriamente";
        }else {
            echo"No Guardado ";
        }
    }
}else{
    if (move_uploaded_file($guardado,'Documentacion/'.$name)) {
        echo"Guardado satisfactoriamente";
    }else {
        echo"No Guardado ";
    }
}
$document  = 1;

$sql= "INSERT INTO citacion (est_Cit,obv_Cit, FK_ide_Doc, FK_ide_Apr, FK_ide_Ins) VALUES ('Activa', '$gravedad', $document, $ideApr,  $ideIns)";
$query = mysqli_query(conectar(), $sql);
if($query){
    echo "<script> alert('correcto');
     location.href = '../../views/llamadoAtencion/Llamado.php';
     
    </script>";
  
  }else{
     echo "<script> alert('incorrecto, vuelve a intentarlo');
     location.href = '../../views/llamadoAtencion/Llamado.php';
     </script>";
  }

   ?>