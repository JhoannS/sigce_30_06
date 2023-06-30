<?php
require ('../../Model/conexion.php');
$sql="SELECT ficha.ide_Fic,ficha.jor_Fic, ficha.fecCom_Fic ,ficha.fecFin_Fic ,ficha.est_Fic,programa.nom_Pro FROM ficha inner join programa on  ficha.FK_ide_Pro = programa.ide_Pro;";
$rs=mysqli_query(conectar(),$sql);

?>