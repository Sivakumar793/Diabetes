<?php
   session_start();
   if($_SESSION['user']=="")
   {
	   header("Location:../home.php");
   }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Dia Diet</title>
      <link rel="stylesheet" href="../css/admin.css">
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
          button{
              margin-left: -150px;
          }
          button a{
              text-decoration: none;
              color:white;
              font-size:20px;
          }
          
          button a:hover{
              text-decoration: none;
              color:black;
              
              font-size:20px;
          }
          
          .col{
              margin-top:-70px;
          }
      </style>
   </head>
   <body>
      <nav>
         <label class="logo">Dia Diet</label>
         <ul>
            <li><a  href="userhome.php"><i class="fa fa-user"></i> Profile</a></li>
            <li> <a class="active" href="diet_table.php"><i class="fa fa-table"></i> Diet Table</a></li>
           <li><a  href="about_us.php"><i class="fa fa-address-book"></i> About Us</a></li>
           <li> <a href="contact_us.php"><i class="bi bi-telephone"></i> Contact Us</a></li>
           
           <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
      </nav>
      <marquee behavior="scroll" direction="right"><p style="color:#00004d"><font size="+2"><b>SELECT YOUR SUGAR LEVEL<b><img src="../img/arrow.gif" width="50" height="50"></marquee></p>
		<img align="right" src="../img/p.jpg" width="400" height="500">
        <div class="row" id="maindiv">
            <div class="col">
                <button style="height:50px; width:200px; background-color:#00cc44;border-color:blue;color:white" type="button"><strong><a href="diet_tables/120.php">120</a></strong></button><br>
                <button style="height:50px; width:200px; background-color:#00cc44;border-color:blue;color:white" type="button"><strong><a href="diet_tables/180.php">180</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#00cc44;border-color:blue;color:white" type="button"><strong><a href="diet_tables/210.php">210</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#00cc44;border-color:blue;color:white" type="button"><strong><a href="diet_tables/240.php">240</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white" type="button"><strong><a href="diet_tables/270.php">270</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white" type="button"><strong><a href="diet_tables/300.php">300</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white" type="button"><strong><a href="diet_tables/330.php">330</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white" type="button"><strong><a href="diet_tables/360.php">360</a></strong></button><br>
            </div>
        </div>
	 
     
   </body>
</html>
