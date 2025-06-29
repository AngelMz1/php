<?php
echo "<html lang='es'>";
$servidor = "localhost"; // Esta es la variable
$dbname = "empresa";
$usuario = "postgres";
$senha = "root";

try {
    // CORRECCIÓN AQUÍ: Usa la variable $servidor en la cadena DSN
    $dns = "pgsql:host=$servidor;dbname=$dbname";
    
    // CORRECCIÓN AQUÍ: Usa la variable $usuario, no $user
    $conection = new PDO($dns, $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    echo "Conexión satisfactoria!";
} catch (PDOException $error) {
    echo "Conexión fallida! Error: " . $error->getMessage(); // Muestra el mensaje de error para depuración
}
echo "</html>";
?>
