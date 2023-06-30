<?php
require ('../../model/Conexion.php');
$con=conectar();
    $id = $_POST['codigo'];
    $jornada = $_POST['jornada'];
    $comienzo = $_POST['comienzo'];
    $fin = $_POST['fin'];
    $Estado = $_POST['Estado'];

    $sql="UPDATE Ficha SET jor_Fic='$jornada',fecCom_Fic='$comienzo',
    fecFin_Fic='$fin',est_Fic='$Estado' WHERE (ide_Fic='$id')";
    $query=mysqli_query($con,$sql);
    
    if($query){
        echo "<script> alert('Se actualizo correctamente');
         location.href = '../../views/ficha/readFicha.php';
        </script>";
      
      }else{
        echo "<script> alert('incorrecto, vuelve a intentarlo');
        location.href = '../../views/ficha/readFicha.php';
        </script>";
     }
?>

