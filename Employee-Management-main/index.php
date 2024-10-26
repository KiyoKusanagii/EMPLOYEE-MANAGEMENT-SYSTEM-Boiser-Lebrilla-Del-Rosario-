<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form method="POST">
        <div class="container">
            <div class="card">
                <h2 class="head">LOGIN</h2>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="login" type="submit">LOGIN</button>
            </div>  
        </div>
    </form>
</body>

</html>
