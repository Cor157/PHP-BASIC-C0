<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$test1 = 10;
$test2 = 6;

if($test1 == $test2) {//Wordt gebruikt om te testen of iets gelijk is aan iets anders.
    echo "gelijk";
}
else {
    echo "niet gelijk";
}
if($test1 != $test2) {//	Testen of iets niet gelijk is aan iets anders.
    echo ",identiek";
}
else {
    echo "ongelijk";
}
if($test1 === $test2) {// 		Wordt gebruikt om te testen of iets gelijk is aan iets anders èn of ze beide van hetzelfde type zijn.
    echo ",true";
}
else {
    echo ",false";
}
if($test1 < $test2) {// 	Testen of iets kleiner is dan iets anders.
    echo "false";
}
else {
    echo ",test1 is kleiner dan test2";
}
if($test1 > $test2) {// 		Testen of iets groter is dan iets anders.
    echo ",Have a good morning!";
}
else {
    echo "false";
}
if($test1 <= $test2) {// 		Testen of iets kleiner is of gelijk aan iets anders.
    echo ",Have a good morning!";
}
else {
    echo ",test1 is kleiner of gelijk aan test2";
}
?>

</body>
</html>