<?php

    require_once("../constants.php");
    if(!isset($_REQUEST["N"])){
        header("Location: ../../index.php?".GET::$ERROR."=".ERROR::$CREDENTIANS_REQUIRED);
        die();
    }

    require_once("../db.php");
    $db=new DataBase();
    $i=1;
    switch ($_REQUEST["N"]){
        case '1':
            echo('
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>País</th>
                    <th>Fecha</th>
                    <th>Ip</th>
                </tr>
            ');
            $responses=$db->query("select user.name,user.email,country.detailCountry,date_time,ip FROM record INNER JOIN user on user.id_User=record.id_user INNER JOIN country on country.id_Country=record.id_country WHERE DATE(date_time)=CURRENT_DATE");
            while($response=$responses->fetch_assoc()){
                echo("
                    <tr>
                        <td>".$i++."</td>
                        <td>".$response["name"]."</td>
                        <td>".$response["email"]."</td>
                        <td>".$response["detailCountry"]."</td>
                        <td>".$response["date_time"]."</td>
                        <td>".$response["ip"]."</td>
                    </tr>
                ");
            }
            break;
        case '2':
            echo('
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>País</th>
                    <th>Fecha</th>
                    <th>Ip</th>
                </tr>
            ');
            $responses=$db->query("select user.name,user.email,country.detailCountry,date_time,ip FROM record INNER JOIN user on user.id_User=record.id_user INNER JOIN country on country.id_Country=record.id_country WHERE YEAR(date_time)=YEAR(CURRENT_DATE) AND MONTH(date_time)=MONTH(CURRENT_DATE)");
            while($response=$responses->fetch_assoc()){
                echo("
                    <tr>
                        <td>".$i++."</td>
                        <td>".$response["name"]."</td>
                        <td>".$response["email"]."</td>
                        <td>".$response["detailCountry"]."</td>
                        <td>".$response["date_time"]."</td>
                        <td>".$response["ip"]."</td>
                    </tr>
                ");
            }
            break;
        case '3':
            echo('
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>País</th>
                    <th>Fecha</th>
                    <th>Ip</th>
                </tr>
            ');
            $responses=$db->query("select user.name,user.email,country.detailCountry,date_time,ip FROM record INNER JOIN user on user.id_User=record.id_user INNER JOIN country on country.id_Country=record.id_country");
            while($response=$responses->fetch_assoc()){
                echo("
                    <tr>
                        <td>".$i++."</td>
                        <td>".$response["name"]."</td>
                        <td>".$response["email"]."</td>
                        <td>".$response["detailCountry"]."</td>
                        <td>".$response["date_time"]."</td>
                        <td>".$response["ip"]."</td>
                    </tr>
                ");
            }
            break;
    }
?>

