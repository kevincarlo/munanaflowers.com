<?php
    require_once("../constants.php");
    /* check if exist a session */
    session_start();
    if(!isset($_REQUEST["N"])){
        header("Location: ../../index.php?".GET::$ERROR."=".ERROR::$CREDENTIANS_REQUIRED);
        die();
    }
    require_once("../db.php");
    $db=new DataBase();
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo($_SESSION[SESSION::$USER_NAME]); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
    <style>
        html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        .invisible{display: none;}
        .visitas{display: none;}
        .mantenimiento_com_jud{display: none;}
        .mantenimiento_uni_jud{display: none;}
        .mantenimiento_sal_aud{display: none;}
        .mantenimiento_usuarios{display: none;}
        .mantenimiento_prioridades{display: none;}
    </style>
    
    <body class="w3-light-grey">
        <!-- Top container -->
        <div class="w3-container w3-top w3-large w3-padding w3-black" style="z-index:4">
            <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
            <div class"w3-row-padding">
                <input class='w3-btn-block w3-black w3-padding w3-col m10' type='reset' value=''>
                <form action='../../index.php' method='post'>
                    <input class='w3-btn-block w3-blue w3-padding w3-col m1' type='submit' value='Home'>
                </form>
                <form action='../salir.php' method='post'>
                    <input class='w3-btn-block w3-red w3-padding w3-col m1' type='submit' value='Salir'>
                </form> 
            </div>
        </div><br><br>

    <!-- Sidenav/menu -->
        <nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
            <div class="w3-container w3-row">
                <div class="w3-col s4">
                    <img src="../../imgs/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
                </div>
                <div class="w3-col s8">
                    <span>Bienvenido:</span><br>
                    <strong><?php echo($_SESSION[SESSION::$USER_NAME]); ?></strong>
                </div>
            </div>
            <hr>
            <div class="w3-container w3-center">
                <h5>AREA DE TRABAJO</h5>
            </div>
            <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
            <a href="#" class="w3-padding tablink w3-green" onclick="openTab(event,'inicio');"><i class="fa fa-home"></i>  Inicio</a>
            <a href="#" class="w3-padding tablink" onclick="openTab(event,'historial');"><i class="fa fa-user"></i> Historial</a>
        </nav>

<div id="inicio" class="tab w3-main" style="margin-left:300px;margin-top:43px;"><br>
  <div class="w3-padding w3-white w3-center">
    <h1>PANEL DE CONTROL</h1>
    <hr>
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i>
                </div>
                    <div class="w3-right">
                        <?php
                            $respuestas=$db->query("select COUNT(id_User) FROM user");
                            while($respuesta=$respuestas->fetch_assoc()){
                                echo("<h3>".$respuesta["COUNT(id_User)"]."<h3>");
                            }
                        ?>
                    </div>
                <div class="w3-clear">
                </div>
                <h4>TOTAL USUARIOS</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i>
                </div>
                    <div class="w3-right">
                    <?php
                        $respuestas=$db->query("select COUNT(id_Record) FROM record WHERE DATE(date_time)=CURRENT_DATE");
                        while($respuesta=$respuestas->fetch_assoc()){
                            echo("<h3>".$respuesta["COUNT(id_Record)"]."<h3>");
                        }
                    ?>
                    </div>
                <div class="w3-clear">
                </div>
                <h4>VISITAS EN EL DÍA</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i>
                </div>
                    <div class="w3-right">
                    <?php
                        $respuestas=$db->query("select COUNT(id_Record) FROM record WHERE YEAR(date_time)=YEAR(CURRENT_DATE) AND MONTH(date_time)=MONTH(CURRENT_DATE)");
                        while($respuesta=$respuestas->fetch_assoc()){
                            echo("<h3>".$respuesta["COUNT(id_Record)"]."<h3>");
                        }
                    ?>
                    </div>
                <div class="w3-clear">
                </div>
                <h4>VISITAS EN EL MES</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-flag w3-xxxlarge"></i>
                </div>
                    <div class="w3-right">
                    <?php
                        $respuestas=$db->query("select DISTINCT COUNT(country.detailCountry) FROM user INNER JOIN country on country.id_Country=user.id_country");
                        while($respuesta=$respuestas->fetch_assoc()){
                            echo("<h3>".$respuesta["COUNT(country.detailCountry)"]."<h3>");
                        }
                    ?>
                    </div>
                <div class="w3-clear">
                </div>
                <h4>PAISES</h4>
            </div>
        </div>
    </div>
  </div>
</div>

<div id="historial" class="invisible tab w3-main" style="margin-left:300px;margin-top:43px;"><br>
  <div class="w3-padding w3-white w3-center">
    <h1>HISTORIAL</h1>
    <br>
      <div class="w3-container">
        <ul class="w3-navbar w3-black">
          <li><a href="#" class="tablink_visitas" onclick="openAccion(event, 'visitas_dia', 'visitas', 'tablink_visitas');mostrarHistorial('1','table_historial_dia');return false;">Visitas en el día</a></li>
          <li><a href="#" class="tablink_visitas" onclick="openAccion(event, 'visitas_mes', 'visitas', 'tablink_visitas');mostrarHistorial('2','table_historial_mes');return false;">Visitas en el mes</a></li>
          <li><a href="#" class="tablink_visitas" onclick="openAccion(event, 'total_visitas', 'visitas', 'tablink_visitas');mostrarHistorial('3','table_historial_total');return false;">Total visitas</a></li>
        </ul>

        <div id="visitas_dia" class="w3-container visitas">
            <h2>VISITAS EN EL DÍA</h2>
            <div class="w3-responsive">
                <table id="table_historial_dia" class="w3-centered w3-table w3-bordered w3-striped">
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>País</th>
                        <th>Fecha</th>
                        <th>Ip</th>
                    </tr>
                </table>
            </div>
        </div>

        <div id="visitas_mes" class="w3-container visitas">
            <h2>VISITAS EN EL MES</h2>
            <div class="w3-responsive">
                <table id="table_historial_mes" class="w3-centered w3-table w3-bordered w3-striped">
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>País</th>
                        <th>Fecha</th>
                        <th>Ip</th>
                    </tr>
                </table>
            </div>
        </div>

        <div id="total_visitas" class="w3-container visitas">
            <h2>TOTAL DE VISITAS</h2>
            <div class="w3-responsive">
                <table id="table_historial_total" class="w3-centered w3-table w3-bordered w3-striped">
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>País</th>
                        <th>Fecha</th>
                        <th>Ip</th>
                    </tr>
                </table>
            </div>
        </div>
      </div>
  </div>
</div>
    <label type="hidden" id="my_state_historial" style="z-index: 0;"></label>
    <script src="../../cods/funchome.js"></script>
    </body>
</html>