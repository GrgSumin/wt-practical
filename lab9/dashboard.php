<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Students</title>
    <link rel="stylesheet" type="text/css" href="music.css">
    <link rel="shortcut icon" type="image/ico" href="eve.ico">
</head>
<body>
    <div class="op">
<header id = "head">
<h1>Welcome beautiful students to our Guitarcourses</h1>
</header>
<session class = "sess">
<ul>
<h2>Haven't signed yet?</h2>
<li><a href = "register.php">Register here</a></li>
<h2>If already signed up!</h2>
<li><a href = "login.php">Login</a></li> 
</ul>
</session>
</div>
<?php
$_SESSION["username"]= "sumin321";
echo $_SESSION["username"];
?>


    
</body>
</html>