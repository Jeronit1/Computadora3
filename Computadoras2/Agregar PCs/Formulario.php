<?php
session_start(); //se inicia la sesion que sirve para guardar variables globales
include("../Union-Server.php"); //conexion de la base de datos
//Seleccionar la tabla de laboratorios y hacer conexion
$Laboratorios = "SELECT * FROM `laboratorios`";
$resLaboratorio = $conex->query($Laboratorios);
//si el usuario no se logeo lo devuelve
if (((empty($_SESSION["Email"])))) {
    header("location: ../Login/Login.php");
} else {
?>
    <html>

    <head>
        <title>Formulario para agregar una PC</title>
        <link rel="stylesheet" href="../Estilos.css/paginas.css">
    <link> <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>

    <body>
        
        <?php 
        include ("../Estilos.css/nav.php");
        //toma los datos del formulario de PC y lo almaceno en variables
        if (isset($_POST['submit'])) {
            $Procesador = trim($_POST['Procesador']);
            $RAM = trim($_POST['RAM']);
            $MotherBoard = trim($_POST['MotherBoard']);
            $Zocalos = ($_POST['Zocalos']);
            $HDD = ($_POST['HDD']);
            $Marca = ($_POST['Marca']);
            $Laboratorio = ($_POST['Laboratorio']);
            $DIMMs = ($_POST['DIMMs']);
            $Zocalos_Libres = ($_POST['Zocalos_Libres']);
            if (!empty($_POST['PS2'])) {
                $PS2 = 1;
            } else {
                $PS2 = 0;
            };
        }
        ?>
        
        <div class="main_container"> 
        <!-- Formulario PC -->
        <form class="item" action="" method="POST">
           <div class="i_item"> Agregar PC </div>

            <div class="i_item"><label for=""> Procesador:</div></label> 
            <div class="input_contenedor">    <input type="text" name="Procesador" value="<?php
                                                                        if (isset($Procesador)) echo "$Procesador" ?>" /></div> 

            <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
<div>
            <div class="i_item"><label for=""><i class="bi bi-cpu"></i> Memoria RAM:</label></div>
            <div class="input_contenedor"> <input type="number" name="RAM" value="<?php
                                                                    if (isset($RAM)) echo "$RAM" ?>" /></div>
            
            <div class="i_item"> <label for="">  Nro, #Zocalos de Ram </label></div> 
            <div class="input_contenedor"> <input type="number" name="Zocalos" value="<?php

                                                                                if (isset($Zocalos)) echo "$Zocalos" ?>" /> </div>

        
            <div class="i_item"><label for=""> PS/2: </label></div>
            <div class="input contenedor">   <input type="checkbox" name="PS2" value="1" /></div>
</div>
            <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <div class="i_item"> <label for=""> MotherBoard: </label></div>
            <div class="input_contenedor"> <input type="text" name="MotherBoard" value="<?php
                                                                        if (isset($MotherBoard)) echo "$MotherBoard" ?>" /> </div> 
                                                                                    <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            
            
            <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <div class="i_item"><label for=""><i class="bi bi-disc"></i>  Disco:</label></div>
            <div class="input_ contenedor">  <input type="text" name="HDD" value="<?php
                                                            if (isset($HDD)) echo "$HDD" ?>" /></div>

            <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->

             <div class="i_item"><label for=""><i class="bi bi-pc-display-horizontal"> </i> Marca:</label></div>
             <div class="input_contenedor"> <input type="text" name="Marca" value="<?php
                                                            if (isset($Marca)) echo "$Marca" ?>" /></div>
            <!-- Muestro todos los laboratorios de a base de datos -->
            
            
<div class="i_item"><label for="">  Seleccionar:</label></div>
            <div class="input_login"> 
                <select name="Laboratorio">
                    <option value="">Laboratorios</option>
                    <?php
                    while ($RegistroLaboratorios = $resLaboratorio->fetch_array(MYSQLI_BOTH)) {
                        echo '<option value="' . $RegistroLaboratorios['Laboratorio'] . '">' . $RegistroLaboratorios['Laboratorio'] . '</option>';
                    }
                    ?>
                </select> </div>

            <div class="i_item"><label> <i class="bi bi-align-top"></i>  DIMMs:</label></div>
            <div class="input_contenedor"> <input type="text" name="DIMMs" value="<?php
                                                            if (isset($DIMMs)) echo "$DIMMs" ?>" /></div>

            <!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <div class="i_item"><label for=""><i class="bi bi-grip-horizontal"></i> Zocalos_Libres:</label> </div>
            
                <div class="input_contenedor">  <input type="text" name="Zocalos_Libres" value="<?php
                if (isset($Zocalos_Libres)) echo "$Zocalos_Libres" ?>" /></div>
            <!--checkbox -->

            
            <div class="i_item">  <input  class="button_item"  type="submit" name="submit" value="Enviar" /> </div>
        </form> </div>
    <?php
    include("../Agregar PCs/Server-Form.php"); //Luego de rellenar todo lo manda al proceso de server-form
}
    ?>
    </body>

    </html>