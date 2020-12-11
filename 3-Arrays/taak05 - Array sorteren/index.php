<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



$test = array('val1');
usort($test, "usortTest");

$test2 = array('val2', 'val3');
usort($test2, "usortTest");

?>
</body>
</html>