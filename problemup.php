<?php
 define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $sql = "INSERT INTO problem(prob_id,sol_id,product_id,image_id)
 VALUES (18,11,19,1);";
 $sql .= "INSERT INTO problem(prob_id,sol_id,product_id,image_id)
 VALUES (25,26,20,2);";
 $sql .= "INSERT INTO problem(prob_id,sol_id,product_id,image_id)
 VALUES (17,27,21,3)";

  
 
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$conn->close();
?> 