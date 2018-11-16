<!DOCTYPE html>
<html>
    <body>
    
      <?php
$servername = "db4free.net";
$username = "tareasroot";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
        
        $conn->close();
?>




            </body>
</html>
