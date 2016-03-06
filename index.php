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

//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("webdictionary.txt"));
//fclose($myfile);

class MyClass {
public $prop1 = "I'm a class proprty";
}

$obj = new MyClass();

//var_dump($obj);
echo $obj->prop1;

?>