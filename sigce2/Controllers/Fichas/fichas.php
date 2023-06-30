<?php
   require ('../../Model/conexion.php');
   $Numero = $_POST['Numero'];
   $jornada = $_POST['jornada'];
   $Inicio  = $_POST['Inicio'];
   $Fin  = $_POST['Fin'];
   $Estado  = 'Activo';
   $programa  = $_POST['programa'];
   
   $sql = "INSERT INTO ficha (ide_Fic, jor_Fic, fecCom_Fic, fecFin_Fic, est_Fic, FK_ide_Pro) VALUES ('$Numero', '$jornada', '$Inicio', '$Fin', '$Estado', '$programa');";
   
   $query = mysqli_query(conectar(), $sql);
   
   if($query){
     echo "<script> alert('correcto');
      location.href = '../../views/ficha/createFicha.php';
     </script>";
   
   }else{
      echo "<script> alert('incorrecto, vuelve a intentarlo');
      location.href = '../../views/ficha/createFicha.php';
      </script>";
   }
         
?>