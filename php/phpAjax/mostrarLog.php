<?php

    require_once("../constants.php");
    if(!isset($_REQUEST["N"])){
        header("Location: ../../index.php?".GET::$ERROR."=".ERROR::$CREDENTIANS_REQUIRED);
        die();
    }

    require_once("../db.php");
    $db=new DataBase();

    
    switch ($_REQUEST["N"]){
        case '1': 
            echo('
                    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:450px">

                    <div class="w3-center"><br>
                        <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
                    </div>

                    <form class="w3-container" action="php/login.php" method="post">
                        <div class="w3-section">
                        <label><b>E-mail</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" maxlength="'.DATA_BASE::$EMAIL_LEN.'" placeholder="Enter E-mail" name="'.POST::$EMAIL.'" required>
                        <label><b>Password</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="password" maxlength="'.DATA_BASE::$PASSWORD_LEN.'" placeholder="Enter Password" name="'.POST::$PASSWORD.'" required>
                        <div class"w3-row-padding">
                            <button class="w3-btn-block w3-green w3-section w3-padding w3-col s6" type="submit">Login</button>
                            <button class="w3-btn-block w3-red w3-section w3-padding w3-col s6" type="reset">Reset</button>
                        </div>
                        </div>
                    </form>
            ');
            
            break;
        case '2':
            echo('
                    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:450px">

                        <div class="w3-center"><br>
                            <span onclick="document.getElementById(\'id02\').style.display=\'none\'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
                        </div>
                        <br>
                        <h1 class="w3-center w3-container"><b>CREAR USUARIO</b></h1>

                        <form class="w3-container" method="post" action="php/create/crearusu.php">
                            <div class="w3-section">
                            <label><b>Nombre</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese su nombre" maxlength="'.DATA_BASE::$NAME_USER_LEN.'" onkeypress="return soloLetras(event)" name="nombre" required>
                            <label><b>Contraseña</b></label>
                            <input class="w3-input w3-border" type="password" placeholder="Digite una contraseña" maxlength="'.DATA_BASE::$PASSWORD_LEN.'" name="pass" required>
                            <label><b>Correo</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Ingrese su correo electrónico" maxlength="'.DATA_BASE::$EMAIL_LEN.'" name="email" id="email" required>
                            <div class"w3-row-padding">
                                <div class="w3-col s6">
                                    <label><b>País</b></label><br>
            ');
                        
                           echo("<select name='pais'>");
                           $respuestas=$db->query("select id_Country,detailCountry FROM country");
                            while($respuesta=$respuestas->fetch_assoc()){
                                echo("<option class='w3-padding' required value='".$respuesta["id_Country"]."'>".$respuesta["detailCountry"]."</option>");
                            }
                            echo("</select>");
            echo('
                            </div>
                                <div class="w3-col s6">
                                    <label><b>Ciudad</b></label>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese su cuidad" maxlength="'.DATA_BASE::$CITY_LEN.'" onkeypress="return soloLetras(event)" name="ciudad">
                                </div>
                            </div>
                            <div class"w3-row-padding">
                                <div class="w3-col s6">
                                    <label><b>Empresa</b></label><br>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese su empresa" maxlength="'.DATA_BASE::$BUSINESS_LEN.'" onkeypress="return soloLetras(event)" name="empresa">
                                </div>
                                <div class="w3-col s6">    
                                    <label ><b>Teléfono</b></label><br>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese su empresa" onKeyup="addDashes(this)" maxlength="'.DATA_BASE::$PHONE_LEN.'" name="telefono">
                                </div>
                                <input type="hidden" name="N" value="1"></input>
                            </div>
                            <div class"w3-row-padding">
                                <button class="w3-btn-block w3-green w3-section w3-padding w3-col s6" type="submit">Crear</button>
                                <button class="w3-btn-block w3-red w3-section w3-padding w3-col s6" type="reset">Limpiar</button>
                            </div>
                            </div>
                        </form>
                    </div>
                ');
            break;
        case '3': 
            
            break;
    }

?>

