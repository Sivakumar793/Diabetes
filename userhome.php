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
      <title>User</title>
      <link rel="stylesheet" href="../css/userhome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  
   </head>
   <body>
      <nav>
         <label class="logo">Dia Diet</label>
         <ul>
		 	<li><a class="active" href="userhome.php"><i class="fa fa-user"></i> Profile</a></li>
			 <li> <a href="diet_table.php"><i class="fa fa-table"></i> Diet Table</a></li>
            <li><a  href="about_us.php"><i class="fa fa-address-book"></i> About Us</a></li>
            <li> <a href="contact_us.php"><i class="bi bi-telephone"></i> Contact Us</a></li>
			
            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
         </ul>
      </nav>
	<div class="card">
	<?php
				
                $email=$_SESSION['user'];
				if( $email!="")
                {
					$con=new mysqli("localhost","root","","diadiet");
					if(!$con)
					{
						echo "There is an error while connecting";
					}
					$selque="SELECT profilepic from user_details where email='$email'";
					$exe=mysqli_query($con,$selque);
					$data=mysqli_fetch_assoc($exe);
					$src="../profilePics/".$data['profilepic'];
					echo "<img src='$src' alt='Profile Picture' >";
					$query="SELECT * from user_details where email='$email'";
					$data=mysqli_query($con,$query);
					$result=mysqli_fetch_assoc($data);
					echo "<h1>".$result['firstname']." ".$result['lastname']."</h1>
				<table>
						<tr>
							<td><strong>Email ID</strong></td>
							<td>".$result['email']."</td>
						</tr>
						<tr>
							<td><strong>Gender</strong></td>
							<td>".$result['gender']."</td>
						</tr>
						<tr>
							<td><strong>Phone Number</strong></td>
							<td>".$result['phonenumber']."</td>
						</tr>
					</table>";
							
             	}
		else
		{
			header("Location:login.php");
		}
	?>
      <section></section>
   </body>
</html>
