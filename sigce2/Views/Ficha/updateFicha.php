<?php 
    include('../../model/Conexion.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM ficha WHERE ide_Fic='$id'";
    $query=mysqli_query(conectar(),$sql);
    $row=mysqli_fetch_array($query);
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
<form action="../../Controllers/Fichas/update.php" method="POST">
                    <input type="hidden" name="codigo" value="<?php echo $row['ide_Fic']  ?>">
                    <div>
                        <label for="Nombre">JORNADA: </label>
                                <input type="text" class="form-control mb-3" name="jornada"  value="<?php echo $row['jor_Fic']  ?>">
                    </div>
                    <div>
                        <label for="Nombre">FECHA DE COMIENZO</label>
                                <input type="date" class="form-control mb-3" name="comienzo" value="<?php echo $row['fecCom_Fic']  ?>">
                    </div>
                    <div>
                         <label for="Nombre">FECHA DE FIN</label>
                                <input type="date" class="form-control mb-3" name="fin" value="<?php echo $row['fecFin_Fic']  ?>">
                    </div>
                    <div>
                        <label for="Nombre">Estado</label>
                                <input type="text" class="form-control mb-3" name="Estado" value="<?php echo $row['est_Fic']  ?>">
                    </div>                  
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
</body>
</html>