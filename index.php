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
        
        mysql_select_db($db_name) or die(mysql_error());
        
        $llegan=$_GET;
        $peticion=$llegan['orden'];
        echo $peticion;
        $hacer = mysql_query($peticion);
        
        $conn->close();
?>




            </body>
</html>
