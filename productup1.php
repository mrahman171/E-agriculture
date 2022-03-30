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
  
  
  <a href="shoppage.php"><i class="fa fa-fw fa-back"></i>HOME</a> 
   <div class="topnav-right">
    <a href="logout.php">LOGOUT</a>
  </div>
  
</div>


</body>
</html> 



    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('shopview.php'); ?>


                        <table cellpadding="0" cellspacing="0" border="0" class="table tFable-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>

                            <thead>
                                <tr>
                                    <th style="text-align:center;">product_image</th>
                                    <th style="text-align:center;">productname</th>
                                    <th style="text-align:center;">farmername</th>
                                     <th style="text-align:center;">per_unit_price</th>
                                      <th style="text-align:center;">e_date</th>
                                       <th style="text-align:center;">m_date</th>
                                       <th style="text-align:center;">Products choice</th> 
                                        
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
               // $_SESSION['counter'] = array();
								$result = $conn->prepare("SELECT * FROM product");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
						   // $_SESSION['counter'][] = $row['product_name']; 
							 ?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['img_loc'] != ""): ?>
									<img src="uploads/<?php echo $row['img_loc']; ?>" width="500px" height="50px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="300px" height="400px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								 
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['product_name']; ?>
                </td>
                </td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?>
                </td>
                </td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['per_unit_price']; ?>
                </td>
                </td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['e_date']; ?>
                </td>
                </td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['m_date']; ?>
                </td>
                <td style="text-align:center; word-break:break-all; width:500px;"><a href="showfarmer.php">Contact Farmer</a>;</td>
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


