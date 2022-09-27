<?php
session_start(); //se inicia la sesion que sirve para guardar variables globales 
include("../Union-Server.php"); // Conexion a la base de datos
?>
<html>

<head>

<link rel="stylesheet" href="../Estilos.css/paginas.css">       
<link rel="stylesheet" href="../Estilos.css/tablas.css">       
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <title>Formulario</title>

</head>

<body>

    <?php
    if ((($_SESSION["UserAdmin"] == 0))) { //Si el usuario no es admin lo expulsa
        header("location: ../PaginaDeInicio.php");
    } else {
    ?>
    
<?php include('../Estilos.css/nav.php') ?>

<div class="main_container">
            <table class="item">
                <thead>
                
                    <tr>
                        <th><label for=""><i class="bi bi-grid"></i>Id-Login</label></th>
                        <th><label for=""><i class="bi bi-people-fill"></i>Nombre</label></th>
                        <th><label for=""><i class="bi bi-envelope"></i>Email</label></th>
                        <th><label for=""><i class="bi bi-shield-lock"></i>Contraseña</label></th>
                        <th><label for=""><i class="bi bi-card-image"></i>Imagen</label></th>
                        <th><label for=""><i class="bi bi-eye"></i>Administrador</label></th>
                        <th><label for=""><i class="bi bi-pencil-square"></i>Editar</label></th>
                    </tr>
                </thead>

                <?php
                $SQL = "SELECT * FROM `login-alumnos` WHERE 1"; //selecciono toda la base de datos para mostrarla
                $Resultado = mysqli_query($conex, $SQL); //se hace la conexion con toda la base de datos
                while ($mostrar = mysqli_fetch_array($Resultado)) { //imprime por pantalla toda la base de datos 
                ?>
                    <tr>
                        <td> <?php echo $mostrar['IDLogin'] ?> </td>
                        <td> <?php echo $mostrar['Nombre'] ?></td>
                        <td><?php echo $mostrar['Email'] ?></td>
                        <td><?php echo $mostrar['Contraseña'] ?></td>
                        <td><img width="45" src="<?php echo str_replace("./", "../", $mostrar['Imagen']) ?>" alt="imagen"></td>
                        <td><?php if ($mostrar['Administrador'] == 0) {
                                echo "Usuario";
                            } else {
                                echo "Administrador";
                            }  ?></td>
                        <!-- Obtiene el Id a actualizar -->
                        <td> <a href="../Tablas PCs/actualizar.php?IDLogin=<?php echo $mostrar["IDLogin"]; ?>"><label for=""><i class="bi bi-pencil-fill"></i> </label>Editar</a> </td>
                    </tr>

            <?php
                }
            }
            mysqli_free_result($Resultado);
            ?>
            </table>
        </div>
</body>

</html>