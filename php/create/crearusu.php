<?php
 
    require_once("../constants.php");
    if(!isset($_POST["N"])){
        header("Location: ../../index.php?".GET::$ERROR."=".ERROR::$CREDENTIANS_REQUIRED);
        die();
    }

    require_once("../db.php");
    $db=new DataBase();

    $post_nombre=$_POST["nombre"];
    $pass=$_POST["pass"];
    $post_email=$_POST["email"];
    $post_pais=$_POST["pais"];
    $post_cuidad=$_POST["ciudad"];
    $post_empresa=$_POST["empresa"];
    $post_telefono=$_POST["telefono"];
    $post_pass=sha1($pass);
    $post_estado="1";
    $post_rol="2";

    $statementvr=$db->prepared_query(QUERY::$GET_EMAIL);
       $statementvr->bind_param('s',$post_email);
       $statementvr->execute();
       $statementvr->bind_result($db_email);
       while($statementvr->fetch()){
            if($db_email){
                header("Location: ../../index.php?".GET::$ERROR."=".ERROR::$EMAIL_EXISTS);
                die();
            }
        }
    $statement=$db->prepared_query(QUERY::$CREATE_USU);
    if(!$statement){
        header("Location: ../../index.php?".GET::$ERROR."=".ERROR::$DATA_BASE_ERROR);
        die();
    }
    $statement->bind_param('sssssssss',$post_email,$post_nombre,$post_pass,$post_pais,$post_cuidad,$post_empresa,$post_telefono,$post_estado,$post_rol);
    $statement->execute();

    header("Location: ../../index.php?".GET::$OK."=".OK::$USER_CREATE);
    
?>