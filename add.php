<?php
require_once('db.php');

$d1= $_POST['image_id'];
$d2= $_POST['image_loc'];
$d3= $_POST['name'];
$d4= $_POST['product_name'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO product (image_id,image_loc,name,product_name)
VALUES ('$d1,$d2,$d3,$d4')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";
?>