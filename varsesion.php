<?php
    session_start();

    $_SESSION["usuario"]="universidad";
    $_SESSION["status"]="activo";

    echo "sesion iniciada".":<br>";

    echo "su usuario es ".$_SESSION["usuario"]." y su estatus es ".$_SESSION["status"]."<br>";
?>