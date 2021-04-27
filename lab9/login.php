
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitarcourse365 login or sign up </title>
    <link rel = "stylesheet" type="text/css" href = "chord.css">
    <link rel = "shortcut icon" type = "image/ico" href = "eve.ico">
    <script src="login.js" defer></script>
</head>
<body>
<form id = "user" action="" method="post">
<h1 class="wel">Welcome<h1>
<div class="nam">
<label class="mail">Username</label>
<br>
<input class="name" type="text" name="username">
<br>
<label class = "mail">Password</label>
<br>
<input id="spass" type="password" name ="password">
<br>
<input  id="pass" type="checkbox">
<label class="mail">Show Password</label>
<br>
<button class="sub" name="login">Log in</button>
<br>
<a href = "register.php">sign-up</a>
</div>
</form> 
<?php
include_once "db.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users where username ='$username' and password ='$password' ";
    $result = $conn->query($sql);
    if($result->num_rows === 1){
        header("Location: profile.php");

    }
    else{
        echo "error";
    }
    

}

  

?> 

</body>
</html>