<!DOCTYPE html>
<html>
    <body>
	    <form action="formget.php" method="get">
		    Nombre: <input type="text" name="nombre"><br>
		    <input type="submit" value="Enviar">
		</form>
         Hola <?php isset($_GET["nombre"]) ? print $_GET["nombre"] : ""; ?><br>
	    
             <form action="formpost.php" method="post">
                  <input id="nombre" name="nombre" type="text" >
		<input id="fecha"  name="fecha" type="text" >
                  <input id="hora" name="hora" type="text">
                  <input id="estado" name="estado" type="text" >
                  <input id="prioridad" name="prioridad" type="text" >
		    <input id="quehacer" name="quehacer" type="text" >
            </form>
    
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


        if (intval($_POST['quehacer']) == 1) {

            
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
     
     if (intval($_POST['quehacer']) == 2) {
		 
	$id = "";
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $prioridad = $_POST['prioridad'];

$sql = "INSERT INTO tareas (codigo, dia,nombre,fecha,hora,estado,prioridad) VALUES ( $id,$nombre,$fecha,$hora,$estado,$prioridad)";
if ($conn->query($sql) === TRUE) {
    echo "Nueva tabla bien creada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }

	    
if (intval($_POST['quehacer']) == 3) {
    $sql = "DELETE FROM horario WHERE id=2";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
        $conn->close();
?>




            </body>
</html>
