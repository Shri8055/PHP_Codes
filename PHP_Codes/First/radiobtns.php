<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="radiobtns.php" method="post">
        <input type="radio" name="cards" id="visa" value="Visa">
        <label for="visa">Visa</label><br>

        <input type="radio" name="cards" id="mastercard" value="Mastercard">
        <label for="mastercard">Mastercard</label><br>

        <input type="radio" name="cards" id="americanexp" value="American">
        <label for="americanexp">American Express</label><br>

        <input type="submit" name="confirm" value="Log-in">
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        $credit_card=null;
        if(isset($_POST["cards"])){
            $credit_card=$_POST["cards"];
            echo "You selected {$credit_card}";
            
        }
        else{
            echo "Please make selection";
        }
    }
?>