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
  <a href="productup1.php"><i class="fa fa-fw fa-back"></i>Back</a> 
   <div class="topnav-right">
    <a href="logout.php">LOGOUT</a>
  </div>
  
</div>


</body>
</html> 



    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


 


                        <table cellpadding="0" cellspacing="0" border="0" class="table tFable-striped table-bordered" id="example">
                             

                            <thead>
                                <tr>
                                    <th style="text-align:center;">name</th>
                                    <th style="text-align:center;">phone_num</th>
                                    <th style="text-align:center;">location</th>
                                      
                                        
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM farmer");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								//$id=$row['product_id'];
							 ?>
								<tr>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?>
                </td>
                </td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['phone_num']; ?>
                </td>
                </td>
                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['loc_id']; ?>
                </td>
                </td>
                
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


