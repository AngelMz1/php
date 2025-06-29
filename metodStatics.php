<?php
    class universidad{
        public static function matricula(){
            echo "Matricularse en la universidad";   
        }
    }
    $objEstudiante = new universidad();
    $objEstudiante->matricula();
    echo "<br>";
    universidad::matricula();
?>