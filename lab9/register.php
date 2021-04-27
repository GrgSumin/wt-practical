<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guitarcourse 365</title>
	<link rel="stylesheet" type="text/css" href="song.css">
	<link rel="shortcut icon" type="image/ico" href="eve.ico">
	<script src="tumin.js" defer></script>
</head>
<body>
	<div class="reg-form">
	<header>	
	<h1>Registration form</h1></div>
    </header> 
	<div class="main">
	<form action="" id="myform" method="POST">
	<div id="name">
	<h3 class="first">Name</h3>
	<input id="First_name" type="text" name="first_name"><br>
	<label class="firstlabel">First Name</label><br>
	<input id="Last_name" type="text" name="last_name"><br>
	<label class="Lastlabel">Last Name</label>
	</div>
	<br>
	<h3 class="first">Email</h3>
	<input class="mail" type="mail" name="email">
	<br>
	<h3 class="first">Password</h3>
	<input class="pass" type="Password" name="password" placeholder="Enter more than 8 characters">
	<input type="checkbox" id="spass">
	<label id="show">Show Password</label>
	<br>
	<div id=" personal">
	<h3 class="first">Username</h3>
	<input class="user" type="text" name="name">
	
	</div>
	<br>
	<div id="taste">
	<label class="second" >MusicTaste</label>
	<select class="music" name="taste">
	<option value="rock" >Rock</option>
	<option value="metal" >Metal</option>
	<option value="pop" >Pop</option>	
	</select>
	</div>
	<br>
	<div class="begin">
	<label>Are you beginner</label><br>
	<input class="yes" type="radio" name="beginner" value="yes">Yes<br>
	<input class="no" type="radio" name="beginner" value="no">No<br>
</div>
<div class="msg"></div>
<br>
<input  class="sub" type="submit" value="submit" name = "register">

</form>
</div>







</body>
</html>
<?php
include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$username = $_POST['name'];
	$musictaste = $_POST['taste'];
	$beginner = $_POST['beginner'];
	
	$sql = "INSERT INTO users (first_name, last_name, email, password, music, begineer, register_date, username)
VALUES ('$firstname', '$lastname', '$email','$password', '$musictaste', '$beginner', now(), '$username')";
if($conn->query($sql) === TRUE) {
	header("Location: login.php?register=sucessfull");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  

}

}
?>
