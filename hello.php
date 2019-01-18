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

//php strings
echo strlen("Hello world!");//output 12
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

//php if elseif else
$t = 5;

if ($t < 10) {
    echo "Have a good morning!";
} elseif ($t < 20) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

//switch
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
        default:
        echo "Your favorite color is neither red, blue, nor green!";
}

//while loops
$om = 1; 

while($om <= 5) {
    echo "The number is: $om <br>";
    $om++;
} 

//do while loop
$om1 = 1; 

do {
    echo "The number is: $om1 <br>";
    $om1++;
} while ($om1 <= 5);

//for loops
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
//foreach loops
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}

//php function
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("gajar");
familyName("gaikwad");

//indexed array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
//Associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

//array sort in ascending order
sort($cars);
//sort in descending order
rsort($cars);
//Sort Array (Ascending Order), According to Value - asort()
asort($age);
//Sort Array (Ascending Order), According to Key - ksort()
ksort($age);
//Sort Array (Descending Order), According to Value - arsort()
arsort($age);
//Sort Array (Descending Order), According to Key - krsort()
krsort($age); 

//superglobals $_SERVER
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
//superglobals $_POST and $_REQUEST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</body>
</html>