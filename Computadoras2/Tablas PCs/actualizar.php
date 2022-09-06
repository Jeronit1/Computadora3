<?php
session_start();
include("../Union-Server.php"); //Union a la base de datos
if (((empty($_SESSION["Email"])))) { //Si no se logeo lo expulsa
    header("location: ../Login/Login.php");
} else {
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Base de datos Alumnos</title>
        <link rel="stylesheet" href="../Estilos.css/paginas.css">
    <link> <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        
    </head>

    <body> 
    <?php include("../Estilos.css/nav.php") ?>

        
        <?php
        //PAGINA DE ACtUALIZAR PERFIL
        if (isset($_POST['submitPerfil']) or isset($_POST['submitPerfil1'])) { ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <?php
                //se selecciona atraves del idlogin para que muestre el usuario a actualizar
                $SQL = "SELECT * FROM `login-alumnos` WHERE IDLogin = '" . $_SESSION["IDLogin"] . "'";
                $Resultado = mysqli_query($conex, $SQL); //conexion para ver la tabla del usuario
                while ($mostrar = mysqli_fetch_array($Resultado)) { //imprime la tabla del usuario
                ?>
                    <!-- espacio donde se sube la imagen-->
         <div class="main_container">  
         <div class="item">  
         <script src="../script.js"></script>
         <div><img width="70px" id="imagenPrevisualizacion" src="<?php echo str_replace("./", "../", $mostrar['Imagen']) ?>" alt="imagen"><!-- muestra la imagen subida-->  </div>          
         <div> <input type="file" name="Imagen" id="seleccionArchivos" accept="image/*"> </div>
         <div>Nombre:<input type="text" name="Nombre" value="<?php echo $mostrar['Nombre'] ?>" /></div>
         <div>Email:<input type="text" name="Email" value="<?php echo $mostrar['Email'] ?>" disabled /></div>
         <div>Contraseña:<input type="text" name="Contraseña" value="<?php echo $mostrar['Contraseña'] ?>" /></div>
         <div><input type="submit" value="Editar" name="submitPerfil1"><!-- Boton de actualizar que lleva al proceso_update -->  </div>           
         <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
                    </div>
                <?php

                }
                //PAGINA DE ACTUALIZAR USUARIOS
            } else if (isset($_GET["IDLogin"])) {
                ?>
                <form action="" method="POST">
                    <?php
                    $IDLogin = $_GET["IDLogin"]; // Se obtiene en IDlogin del objeto que se va a actualizar
                    $SQL = "SELECT * FROM `login-alumnos` WHERE IDLogin = '$IDLogin'";
                    $Resultado = mysqli_query($conex, $SQL); //conexion para ver la tabla del usuario
                    while ($mostrar = mysqli_fetch_array($Resultado)) { //imprime la tabla del usuario
                    ?>
                        <input type="hidden" value="<?php echo $mostrar['IDLogin'] ?>" name="IDLogin" required minlength="1">
                        <p>Nombre:<input type="text" name="Nombre" value="<?php echo $mostrar['Nombre'] ?>" /></p>
                        <p>Email:<input type="text" name="Email" value="<?php echo $mostrar['Email'] ?>" /></p>
                        <p>Contraseña:<input type="text" name="Contraseña" value="<?php echo $mostrar['Contraseña'] ?>" /></p>
                        <p>Rango:<input type="text" name="Administrador" value="<?php echo $mostrar['Administrador'] ?>" /></p>
                        <input type="submit" value="Actualizar" name="submitUser">
                </form>
            <?php
                    }
                    //PAGINA DE ACtUALIZAR PCs
                } else {
            ?>
            <form action="" method="POST">
                <!--formulario que lleva al proceso de update cuando se oprime el boton -->
                <?php
                    $id = $_GET["ID"]; // Se obtiene en ID del objeto que se va a actualizar
                    $SQL = "SELECT * FROM `pcs` WHERE ID = '$id'"; //se selecciona atraves del id para que muestre el usuario a actualizar
                    $Resultado = mysqli_query($conex, $SQL); //conexion para ver la tabla del usuario
                    while ($mostrar = mysqli_fetch_array($Resultado)) { //imprime la tabla del usuario
                ?>
                    <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="ID" required minlength="1">
                    <!--id oculto para hacer el proceso de update no mostrar -->
                    <p>Procesador:<input type="text" name="Procesador" value="<?php echo $mostrar['Procesador'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>Memoria RAM:<input type="number" name="RAM" value="<?php echo $mostrar['RAM'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>MotherBoard:<input type="text" name="MotherBoard" value="<?php echo $mostrar['MotherBoard'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>Nro, #Zocalos de Ram<input type="number" name="Zocalos" value="<?php echo $mostrar['Zocalos'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>Disco:<input type="text" name="HDD" value="<?php echo $mostrar['HDD'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>Marca:<input type="text" name="Marca" value="<?php echo $mostrar['Marca'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>Seleccionar:<select name="Laboratorio">
                            <option value="Laboratorio 1">Laboratorio 1</option>
                            <option value="Laboratorio 2">Laboratorio 2</option>
                            <option value="Laboratorio 3">Laboratorio 3</option>
                        </select></p>
                    <p>DIMMs:<input type="text" name="DIMMs" value="<?php echo $mostrar['DIMMs'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>Zocalos_Libres:<input type="text" name="Zocalos_Libres" value="<?php echo $mostrar['Zocalos_Libres'] ?>" /></p>
                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
                    <p>PS/2:<input type="checkbox" name="PS2" value="1" /></p>
                    <p>Cambios:<input type="text" name="Historial" /></p><!-- Hacer mas grande el textbox -->
                    <p>Administrador:<input type="text" name="Administrador" value="<?php echo $mostrar['Administrador'] ?>" /></p>
                    <input type="submit" value="Actualizar" name="submitUpdate"> <input type="submit" value="Eliminar" name="submitDelete"><!-- Boton de actualizar que lleva al proceso_update -->
            </form>
<?php
                    }
                }
                include("../Tablas PCs/Proceso_update.php"); //Lo lleva al proceso update
            }
?>

    </body>

    </html>