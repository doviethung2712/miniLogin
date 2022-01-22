<?php
include_once "Auth.php";
$user = new Auth();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_REQUEST["action"] == "login") {
        $user->login($_REQUEST);
    } else if ($_REQUEST["action"] == "create") {
        $user->registration($_REQUEST);
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login/css.css">
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="register-form" method="post">
            <input type="text" name="name" placeholder="name"/>
            <input type="password" name="password" placeholder="password"/>
            <input type="text" name="email" placeholder="email address"/>
            <button name="action" value="create">create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post">
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <button name="action" value="login">login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="login/js.js"></script>
</body>
</html>