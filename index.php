<?php
try{
	$base = new PDO("mysql:host=localhost;dbname=cursophp", "root","root");
	$base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e) {
	echo $e->getMessage();
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
				<h1>Databases</h1>
				<ul>
					<li href="">
						<a href="#">List Users</a>
					 </li>
					 
					<li href="">
						<a href="add.php">Add Users</a>
					</li>
				</ul>
			</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
