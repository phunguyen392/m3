<?php
include "b1-th1-rectangle.php";
$width = $_GET["width"] ?? 0;
$height = $_GET["height"] ?? 0;
$action = $_GET["action"] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $action !== '') {
    $rect = new Rectangle($height, $width);
    if ($action === "perimeter") {
        $result = "Perimeter: " . $rect->getPerimeter();
    } else {
        $result = "Area: " . $rect->getArea();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <label>Width:
        <input type="number" name="width" value="<?php echo $width ?>">
    </label>
     <label>Height:
        <input type="number" name="height" value="<?php echo $height ?>">
    </label>
    <select name="action" id="">
        <option <?php if ($action === 'perimeter') echo 'selected' ?> value="perimeter">Perimeter</option>
        <option <?php if ($action === 'area') echo 'selected' ?> value="area">Area</option>
    </select>
    <button type="submit">Result</button>
</form>
<?php
if (isset($result)) {
    echo $result;
}
?>
</body>
</html>