<?php
    include "b1-bt1.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'] ;
    $b = $_POST['b'] ;
    $c = $_POST['c'] ;
    
    $equation = new QuadraticEquation($a, $b, $c);
    echo $equation->enter();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic Equation</title>
</head>
<body>
<form method="POST">
    <label>a:
        <input type="number" name="a" >
    </label>
    <label>b:
        <input type="number" name="b" >
    </label>
    <label>c:
        <input type="number" name="c" >
    </label>
    <button type="submit">Enter</button>
</form>
</body>
</html>