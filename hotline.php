<?php
try{
    $conn = new PDO("mysql:host=localhost:3306;dbname=test;","root","");
    ///setting errormode so that when error occurs it will give us an exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    ?>
        <script>
            window.alert("Database not connected");
        </script>
    <?php
}
?>
<?php
 if(isset($_POST['submit'])) {
   $d1        = $_POST['name'];
   $d2      = $_POST['phone']; 
   $d3   =$_POST['password'];
   $d4    =$_POST['location'];
   //$sql1="INSERT INTO ict(ict_email) VALUES('$d6')";
  // $insert1=$conn->exec($sql1);

   $sql="INSERT INTO farmer(name,phone_num,password,loc_id) VALUES('$d1','$d2',$d3,'$d4')";
   $result=$conn->exec($sql);
   
   if($result){
     ?>
     <script>
        window.location.assign("hotlineindex.php");
     </script>
    <?php
   }
   else {
     echo "There were error while saving the data";
   }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        
     input[type=text], input[type=password] {
     width: 50%;
     padding: 15px;
     margin: 5px 0 22px 0;
     display: inline-block;
     border: none;
     background: DarkGray;
     }

     input[type=text], input[type=f_id] {
     width: 30%;
     padding: 10px;
     margin: 5px 0 10px 0;
     display: inline-block;
     border: medium;
     background: DarkGray;
     }

   
    </style>

</head>
<body>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                             
                             <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-input" name="name" id="name" />
                            </div>

                            <div class="form-group">
                            <label for="phone_num">phone</label>
                            <input type="text" class="form-input" name="phone" id="phone_num" />
                            </div>

                             
                         
                            <div class="form-group form-icon">
                                <label for="location_id">location</label>
                                <input type="text" class="form-input" name="location" id="location_id" /> 
                             
                             </div>
                         
                         
                             
                         
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="text" class="form-input" name="password" id="password" />
                           </div>

                         
                       </div>
                        <!--<div class="form-text">
                            <a href="#" class="add-info-link"><i class="zmdi zmdi-chevron-right"></i>Additional info</a>
                            <div class="add_info">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <div class="select-list">
                                        <select name="country" id="country" required>
                                            <option value="US">United State</option>
                                            <option value="UK">English</option>
                                            <option value="VN">Viet Nam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <div class="select-list">
                                        <select name="city" id="city" required>
                                            <option value="NY">NewYork</option>
                                            <option value="IC">IceLand</option>
                                            <option value="canada">Canada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
