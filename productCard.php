<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


.card button:hover {
  opacity: 0.7;
</style>
</head>
<body>

  <?php
                require_once('db.php');
                $result = $conn->prepare("SELECT * FROM product");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                //$id=$row['product_id'];
               ?>
                 
                <?php } ?>


<h2 style="text-align:center">Product Card</h2>

<div class="card">
  <img src="0.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Vegetable</h1>
  <p class="price">echo $row['per_unit_price']</p>
}
  
  <p><button>Add to Cart</button></p>
</div>
<?php } ?>
</body>
</html>
