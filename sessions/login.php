<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        username: 
        <input type="text" name="username"><br>
        password: 
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log-in">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];

            echo "{$_SESSION['username']}<br>";
            echo $_SESSION['password'];
            header("Location: home.php");
        }else{
            echo "Enter username/password";
        }
    }
?>