<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="getAndpost.php" method="get">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>
<?php
    // $_GET and $_POST = special variable used to collect data from an HTML form data is sent to file in action 
    //                    attribute of <form>
    //                    <form action="file.php" method="get">
    // $_GET = form data is appended to url means data can be see in url
    //         Not secure
    //         char limit
    //         Bookmark is possible w/ values
    //         GET request can be cached
    //         Better for search pages
    // $_POST = Data is packaged inside the body of HTTP request
    //          More secure
    //          No data limit
    //          Cannot bookmark
    //          GET request are not cached
    //          Better for credentials
    echo "$_GET[username]<br>";
    echo "$_GET[password]";
?>