<?php
require ('../../Model/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/instructor/crearCitacion.css">
    <link rel=icon href='../../assets/img/logo.png' sizes="32x32" type="image/png">
    <title>Crear Citacion | SIGCE</title>
</head>

<body>
    <header>
        <nav>

            <h2>Registrar Citación:</h2>
            <div class="buscador">
                <input type="text"><i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <img src="../../assets/img/user.png" alt="user">
        </nav>
    </header>
    <section>
        <div class="dash">
            <img src="../../assets/img/logo.png" alt="logo_sena">
            <div class="navegacion">
                <div class="fa-solid fa-magnifying-glass"></div>
                <div class="fa-solid fa-envelope"></div>
                <div class="fa-solid fa-calendar-days"></div>
                <div class="fa-solid fa-list-check"></div>
                <div class="fa-solid fa-gear"></div>
            </div>
            <img src="../../assets/img/user.png" alt="user">
        </div>
    </section>
    <aside>
        <div class="contenido">
            <h3>Registra Nueva Citacion:</h3>
            <form action="" method="post">
                <div class="colum1">

                    <div>
                        <label for="apellido">Programa:</label><br>
                        <div class="label">
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

                    </div>

                    <label for="apellido">Ficha:</label><br>
                    <div class="label">
                        <input name="Numero" type="number" required>
                    </div>

                    <div>
                        <label for="apellido">Nombre del aprendiz:</label><br>
                        <div class="label">
                            <select name="aprendiz">
                                <option value="">SELECCIONE EL aprendiz</option>
                            </select>
                        </div>

                    </div>

                    <div>

                        <label for="motivo">Motivo</label>
                        <div class="checks">
                        <div class="label-check">
                            <input type="checkbox"><span> No Presenta Evidencias</span>
                        </div>

                        <div class="label-check">
                            <input type="checkbox"><span> Fallas Injustificadas</span>
                        </div>

                        <div class="label-check">
                            <input type="checkbox"><span> Motivos Diciplinarios</span>
                        </div>

                        <div class="label-check">
                            <input type="checkbox"><span> Mal uso de los Equipos sena</span>
                        </div>
                    </div>


                    </div>


                </div>

                <div class="colum2">

                    <div>

                        <label for="falta">Tipo de Falta:</label><br>
                        <div class="label">
                            <select name="falta">
                                <option value="" class="option">Falta</option>
                            </select>
                        </div>

                    </div><br>

                    <div>
                        <label for="apellido">Gravedad: </label><br>
                        <input type="radio" name="gravisima" id=""><span> Gravisima</span><br>
                        <input type="radio" name="grave" id=""><span> Grave</span><br>
                        <input type="radio" name="leve" id=""><span> Leve</span><br>
                    </div>

                    <div>
                        <label for="apellido">Selecciona Evidencias: </label><br>
                        <input type="file" name="" id="">

                    </div>
                    <button type="submit">Enviar</button>
                </div>


            </form>
        </div>
    </aside>
    <script src="https://kit.fontawesome.com/0774745bde.js" crossorigin="anonymous"></script>
</body>

</html>