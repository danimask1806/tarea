<!DOCTYPE html>
<html>
    <body>
    
      <?php
$servername = "db4free.net";
$username = "tareasroot";
$password = "password";
$db_name = "tareasdb1234";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
        
        echo "casi";
        $llegan = $_GET;
        echo "esta ...";
        $peticion = $llegan['orden'];
        echo "hecho";
        $sql = "INSERT INTO horario (dia,nombre,hora) VALUES ('lunes','matematicas','15-40-00')";

if ($conn->query($peticion) === TRUE) {
    echo "Nueva table bien creada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        // En los casos que hay SELECT y se debe enviar una respuesta actúa este código
    if (substr($peticion, 0, 6) == 'SELECT') {
    $resultado = mysql_query("SHOW COLUMNS FROM personas");
    $numerodefilas = mysql_num_rows($resultado);
    if ($numerodefilas > 0) {
     
    while ($rowr = mysql_fetch_row($hacer)) {
     for ($j=0;$j<$numerodefilas;$j++) {
      $en_csv .= $rowr[$j].", ";
     }
     $en_csv .= "\n"."<br>";
    }
     
    }
     
    print $en_csv;
    }
        
        $conn->close();
?>




            </body>
</html>
