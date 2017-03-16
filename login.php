<?

// echo "testing button : " . $_POST['button-submit'];

session_start();

include 'koneksi.php';

function login() {
	if (isset($_POST['username']) && strlen($_POST['username']) > 0 && isset($_POST['password']) && strlen($_POST['password']) > 0) {
		$stmt = getConnection()->prepare('
            SELECT * FROM user
             WHERE username = :username
             AND password = :password
        ');
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (isset($result)) {
        	if (isset($result['id'])) {
        		$_SESSION['user_id'] = $result['id'];
        		header('Location: welcome.php');
        	} else {
        		header('Location: index.php?error=true&login=false');
        	}
        }
	} else {
		header('Location: index.php?error=true&form_null=true');
	}
}


function signup() {
	if (isset($_POST['username']) && strlen($_POST['username']) > 0 && isset($_POST['password']) && strlen($_POST['password']) > 0) {
	$stmt = getConnection()->prepare('
            INSERT INTO user(username, password) VALUES 
             (:username, :password);
        ');
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':password', $_POST['password']);
        if ($stmt->execute()) {
        	header('Location: index.php?error=false&signup=true');
        } else {
        	header('Location: index.php?error=false&signup=true');
        }
    } else {
		header('Location: index.php?error=true&form_null=true');
	}
}


if ($_POST['button-submit'] == "login") {
	login();
} else {
	signup();
}

?>