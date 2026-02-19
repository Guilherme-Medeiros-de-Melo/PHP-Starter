<?php
//I'm running this on FarManager, so HTML tags may not work

echo "My first PHP script!\n";

echo phpversion(); 

echo "\n";

$name = "Test";
$ages = 26 + 1;

echo "This guy name is $name, age $ages \n";

var_dump($ages);

function ageUp($age){
    echo "You're $age now, ";

    $year = 5;
    $age += $year;

    echo "you'll be $age in $year years\n";

    return $age;
}

ageUp($ages);

function staticTest() {
  static $x = 0; // static scope
  echo $x;
  $x++;
}

staticTest();
staticTest();
staticTest();
?>