<?
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php');
}

?>

<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		<h1>Selamat Datang</h1>
		<button type="submit" onclick="<? $_SESSION['user_id'] = null; header('Location: index.php'); ?>">Logout</button>
	</body>
</html>