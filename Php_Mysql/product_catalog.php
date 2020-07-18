<?php
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$descp = $_POST["descp"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_catalog";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into  productdetails (id, name, price, description)
values ('$id', '$name', '$price','$descp')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>