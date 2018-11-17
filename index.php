
      <?php
$servername = "db4free.net";
$username = "tareasroot";
$password = "password";
$db_name = "tareasdb1234";

	    
	$id = NULL;
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $prioridad = $_POST['prioridad'];
	    
// Create connection
	    
$conn = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


        if (intval($_GET["quehacer"]) == 1) {

            
     $sql = "SELECT * FROM `tarea` WHERE 1";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $en_csv .= "codigo: " . $row["codigo"] . " -Nombre: " . $row["nombre"] . " -Fecha " . $row["fecha"]." -Hora " . $row["hora"]. " -Estado " . $row["estado"] . " -Prioridad " . $row["prioridad"]."<br>";
    }
} else {
    echo "0 results";
}
    print $en_csv;
            
        }
     
     if (intval($_GET["quehacer"]) == 2) {
		 


$sql = "INSERT INTO tareas (codigo, nombre,fecha,hora,estado,prioridad) VALUES ( $id,$nombre,$fecha,$hora,$estado,$prioridad)";
if ($conn->query($sql) === TRUE) {
    echo "Nueva tabla bien creada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }

	    
if (intval($_GET["quehacer"]) == 3) {
    $sql = "DELETE FROM horario WHERE id=2";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
        $conn->close();
?>
