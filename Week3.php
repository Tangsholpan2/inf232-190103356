<?php
$last_id=0;
function connection(){
	$mysqli = new mysqli("localhost","root","","tansh");
	
	if($mysqli->connect_errno){
		echo "Failed to connect to MySql: " . $mysqli->connect_errno;
		exit();
	}
	return $mysqli;
}

function add_user($first_name,$date_of_birth,$gender){
	$mysqli = connection();
	$statement = $mysqli->prepare("insert into user(first_name,date_of_birth,gender) values(?,?,?)");
	$gender = (int)$gender;
	$statement->bind_param("ssi",$first_name,$date_of_birth,$gender);
	$statement->execute();
	global $last_id;
	$last_id = $mysqli->insert_id;
	$statement->close();
	$mysqli->close();
	
	
	if(isset($_GET['state'])&&$_GET['state']=="add"){
		add_user($_GET['first_name'],$_GET['date_of_birth'],$_GET['gender']);
	}
}
?>