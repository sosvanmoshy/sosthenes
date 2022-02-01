<?php

require('database.php');

$fname = $_POST["fname"];
$password = md5($_POST["password"]);
$user_group;

// Attempt insert query execution
$sql = "SELECT *from users where fname = '$fname' and password = '$password';";

$query = mysqli_query($connection,$sql);

if(mysqli_num_rows($query) > 0) {
	if($row = mysqli_fetch_assoc($query)) {
		if($row["user_group"]=="Admin") {
			//echo "ADMIN LOGGED IN";
			header('location: homepage/homepage.php');
		}
		elseif ($row["user_group"]=="Student") {
			//echo "STUDENT LOGGED IN";
			header('location: student/student.php');
		}
		elseif($row["user_group"]=="Lecturer"){
			header('location: lecturer/lecturer.php');
		}
	}
}

else{
	echo "Not logged in at all";
}

?>