<!DOCTYPE html>
<html>
    <body>
    
      <?php
$servername = "db4free.net";
$username = "tareasroot";
$password = "password";

// Create connection
$conn = new mysql($servername, $username, $password,"tareasdb1234");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
        
        $conn->close();
?>




            </body>
</html>
