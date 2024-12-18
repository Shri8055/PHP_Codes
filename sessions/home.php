<?php
    session_start();
    $_SESSION['username'];
    $_SESSION['password'];
    echo "Username is {$_SESSION["username"]}<br>";
    echo "Password is {$_SESSION["password"]}<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    This is Home page<br>
    <form action="home.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>
<?php
    if(isset($_POST["logout"])){
        header("Location: login.php");
    }
?>