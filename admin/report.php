<?php

//database informations
	require('database.php');


	//sum
	//sql syntax

	$sql = 	"SELECT count(user_id) as total from users where status = 1";
	$query = mysqli_query($connection,$sql);
						
	while ($row = mysqli_fetch_assoc($query)) {
	$output = $row['total'];
	}

  ?>

  


<!DOCTYPE html>
<html>
<head> 
	<title>ADMIN PANEL</title>

<link rel="stylesheet" type="text/css" href="css/ui.css">

</style>

</head>
<body bgcolor="green">

	<nav class="nav2">
		
		<div>
			<table border="0">
				<tr>
					<td><br>
							<div class="profile"><center><img src="sos.jpg" class="dp"></center></div>
						</td>
					<td width="61%"><center><h1>WELCOME TO STUDENT'S ADMIN PANEL</h1></center></td>
					<td width="2%"></td>
					<td><div class="amount">
						<br>
						<?php  

							echo "TOTAL VERIFIED USERS"."<br><br>".$output;
						?>
					</div></td>
					<td><form action="logout.php" method="POST" ><input type="submit" name="submit" value="LOG OUT"></button></form></td>
				</tr>
			</table>
		</div>
			
		
	</nav>
	<table>
		<tr>
			<td class="td1">
					<form>
						
						<table height="400px">
							<tr>
								<td class="tdTEXTS">
									<?php 

									$image = "HOME.png";

									echo '<a href="homepage.php"><img src="'.$image.'" class="a"></a>';

									 ?>
								</td>
							</tr>

							<tr>
								<td class="tdTEXTS">
									<?php 

									$image = "admin.png";

									echo '<a href="#"><img src="'.$image.'" class="a"></a>';

									 ?>
								</td>
							</tr>

							<tr>
								<td class="tdTEXTS">
									<?php 

									$image = "members.png";

									echo '<a href="user_verification/verification.php"><img src="'.$image.'" class="a"></a>';

									 ?>
								</td>
							</tr>

							<!--<tr>
								<td class="tdTEXTS">
									<?php 

									$image = "payments.png";

									echo '<a href="#"><img src="'.$image.'" class="a"></a>';

									 ?>
								</td>
							</tr>

							<tr>
								<td class="tdTEXTS">
									<?php 

									$image = "order.jpg";

									echo '<a href="#"><img src="'.$image.'" class="a"></a>';

									 ?>
								</td>
							</tr>-->
						</table>


					</form>



			</td>
			<td class="td2">
				
				<div>
					<table border="0">

						<tr>
							<td>
								<tr>
							<td colspan="10"><h1 class="h1">ALL USERS</h1></td>
						</tr>
							</td>
						</tr>


						<tr>
							<td colspan="10" width="100%">

								<?php  

								echo '<a href=student/addstudentform.php><input type = "submit" value="ADD NEW USER"></a>';


								?>


							</td>
						</tr>

						<th>FIRSTNAME</th>
						<th>MIDDLE NAME</th>
						<th>LAST NAME</th>
						<th>FACULTY</th>
						<th>BIRTH DATE</th>
						<th>ADDRESS</th>
						<th>PHONE NUMBER</th>
						<th>E-MAIL</th>
						<th>USER GROUP</th>
						<th>OPERATION</th>

						<tr>
							<?php  

								//sql query
								$sql = "SELECT *from users where status=1;";
								$result = mysqli_query($connection,$sql);
								$display = mysqli_num_rows($result);

								//display data now using if and while loop statements

								if ($display > 0) {
									while ($rows = mysqli_fetch_assoc($result)) {
										echo "<tr><td>".$rows['fname']."</td><td>".$rows['mname']."</td><td>".$rows['lname']."</td><td>".$rows['faculty']."</td><td>".$rows['dob']."</td><td>".$rows['address']."</td><td>".$rows['Phone_number']."</td><td>".$rows['email']."</td><td>".$rows['user_group']."</td><td>"."<a href='delete_update_user/updateform.php''><button>UPDATE</button></a>"."<a href='delete_update_user/deleteform.php'><button>DELETE</button></a>"."</td></tr>";
									}
								}




							?>
						</tr>
						
					</table>


				</div>
			</td>
		</tr>
	</table>



</body>
</html>