<?php
   session_start();
   $_SESSION['user']="";
   $_SESSION['admin']="";
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Dia Diet</title>
      <link rel="stylesheet" href="css/admin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <style>
          #maindiv
          {
           margin-top:100px;  
           margin-left:200px; 
          }p{
              font-size: 25px;
          }
          
      </style>
   </head>
   <body>
      <nav>
         <label class="logo">Dia Diet</label>
         <ul>
            <li><a  href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a class="active" href="about_us.php"><i class="fa fa-address-book"></i> About Us</a></li>
            <li> <a href="contact_us.php"><i class="bi bi-telephone"></i> Contact Us</a></li>
            <li><a href="login.php"><i class="fa fa-user-circle " ></i> Login/Register</a></li>
         </ul>
      </nav>
      <div class="row" id="maindiv">
          <div class="col">
              <img src="img/dia_about_us.jfif" height="400" width="500"/>
          </div>
          <div class="col">
            <h2>About Us:</h2>
            <p>Hello This website is for so and so qwqwqwqwawaadwdacbdshjwejnbcdhvhskcj
                cjsahciccnasjcuwc
                asklcjewcas

            </p>
          </div>
      </div>
	 
     
   </body>
</html>
