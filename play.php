<!DOCTYPE html>
<!DOCTYPE html>
<html>
  
<head>
  <head>
    
    <title>play audio</title>
     
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>

<body>

<div class="topnav">
   
  <a href="about.php">News</a>
  <a href="welcome2.php">Home</a>
  <div class="topnav-right">
   
    <a href="logout.php">LOGOUT</a>
  </div>
</div>

<div style="padding-left:16px">
  <h2></h2>
   
</div>

</body>

</html>
<html>
<body>
<audio controls>
	<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">
    </source>
</audio>
</body>
</html>