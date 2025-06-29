<?php
	$frutas = ["manzana","pera","banana"];
	
	if(isset($_POST['fruta'])) {
	$nuevaFruta = trim($_POST['fruta']);
	}
	array_push($frutas, $nuevaFruta);
	
	echo "<h3>Lista de frutas</h3>";
	echo "<ul>";
	foreach($frutas as $fruta){
		echo "<li>$fruta</li>";
	}
	echo "</ul>";
	echo '<a href="arrays1.php">Volver</a>';
?>
