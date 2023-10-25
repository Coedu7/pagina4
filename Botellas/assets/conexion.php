<?php

define("host", 'localhost');
define("user", 'root');
define("pass", "");
define("db", "botellas");

$conec = mysqli_connect(host, user, pass, db);

if(!$conec){
    echo 'Error: ';
}else{
    //  echo 'conectado';
}

?>