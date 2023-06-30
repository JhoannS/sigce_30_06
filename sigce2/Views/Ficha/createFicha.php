<?php
require ('../../Model/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../Controllers/Fichas/fichas.php" method="post">
    <div>
        <label for="apellido">Ingrese el numero de ficha:</label><br>
	    <input name="Numero" type="number" required>
    </div>
    <div>
        <label for="apellido">Ingrese la jornada de la ficha:</label><br>
	    <input name="jornada" type="text" required>
    </div>
    <div>
        <label for="apellido">Ingrese la fecha de inicio de la ficha:</label><br>
	    <input name="Inicio" type="date" required>
    </div>
    <div>
        <label for="apellido">Ingrese la fecha de finalización de la ficha: </label><br>
	    <input name="Fin" type="date" required>
    </div>
   <!-- LO VOY A DEJAR INACTIVO YA QUE SI VAN A INGRESAR UNA FICHA DEBE ESTAR ACTIVA :V  -->
    <!-- <div> 
        <label for="apellido">Ingrese el estado de la ficha</label><br>
	    <input placeholder="Ingrese el estado de la ficha" name="Articulo" type="text" required>
    </div> -->
    <div>
        <label for="apellido">Articulo de Citacion</label><br>
        <select name="programa">
        <option value="">SELECCIONE EL PROGRAMA</option>
        <?php
        $sql= "SELECT ide_Pro,nom_Pro FROM programa";
        $query = mysqli_query(conectar(), $sql);
           while($values = mysqli_fetch_array($query)){
        echo '<option value="'.$values['ide_Pro'].'">'.$values['nom_Pro'].'</option>';}
        ?>
      </select>
    </div>
<button type="submit">Registrar</button>


    </form>
</body>
</html>