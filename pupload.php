<?php          
require_once ('db.php');
 
if (isset($_POST['Submit'])) {
 
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"]; 
$id = isset($_POST['product_name']) ? $_POST['product_name'] : '';
$id2 = isset($_POST['per_unit_price']) ? $_POST['per_unit_price'] : '';
$id3 = isset($_POST['m_date']) ? $_POST['m_date'] : '';
$id4 = isset($_POST['e_date']) ? $_POST['e_date'] : '';
$id1=isset($_POST['name']) ? $_POST['name'] : '';

#$query="SELECT product_id from product as p join pictures as p1 on (p.$_POST['name']==$_POST['name'])";
    #$r=mysqli_query($conn,$query);


 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo $id2;
$sql = "INSERT INTO product(product_name,per_unit_price,m_date,e_date,img_loc,name) VALUES('$id','$id2','$id3','$id4','$location','$id1')";
echo $sql;
$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='productup.php'</script>";
// }
}
// }
 
?>