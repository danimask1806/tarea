<!DOCTYPE html>
<html>
    <body>
             <form method="post">
                  <input id="nombre" name="nombre" type="text" >
				  <input id="fecha"  name="fecha" type="text" >
                  <input id="hora" name="hora" type="text">
                  <input id="estado" name="estado" type="text" >
                  <input id="prioridad" name="prioridad" type="text" >
                  <button id="btnvalidar" type="submit" name="validar tareas" > </button>
                 <button id="btninsertar" type="submit" name="validar tareas" > </button>
                 <button id="btnborrar" type="submit" name="validar tareas" > </button>
                 
                 
            </form>
    
      <?php
$servername = "db4free.net";
$username = "tareasroot";
$password = "password";
$db_name = "tareasdb1234";

        if (isset($_POST['btnvalidar'])) {
    $id = "";
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $prioridad = $_POST['prioridad'];
            
     $sql = "SELECT id, nombre, fecha, hora, estado,prioridad FROM horario";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["dia"]. " - Name: " . $row["nombre"]. " " . $row["hora"]. "<br>";
        $en_csv .= "dia: " . $row["dia"]. " - Name: " . $row["nombre"]. " " . $row["hora"]. "<br>";
    }
} else {
    echo "0 results";
}
    print $en_csv;
            
        }
        
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
