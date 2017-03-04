<?php
    require_once("constants.php");
    /* check post data */
    if(!(isset($_POST[POST::$EMAIL])&&isset($_POST[POST::$PASSWORD]))){
        header("Location: ../index.php?".GET::$ERROR."=".ERROR::$CREDENTIANS_REQUIRED);
    }
    /* hour of the login intent */
    $date=getdate();
    $hora=$date["hours"];
    for($extra=0;$extra<=5;$extra++){
        if($hora==0){
            $hora=24;
        }else{
            $hora--;
        }
    }

    $fechaActual=$date["year"]."-".$date["mon"]."-".($date["mday"]-1)." ".$hora.":".($date["minutes"]-5).":".$date["seconds"];
    /* check user in data base */
    $post_useremail=$_POST[POST::$EMAIL];
    $post_userpass=$_POST[POST::$PASSWORD];
    require_once("db.php");
    $db=new DataBase();
    $statement=$db->prepared_query(QUERY::$GET_USER_DATA);
    if(!$statement){
        /* if there is an error in the query */
        header("Location: ../index.php?".GET::$ERROR."=".ERROR::$DATA_BASE_ERROR);
        //var_dump($_SESSION);
        die();
    }
    $statement->bind_param('s',$post_useremail);
    $statement->execute();
    $statement->bind_result($db_id_Usuario,$db_email,$db_nombres,$db_userpass,$db_id_country,$db_country,$db_estado,$db_rol);
    while($statement->fetch()){
        if(sha1($post_userpass)==$db_userpass && $db_estado=='ACTIVO'){
            /* if credentials are correct */
            session_start();
            $_SESSION[SESSION::$USER_ID]=$db_id_Usuario;
            $_SESSION[SESSION::$USER_NAME]=$db_nombres;
            $_SESSION[SESSION::$USER_COUNTRY]=$db_country;
            $_SESSION[SESSION::$USER_ID_COUNTRY]=$db_id_country;
            $_SESSION[SESSION::$USER_EMAIL]=$db_email;
            $_SESSION[SESSION::$USER_ROL]=$db_rol;
            header("Location: ../index.php");
            die();
        }else{
            /* if credentials are incorrect */
            header("Location: ../index.php?".GET::$ERROR."=".ERROR::$INVALID_CREDENTIALS);
            die();
        }
    }
    /* if the user no exists */
    header("Location: ../index.php?".GET::$ERROR."=".ERROR::$NO_SUCH_USER);
    die();
?>