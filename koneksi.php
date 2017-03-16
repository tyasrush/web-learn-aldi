<?php 

//for development
$host = "localhost";
$db = "aldi-web-learn";
$username = "root";
$password = "";

function getConnection() {
	// try {
	// 	$conn = new PDO('mysql:host={$host};dbname={$db}', '$username', '');
	// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	return $conn;
	// } catch (PDOException $e) {
	// 	print_r($e->getMessage());
	// }

	// return null;
	return new PDO('mysql:host=localhost;dbname=aldi-web-learn', 'root', '');
	// return new PDO('mysql:host=mysql.idhostinger.com;dbname=u655896071_rumah', 'u655896071_aldi', 'qwerasdf');
}

?>