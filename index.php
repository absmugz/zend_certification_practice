<?php
// used for single line comments

//must be repeated for multiply line..

/* and are used to delineate a comment block */ 

/* used once at the beginning 
used once at the end*/ 

// variables

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

foreach ($colors as $value) {
    echo "$value <br>";
}

?>