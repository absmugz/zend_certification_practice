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

  public function __construct()
  {
	  /*
	  Preserving Original Method Functionality While Overwriting Methods
To add new functionality to an inherited method while keeping the original method intact, use the parent keyword with the scope resolution operator (::):
	  */
	  
      parent::__construct(); // Call the parent class's constructor
      echo "A new constructor in " . __CLASS__ . ".<br />";
  }
  
public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
  
public function setProperty($newval, $newval2){
	
$this->prop1 = $newval ." ". $newval2;
}
  
}

$obj3 = new MyOtherClass();
echo $obj3->newMethod();
$obj3->setProperty("Son! this is impressive", "You have now overwritten a class");
echo $obj3->getProperty();

/**

Reason 1: Ease of Implementation

"While it may be daunting at first, OOP actually provides an easier approach to dealing with data."

While it may be daunting at first, OOP actually provides an easier approach to dealing with data. Because an object can store data internally, variables don't need to be passed from function to function to work properly.

Also, because multiple instances of the same class can exist simultaneously, dealing with large data sets is infinitely easier. For instance, imagine you have two people's information being processed in a file. They need names, occupations, and ages.
The Procedural Approach

Here's the procedural approach to our example:

 **/
 
function changeJob($person, $newjob) { 
	  $person['job'] = $newjob; // Change the person's job
	 return $person;
}

function happyBirthday($person)
{
  ++$person['age']; // Add 1 to the person's age
  return $person;
}

$person1 = array(
  'name' => 'Tom',
  'job' => 'Button-Pusher',
  'age' => 34
);
 
$person2 = array(
  'name' => 'John',
  'job' => 'Lever-Puller',
  'age' => 41
);

// Output the starting values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

// Tom got a promotion and had a birthday
$person1 = changeJob($person1, 'Box-Mover');
$person1 = happyBirthday($person1);

// John just had a birthday
$person2 = happyBirthday($person2);
 
// Output the new values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

/**

While this code isn't necessarily bad, there's a lot to keep in mind while coding. The array of the affected person's attributes must be passed and returned from each function call, which leaves margin for error.

To clean up this example, it would be desirable to leave as few things up to the developer as possible. Only absolutely essential information for the current operation should need to be passed to the functions.

This is where OOP steps in and helps you clean things up.
The OOP Approach

Here's the OOP approach to our example:

 **/
 

 
class Person
{
  private $_name;
  private $_job;
  private $_age;
 
  public function __construct($name, $job, $age)
  {
      $this->_name = $name;
      $this->_job = $job;
      $this->_age = $age;
  }
 
  public function changeJob($newjob)
  {
      $this->_job = $newjob;
  }
 
  public function happyBirthday()
  {
      ++$this->_age;
  }
}
 
// Create two new people
$person1 = new Person("Tom", "Button-Pusher", 34);
$person2 = new Person("John", "Lever Puller", 41);
 
// Output their starting point
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Give Tom a promotion and a birthday
$person1->changeJob("Box-Mover");
$person1->happyBirthday();
 
// John just gets a year older
$person2->happyBirthday();
 
// Output the ending values
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 


?>