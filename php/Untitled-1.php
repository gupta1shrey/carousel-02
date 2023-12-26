
<?php
$servername = "localhost";
$username = "root";
$password = "9425304445@gmail.com";
$database = "sb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error){
  die("connection_error" .$conn->connect_error);
}
$sql = "SELECT product, prize FROM item";
$result = $conn-> query($sql);
if ($result-> num_rows > 0){
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>". $row["product"]. "</td><td>". $row["prize"]. "</td></tr>";
  
  }
}




?>