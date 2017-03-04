<?php
    class DataBase{
        public static $SERVER="localhost";
        public static $USER="root";
        public static $PASSWORD="";
        public static $DATABASE="flores";
        private $mysqli;
        function __construct(){
            $this->mysqli=new mysqli(
                DataBase::$SERVER,
                DataBase::$USER,
                DataBase::$PASSWORD,
                DataBase::$DATABASE
            );
            $this->mysqli->set_charset("utf8");
        }
        function query($query){
            return $this->mysqli->query($query);
        }
        function prepared_query($structure){
            return $this->mysqli->prepare($structure);
        }
        function get_last_id(){
            return $this->mysqli->insert_id;
        }
        function agregarAccion($codigo,$descripcion){
            $this->mysqli->query("insert into record (id_user,id_country,date_time,ip) values ('".$codigo."','".$descripcion."',now(),'".$_SERVER["REMOTE_ADDR"]."')");
        }
    }
?>