<?php
echo "<h2> Php Class 3 feb 3 2025 </h2><br>";
echo "<h4> Functions </h4> <br>";
function displaytxt(){
    echo "My First Function";
};
echo "<br>";
echo "</hr>";

echo "<strong> Function with one parameter </strong><br>";

function myCar($car){
    echo "$car<br>";
};

myCar("Volvo");
myCar("Toyota");
myCar("Honda");
myCar("BMW");

echo "<br> <strong> Function with two parameters </strong><br>";

function myOtherCar($car, $color ){
    echo "$car, $color <br>";
};
echo "<br>";
myOtherCar("Volvo", "Grey");
myOtherCar("Toyota", "Blue");
myOtherCar("Honda", "Green");
myOtherCar("BMW", "Red");


echo "<br> <strong> Function with Default parameters </strong><br>";
function myAge($minage = 30){
    echo "My Age is: $minage <br>";
}
myAge();
myAge(80);
myAge(89);
myAge(20);



echo "<br> <strong> Returning Values in a Function </strong><br>";
function add($x, $y){
    $z = $x + $y;
    return $z;
};

echo "1 + 2 = " . add(1,2) . "<br>";
echo "3 + 4 = " . add(3,4) . "<br>";
echo "5 + 6 = " . add(5,6) . "<br>";


echo "<br> <strong> Arrays </strong><br>";
echo "Indexed Arrays";
echo "Associative Arrays";
echo "Multidimensional Arrays";

echo "<h4> Indexed Arrays </h4>";

$colors = array("Blue", "Green", "Red");
echo "My Favorite colors are: " . $colors[0] . "," .$colors[1] . "," . $colors[2] . "<hr />";

echo "<h4> Looping through an indexed Array </h4>";
$arrlength = count($colors);

for($x = 0; $x<$arrlength; $x++){
    echo $colors[$x] . "<br>";
};

echo "<hr/>";

echo "<h4> Associative  Array </h4>";
echo "this allows us to assign values to our elements. Elements are named keys";
echo "<br>";
$tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
echo "Bill scored " . $tscore["Bill"] . "/100";
echo "<br>";

echo "this for each method stores each key in this key value pair as $x and the value as scores";
echo "<br>";
foreach($tscore as $x => $score){
    echo "Key=" . $x . ", Score=" . $score ;
    echo "<br>";
}

echo "<h4> Multidimensional  Arrays </h4>";
$grades = array(
    array("John", 50, 60),
    array("Bob", 78, 90),
    array("Raye", 100, 40),
    array("Anna", 89, 64),
);

echo $grades[0][0].":Test 1: ".$grades[0][1]. ", Test 2: " .$grades[0][2]. "<br>";
echo $grades[1][0].":Test 1: ".$grades[1][1]. ", Test 2: " .$grades[1][2]. "<br>";
echo $grades[2][0].":Test 1: ".$grades[2][1]. ", Test 2: " .$grades[2][2]. "<br>";
echo $grades[3][0].":Test 1: ".$grades[3][1]. ", Test 2: " .$grades[3][2]. "<br>";

echo "<h4> Sorting Arrays </h4>";
//Step 1: sort or rsort your array. 
$names = array("John", "Jane", "Emma", "Jen", "Dan", "David");
rsort($names); //this sorts it by alphabet. If we wanted descending order of alphabet or numbers, we can use rsort. 
//Step 2: create a variable to store the array length.
//Step 3: create a for loop to loop through the array.

$nlength = count($names);
for($x=0; $x<$nlength; $x++){
    echo $names[$x];
    echo "<br>";
};


echo "<h4> Sorting Associative Arrays </h4>";
$tscore = array("John"=>"60", "Bill"=>"43","Jen"=>"89");
asort($tscore); //by increasing value in the key value pair
Echo "asort() is to sort by Key of increasing letters or numbers. <br>";

Echo "ksort() is to sort by Key of increasing letters or numbers. <br>";
Echo "arsort() descending order for values.<br>"; 
echo "krsort() descending order of keys.<br>";



foreach($tscore as $x => $x_value){
    echo "Key=" . $x . ", Value=" .$x_value;
    echo "<br>";
}



?>