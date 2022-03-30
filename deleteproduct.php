<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 session_start();

$_SESSION['counter'] = array();

for ($x = 0;$x <5;  $x++) {
 if(!in_array($x,$_SESSION['counter'])) {
   $_SESSION['counter'][] = "The variable is :".$x;
   $sql = "DELETE FROM product WHERE product_name=$x['counter']['product_name']";
 }
}

  var_dump($_SESSION);  
  //$sql = "DELETE FROM product WHERE product_name=$x";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "Deleted  successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$conn->close();
?> 


 