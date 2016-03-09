<?php

require 'functions.php';
require 'database.php';
// used for single line comments

//must be repeated for multiply line..

/* and are used to delineate a comment block */ 

/* used once at the beginning 
used once at the end*/ 

// variables
use \absolom\my_stuff\Database;
use \absolom\my_stuff\Foo;
$foo = new Database();
$fooF = new Foo();
$foo->doAwesomeThings();
$fooF->doAwesomeThings();
//$obj = new absolom\my_stuff\Foo();
//$objDb = new absolom\my_stuff\Database();
//echo $obj->doAwesomeThings();
//echo $objDb->doAwesomeThings();


$a = 1;
++$a;
$a *= $a;
echo $a-- . '<br>';

echo 'Welcome to Zend Certication pactice' . '<br>';
$m = 4 % 3;
echo $m . '<br>';

$age = 21;

// Control structures

/* if ( $age < 18) {

	echo 'child';
} else {
	echo 'adult';
} */

// Tenary operator

/* 

Ternary operator logic is the process of using "(condition) ? (true return value) : (false return value)"
statements to shorten your if/else structures.

*/

//  $agestr = ($age < 16) ? 'child' : 'adult';

 echo ($age < 18 ) ? 'child' : 'adult';

$x = 1;
 while ($x <= 18) {
    
     echo "The number is:".$x."<br>";
     $x++;
}

$y = 1;

do {
    echo "The number is: $y <br>";
    $y++;
} while ($y <= 5);

for ($z = 0; $z <= 10; $z++) {
    echo "The number is: $z <br>";
} 


$colors = array("red", "green", "blue", "yellow");
$arrlength = count($colors);


for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo "<br>";
}

//PHP Associative Arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo "Peter is " . $age['Peter'] . " years old.";

//Loop Through an Associative Array

foreach ($age as $x => $x_value) {
	
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
	
	
}


//PHP - Multidimensional Arrays

//PHP - Two-dimensional Arrays

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
$Cararrlength = count($cars);


for ($row = 0; $row < $Cararrlength; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

//echo dirname(__FILE__);

/*
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
*/

//Create a User Defined Function in PHP

/*
function functionName() {
    code to be executed;
}
*/

function writeMsg(){
	echo 'Hello world!'.'<br>';
}

writeMsg();

//PHP Function Arguments

function familyName($fname){
echo "$fname Mugwagwa.<br>";
}

familyName('Absolom');
familyName('Makabongwe');
familyName('Alison');

//The following example has a function with two arguments ($fname and $year):

function familyNameYear($fname,$year){
echo "$fname Mugwagwa. Born in $year<br> ";
}

familyNameYear('Absolom','1985');
familyNameYear('Makabongwe','1984');
familyNameYear('Alison','2015');

//PHP Default Argument Value
//The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

function setHeight($minHeight = 50) {
	echo "The height is : $minHeight <br>";
}

setHeight(350);
setHeight(250);
setHeight(150);
setHeight(100);
setHeight();

//PHP Functions - Returning values
//To let a function return a value, use the return statement:
function sum($x,$y){
	$z = $x + $y;
	return $z;
}

echo sum(3,2) . "<br>";
echo sum(5, 10) . "<br>";
echo sum(7, 13) . "<br>";
echo sum(2, 4) . "<br>";

//Classes
class MyClass {

public function __construct()
{
      echo 'The class "', __CLASS__, '" was initiated!<br />';
}

public function __destruct()
{
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
}
  
public $prop1 = "I'm a class property";

public function setProperty($newval){
$this->prop1 = $newval;
}

public function getProperty() {
return $this->prop1 . "<br />";
}

}

$obj = new MyClass();
$obj2 = new MyClass();

echo $obj->getProperty();
echo $obj2->getProperty();

$obj->setProperty("Son! You're close to becoming a developer");
$obj2->setProperty("Son! Welldone!");
echo $obj->getProperty();
echo $obj2->getProperty();

//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("webdictionary.txt"));
//fclose($myfile);

//Using Class Inheritance

class MyOtherClass extends MyClass {

public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
  
}

$obj3 = new MyOtherClass();
echo $obj3->newMethod();
$obj3->setProperty("Son! this is impressive");
echo $obj3->getProperty();


?>