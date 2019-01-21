<?php

if (isset($_COOKIE['visita'])) {
    setcookie('visita',($_COOKIE['visita'])+1,time()+3600*24);
    echo "hola has accedido a esta página". $_COOKIE['visita']. "veces";
}else{
    setcookie('visita',1,time()+3600*24);
    $mensaje = 'Bienvenido por primera vez a nuesta web';
    echo $mensaje;
}
?>