<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_catalog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM productdetails";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    echo "Id: " . $row["id"]. "  Name: " . $row["name"]. "   Price: " . $row["price"]."   Description: ". $row["description"]."<br>";
  }

} else {
  echo "0 results";
}

mysqli_close($conn);
?>
