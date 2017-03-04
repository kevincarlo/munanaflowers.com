<?php
    require_once("constants.php");
    session_start();
    unset($_SESSION);
    session_destroy();
    header("Location: ../index.php?".GET::$OK."=".OK::$GOOD_BYE);
    die();
?>