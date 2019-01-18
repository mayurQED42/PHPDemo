<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
// This is a single-line comment
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
//case sensitive only variables names are case sensitive while all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
//php variables
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
//global scope
$x = 5;
$y = 10;

function myTest() {
    $p=15;//local scope
    global $x, $y;
    $y = $x + $y +$p;
}

myTest();
echo $y; // outputs 15
?>

</body>
</html>