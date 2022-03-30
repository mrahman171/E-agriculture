<?php          
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "test");
    $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
    

    $query="SELECT * from product as p join pictures as p1 on(p.product_name=p1.product_name)";
    $r=mysqli_query($conn,$query);
    //while ($row=mysqli_fetch_array($r)) 
    // {
    //  echo '<a href="play.php?name='.$row['details'].'">'.$row['details'].'</a>';
    //  echo "<br/>";
   // }
   // mysqli_close($conn);

     

?>

<?php include('header.php'); ?>
<body>

    <html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.topnav-right {
  float: right;
}
</style>
<body>
 
<div class="navbar">
  
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
   <div class="topnav-right">
    <a href="logout.php">LOGOUT</a>
  </div>
  
</div>


</body>
</html> 



    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('modal_add2.php'); ?>


                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>

                            <thead>
                                <tr>
                                    <th style="text-align:center;">product_image</th>
                                    <th style="text-align:center;">produc_name</th>
                                    <th style="text-align:center;">farmer_name</th>
                                    <th style="text-align:center;">per_unit_price</th>
                                    <th style="text-align:center;">m_date</th>
                                    <th style="text-align: center;">e_date</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM pictures");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['image_id'];

                 
							?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['image_loc'] != ""): ?>
									<img src="uploads/<?php echo $row['image_loc']; ?>" width="auto" height="auto" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['product_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['name']; ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php
                $a= mysqli_fetch_array($r);
                //echo $row['image_id'];
                 if ($row['product_name']=$a['product_name']) 
                  {
                    echo $a['per_unit_price'];
                    echo "<br/>";
                    } ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php
                $a= mysqli_fetch_array($r);
                //echo $row['image_id'];
                 if ($row['product_name']=$a['product_name']) 
                  {
                    echo $a['m_date'];
                    echo "<br/>";
                    } ?></td>
                <td style="text-align:center; word-break:break-all; width:200px;"> <?php
                $a= mysqli_fetch_array($r);
                //echo $row['image_id'];
                 if ($row['product_name']=$a['product_name']) 
                  {
                    echo $a['e_date'];
                    echo "<br/>";
                    } ?></td>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


