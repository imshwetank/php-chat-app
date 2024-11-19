<?php  

session_start();
date_default_timezone_set("Asia/Calcutta"); 

# Check if the user is logged in
if (isset($_SESSION['username'])) {
	
	# Database connection file
	include '../db.conn.php';

	# Get the logged-in user's username from SESSION
	$id = $_SESSION['user_id'];

	# Get the current PHP timestamp
	$php_timestamp = date("Y-m-d H:i:s", time());  // Converts Unix timestamp to MySQL datetime format

	$sql = "UPDATE users
	        SET last_seen = ? 
	        WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$php_timestamp, $id]);

}else {
	header("Location: ../../index.php");
	exit;
}
