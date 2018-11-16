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

$sql = "INSERT INTO horario (dia,nombre,hora) VALUES ('lunes','matematicas','15:40:00')";
if ($conn->query($peticion) === TRUE) {
    echo "Nueva table bien creada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT id, firstname, lastname FROM horario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $en_csv .= "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
    print $en_csv;

    $sql = "DELETE FROM horario WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
        
        $conn->close();
?>




            </body>
</html>
