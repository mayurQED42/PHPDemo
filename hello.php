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
echo $y; // outputs 20
//static variable
function myTests() {
    static $a = 0;
    echo $a;//echo
    print $a;//print
    $a++;
}

myTest1();

//data types
$x1 = "Hello world!";//string
echo $x1;
$x11 = 5985;//integer
var_dump($x11);
$x111 = 10.365;//float
var_dump($x111);
$x1111 = true;//boolean
$y1111 = false;//boolean
var_dump($x1111);
var_dump($y1111);

//php object
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

//php null
$x11111 = "Hello world!";
$x11111 = null;
var_dump($x11111);
?>

</body>
</html>