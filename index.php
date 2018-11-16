<!DOCTYPE html>
<html>
    <body>
    
        <?php 
        
        $conn = mysqli_connect(“mysql#.000webhost.com”, “a3367xxx_test”,"******", “a3367xxx_test”) or die(mysql_error());
        if (!$conn) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);
?>




            </body>
</html>
