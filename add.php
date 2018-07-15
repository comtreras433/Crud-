<?php
require_once 'config.php';
$result = false;
if (!empty($_POST)) {
$name = $_POST['name'];
$email = $_POST['email'];

$password = md5($_POST['password']);

$sql = "INSERT INTO users(name, email, password) VALUES (:name, :email,:password)";
$query = $base->prepare($sql);
$result = $query->execute([
	'name' => $name ,
	'email' => $email,
	'password' => $password
]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<body>

			<div class="container">
					<h1 href="">Add Users</h1>
					<a href="index.php">Home</a>

					<?php
					if ($result) {
						echo '<div class="alert alert-success">Success!!</div>';
					}
					?>
					<form class="" action="add.php" method="post">
						<label for="name">Name</label>
						<input type="text" name="name" value="" id="name">
						<br>
						<label for="email">Email</label>
						<input type="text" name="email" value="" id="email">
						<br>
						<label for="password">Password</label>
						<input type="password" name="password" value="" id="password">
						<br>
						<input type="submit" value="Save">

					</form>

			</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
