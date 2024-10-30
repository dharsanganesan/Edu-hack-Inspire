<?php $con=""; ?>
<?php

include_once('main.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$emailid = test_input($_POST["emailid"]);
	$password = test_input($_POST["password"]);
	$con= new mysqli("localhost","root","","project");
	$stmt = $con->prepare("SELECT * FROM  signup");
	$stmt->execute();
	$users = $stmt->get_result();
	
	foreach($users as $user) {
		
		if(($user['emailid'] == $emailid) && 
			($user['password'] == $password)) {
				header("location: home.php");
		}
		
	}

		echo "<script language='javascript'>";
		echo "alert('Put correct password and email Id ')";
		echo "</script>";
		die();
	
}

?>
