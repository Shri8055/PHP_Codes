<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="circleOperations.php" method="post">
        <label>Enter Radious: </label>
        <input type="number" name="radious" required><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
<?php
    $radious=$_POST["radious"];
    
    $circumferance=null;
    $circumferance=2 * pi() * $radious;
    $circumferance=round($circumferance,2);
    echo "Circumferance of circle is : {$circumferance}cm<br>";

    $area=null;
    $area=pi() * pow($radious, 2);
    $area=round($area,2);
    echo "Area of Circle is : {$area}cm^2<br>";

    $volume=null;
    $volume=4/3 * pi() * pow($radious, 3);
    $volume=round($volume,2);
    echo "Volume of circle is : {$volume}cm^3";
?>