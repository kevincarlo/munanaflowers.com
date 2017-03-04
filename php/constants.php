<?php
    class POST{
        public static $USER="POST_USER";
        public static $EMAIL="POST_EMAIL";
        public static $PASSWORD="POST_PASSWORD";
        public static $USER_ID="POST_USER_ID";
        public static $ACTION_DELETE="POST_ACTION_DELETE";
        public static $ACTION_SEND="POST_ACTION_SEND";
        public static $ACTION_OPEN="POST_ACTION_OPEN";
        public static $SENDER="POST_MESSAGE_SENDER";
        public static $MESSAGE_ID="POST_MESSAGE_ID"; 
        public static $MESSAGE_RECEIVER_ID="POST_MESSAGE_RECEIVER_ID";
        public static $MESSAGE_SUBJECT="POST_MESSAGE_SUBJECT";
        public static $MESSAGE_BODY="POST_MESSAGE_BODY";
        public static $BUSCAR_JUD="POST_BUSCAR_JUD";
        public static $BUSCAR_ANIO="POST_BUSCAR_ANIO";
        public static $BUSCAR_NUM="POST_BUSCAR_NUM";
        public static $BUSCAR_TIP="POST_BUSCAR_TIP";
    }
    class SESSION{
        public static $USER_ID="SESSION_USER_ID";
        public static $USER_NAME="SESSION_USER_NAME";
        public static $USER_PASS="SESSION_USER_PASS";
        public static $USER_COUNTRY="SESSION_USER_COUNTRY";
        public static $USER_ID_COUNTRY="SESSION_USER_ID_COUNTRY";
        public static $USER_EMAIL="SESSION_USER_EMAIL";
        public static $USER_CITY="SESSION_USER_CITY";
        public static $USER_BUSINESS="SESSION_USER_BUSINESS";
        public static $USER_PHONE="SESSION_USER_PHONE";
        public static $USER_ROL="SESSION_USER_ROL";
    }
    class GET{
        public static $ERROR="ERROR";
        public static $OK="OK";
    }
    class ERROR{
        public static $NO_SESSION="Inicie sesión primero.";
        public static $CREDENTIANS_REQUIRED="Se necesita de un usuario y una contraseña.";
        public static $EMAIL_EXISTS="El correo electrónico ya se encuentra registrado en nuestra base de datos, use un correo distinto.";
        public static $DATA_BASE_ERROR="Error en la base de datos.";
        public static $INVALID_CREDENTIALS="Credenciales invalidas.";
        public static $NO_SUCH_USER="No existe el usuario.";
        public static $USER_ID_REQUIRED="Se necesita el indetificador del usuario.";
        public static $INVALID_ACTION="La acción especificada no existe.";
    }
    class OK{
        public static $USER_CREATE="Usuario creado con éxito.";
        public static $GOOD_BYE="HASTA PRONTO.";
    }
    class DATA_BASE{
        public static $NAME_USER_LEN=60;
        public static $PASSWORD_LEN=16;
        public static $EMAIL_LEN=40;
        public static $COUNTRY_LEN=30;
        public static $CITY_LEN=20;
        public static $BUSINESS_LEN=30;
        public static $PHONE_LEN=17;
    }
    class QUERY{
        public static $GET_USER_DATA="select id_User,email,name,pass,user.id_country,country.detailCountry,state.detailState,rol.detailRol FROM user INNER JOIN country on country.id_Country=user.id_country INNER JOIN state on state.id_State=user.id_state LEFT JOIN rol on rol.id_Rol=user.id_rol WHERE email=?";
        public static $GET_COUNTRY="select id_Country,detailCountry FROM country";
        public static $CREATE_USU="insert INTO user (email,name,pass,id_country,city,business,phone,id_state,id_rol) VALUES (?,?,?,?,?,?,?,?,?)";
        public static $GET_EMAIL="select email FROM user WHERE email=?";
        public static $CREATE_RECORD="insert into historial (codigo,descripcion,fecha,ip) values (s,s,now(),s)";
    }
?>