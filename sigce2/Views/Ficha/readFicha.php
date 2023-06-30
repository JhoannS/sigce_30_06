<?php 
require('../../Controllers/Fichas/mostrar.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Ficha .:. SIGCE</title>
</head>
<body>
<table >
        <tr>
            <td>NUMERO DE FICHA</td>
            <td>JORNADA</td>
            <td>FECHA DE COMIENZO</td>
            <td>FECHA DE FIN</td>
            <td>ESTADO</td>
            <td>PROGRAMA</td>
            <td></td>
        </tr>
        <?php
            while($row=mysqli_fetch_array($rs)){?>
							 
        <tr>
            <td><?php  echo $row['ide_Fic']?></td>
            <td><?php  echo $row['jor_Fic']?></td>
            <td><?php  echo $row['fecCom_Fic']?></td>
            <td><?php  echo $row['fecFin_Fic']?></td>
            <td><?php  echo $row['est_Fic']?></td>
            <td><?php  echo $row['nom_Pro']?></td>
            <th><a href="updateFicha.php?id=<?php echo $row['ide_Fic'] ?>" class="btn btn-warning">Editar</a></th>
        </tr>
        <?php }?>
        </table>
            </div>
           

         </div>
</body>
</html>