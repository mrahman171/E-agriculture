
  <!DOCTYPE html>
<html>
<head>
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
  background-green: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="index4.php">Home</a>
  <a href="about.php">News</a>
  <a href="contact.php">Contact</a>
   
</div>

 

</body>
</html>


<?php 
if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
{

   $dir='uploads/';
   $audio_path=$dir.basename($_FILES['audioFile']['name']);
   if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
   {
     echo 'uploaded successfully.';
     saveAudio($audio_path);
     // echo 'uploaded successfully.';
     displayAudios();
     //echo 'uploaded successfully.';
   }  

}

function displayAudios()
{
 

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
   if(!$conn)
   {
     die('server not connected');

   }

   $query="select * from solution";
   $r=mysqli_query($conn,$query);
   while ($row=mysqli_fetch_array($r)) 
   {
      echo '<a href="play.php?name='.$row['details'].'">'.$row['details'].'</a>';
      echo "<br/>";
   }
    mysqli_close($conn);

}


function saveAudio($fileName)
{  
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

   if(!$conn)
   {
     die('server not connected');

   }

   $query="insert into solution(details)values('$fileName')";
   mysqli_query($conn,$query);
    

   mysqli_close($conn);



}

?>