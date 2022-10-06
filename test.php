<?php
if(isset($_GET["uid"])) {
   $uid = $_GET["uid"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_userlist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT uid, nome FROM listauidnome WHERE uid = $uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "". $row["nome"]. "";
  }
} else {
  echo "0 results";
}
$conn->close();
} else {
   echo "nessun uid passato";
}
?>