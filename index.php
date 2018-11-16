<!DOCTYPE html>
<html>
    <body>
    
      <?php
$servername = "db4free.net";
$username = "tareasroot";
$password = "password";
$db_name="tareasdb1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
        mysql_set_charset("utf8"); 
        
        mysql_select_db($db_name) or die(mysql_error());
        
        $llegan=$_GET;
        $peticion=$llegan['orden'];
        echo $peticion;
        $hacer = mysql_query($peticion);
        
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
