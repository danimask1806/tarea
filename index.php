<!DOCTYPE html>
<html>
    <body>
    
      <?php
$servername = "databases.000webhost.com";
$username = "id7866198_root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>




            </body>
</html>
