<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="x-UTF-8">
    <meta name=viewport content="width=device, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <a href="#"><img src="img/" alt="logo"></a>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div>
            <?php
            if (isset($_SESSION['userID'])) {
                echo "<form action='includes/logout.inc.php' method='post'> 
                            <button type='submit' name='logout-submit'>Logout</button>
                      </form>";

            } else {
                echo "<form action='includes/login.inc.php' method='post'>
                <input type='text' name='mailuid' placeholder='email / username'>
                <input type='password' name='pwd' placeholder='password'>
                <button type='submit' name='login-submit'>Login</button>
                    </form>
                 <a href='signup.php'>Sign Up</a>";
            }
            ?>

        </div>

    </nav>

</header>

