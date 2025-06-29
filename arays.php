<?php
    $colores = array("azul","rojo","amarillo");
    print_r($colores);

    $total = count($colores);
    echo $total;
    for ($i=0;$i<count($colores);$i++){
        echo "<br>$colores[$i]";
    }
    echo "$colores[a1]";
    $i=0;
    do{
        echo "<br>$colores[$i]";
        $i++;
    }while($i<count($colores));
    foreach($colores as $color){
        echo "<br>$color";
    }
    echo "<br>";
   foreach($colores as $color){
        echo "<br> $color";
    }
    echo "<br>";
    $frutas = ["manzana", "pera", "uva"];
    $frutas2 = [];
    array_push($frutas, "naranja", "sandia");
    array_push($frutas2,"mora");
    print_r($frutas);
    echo "<br>";
    print_r($frutas2);
    echo "<br>";
    foreach($frutas as $fruta){
        echo "<br>$fruta";
    }
    foreach($frutas2 as $fruta){
        echo "<br>$fruta";
    }
    echo "<br>------------------------";
    echo implode("<br> ",$frutas);
    echo implode("<br> ",$frutas2);
?>
