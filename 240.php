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
      <link rel="stylesheet" href="../../css/admin.css">
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
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

        td, th {
            
            text-align: left;
            padding: 5px;
            
            padding-left:25px;
        }
        
        
        th{
                background-color: rgba(6, 102, 62, 0.973) ;
                color:white;
                padding:7px;
                font-size:25px;
                text-align:center;
            }
        tr:nth-child(even) {
            background-color: #dddddd;
            }
        h2{
            margin-top:-5%;
        }
        .diet{
            margin-left:7%;
        }



      </style>
   </head>
   <body>
      <nav>
         <label class="logo">Dia Diet</label>
         <ul>
            <li><a  href="../userhome.php"><i class="fa fa-user"></i> Profile</a></li>
            <li> <a class="active" href="../diet_table.php"><i class="fa fa-table"></i> Diet Table</a></li>
           <li><a  href="../about_us.php"><i class="fa fa-address-book"></i> About Us</a></li>
           <li> <a href="../contact_us.php"><i class="bi bi-telephone"></i> Contact Us</a></li>
           
           <li><a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
      </nav>
        <div class="row" id="maindiv">
            <div class="col-auto">
                <button style="height:50px; width:200px; background-color:#00cc44;border-color:blue;color:white"type="button"><strong><a  href="120.php">120</a></strong></button><br>
                <button style="height:50px; width:200px; background-color:#00cc44;border-color:blue;color:white"type="button"><strong><a href="180.php">180</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#00cc44;border-color:blue;color:white"type="button"><strong><a href="210.php">210</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:white;border-color:blue;color:white"type="button"><strong><a style="color:#00cc44"  href="240.php">240</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white"type="button"><strong><a href="270.php">270</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white"type="button"><strong><a href="300.php">300</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white"type="button"><strong><a href="330.php">330</a></strong></button><br>
                <button style="height:50px; width:200px;background-color:#ff5c33;border-color:blue;color:white"type="button"><strong><a href="360.php">360</a></strong></button><br>
            </div>
            <div class="col-auto diet">
                <center><h2>240 Sugar Level Diet Plan</h2></center>
            
                <table>
                    <tr>
                        <th>Day</th>
                        <th>BreakFast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                    </tr>
                    <tr>
                        <td><strong>Monday</strong></td>
                        <td>Idly=2<br>Dosa=2<br>Ragi Muddha=1cup<br>Roti=2<br>Chapathi</td>
                        <td>chicken-chapathi<br>Fish</td>
                        <td>Vegetable curry-chapathi<br>Roti</td>
                    </tr>
                    <tr>
                        <td><strong>Tuesday</strong></td>
                        <td>Soaked Nuts</td>
                        <td>Beans curry with req.Rice</td>
                        <td>Brown Rice with Leafy Vegetables</td>
                    </tr>
                    <tr>
                        <td><strong>Wednesday</strong></td>
                        <td>Boiled Egg,Onion curry</td>
                        <td>chicken,Spinach curry</td>
                        <td>fish,cabbage</td>
                    
                    </tr>
                    <tr>
                        <td><strong>Thrusday</strong></td>
                        <td>Strawberry juice<br>Almond Milk</td>
                        <td>Leafy Vegetables with brown rice</td>
                        <td>Cauliflower-Chapathi</td>
                    </tr>
                    <tr>
                        <td><strong>Friday</strong></td>
                        <td>Soaked Nuts<br>Almond Milk</td>
                        <td>Leafy Vegetables</td>
                        <td>Cabbage-Chapathi</td>
                    
                    </tr>
                    <tr>
                        <td><strong>Saturday</strong></td>
                        <td>Omlet and nuts</td>
                        <td>Grain curry</td>
                        <td>Baked-Chicken</td>
                    
                    </tr>
                    <tr>
                        <td><strong>Sunday</strong></td>
                        <td>Whole grain butter milk</td>
                        <td>vegetable soup,spinach,tomatoes,and fresh herbs</td>
                        <td>Fish</td>
                        
                    </tr>
                </table>
            </div>
        </div>
	 
     
   </body>
</html>
