<?php
 define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 //$sql1="INSERT INTO ict(ict_email) VALUES('ict@gmail.com')";;
   

 $sql = "INSERT INTO product (product_name,per_unit_price,m_date,e_date,season,name)
 VALUES ('potato','50','12/11/2019','15/11/2019','robi','azad');";
 $sql .= "INSERT INTO product (product_id,per_unit_price,m_date,e_date,season,f_id,ict_email,prob_id)
 VALUES ('potato','50','13/11/2019','16/11/2019','robi','azad');";
 $sql .= "INSERT INTO product (product_id,per_unit_price,m_date,e_date,season,f_id,ict_email,prob_id)
 VALUES ('potato','50','19/11/2019','17/11/2019','robi','azad')";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$conn->close();
?> 