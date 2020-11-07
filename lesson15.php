<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="sign">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['num1'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sign = $_POST['sign'];
        switch($sign){
            case '+':
                echo $num1 + $num2;
            break;
            case '-':
                if($num1 > $num2){
                    echo $num1 - $num2;
                }else{
                    echo $num2 - $num1;
                }
            break;
            case '*':
                echo $num1 * $num2;
            break;
            case '/':
                echo $num1 / $num2;
            break;
        }
    }
?>