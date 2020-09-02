<?php 
require 'connection.php';

session_start();

if(!$_SESSION['u_name']){
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
<!-- NavBar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-primary row-5">
  <a class="navbar-brand" href="dash.php">Welcome<small><?php echo $_SESSION['u_name'];?></small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 	<div class="mr-5">
 		<button class="btn btn-success" ><a href="logout.php">LogOut</button>
 	</div>
	
</body>
</html>