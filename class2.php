<?php
echo "<h2> PHP Week 2 Feb 3 2025</h2>";
echo "<h4> Conditional statements</h4>";

//IF Statement
echo "<h5> If Statements </h5>";
$x = 100;

if($x<50){
    echo "condition met";
} else {
    echo "condition not met";
};
echo "<br>";
//IF and Else if statements 
echo "<h5> If and elseif Statements </h5>";
$y = 103;
if($y < 50 ){
    echo "You failed"; 
    } elseif ($y >= 51 and $y <= 60){
        echo "you have a D";
    } elseif ($y >=61 and $y <= 70){
        echo "You have a D";
    } elseif ($y >=71 and $y <= 80){
            echo "You have a C";
    } elseif ($y >=81 and $y <= 90){
            echo "You have a B";
    } elseif ($y >=91 and $y <= 100){
            echo "You have an A";
    } else {
        echo "you have an A+";

};
echo "<h5> Switch Statement </h5>";
echo " A switch statement compares the value of an expression against a set of predefined conditions also referred to as cases.";
echo "<br>";
echo "1) you must include 'break' at the end of every case";
echo "<br>";
echo "2) you must have a default: at the end of your cases to provide an option incase none of the cases match your variable";
echo "<br>";
$car = "volvo";
switch ($car){
    case "volvo";
        echo "You drive a volvo";
        break;
        echo "without break after every case in a switch statement, all the cases would be displayed at once.";
    case "BMW";
        echo "You Drive a BMW";
        break;
    case "Honda";
        echo "You drive a Honda";
        break;
    default:
        echo "You don't drive";
};


echo "<h5> Loops </h5>";
echo "<h4> Types of Loops </h4>";
echo "<br>";
echo "While Loops";
echo "<br>";
echo "Do While Loops";
echo "<br>";
echo "For Loop";
echo "<br>";
echo "Foreach Loop";

echo "<br>";
echo "<br>";
echo "<strong> While Loops </strong>";
$a = 1;
while($a < 10){
    echo "the number is: $a <br>";
    $a++; 
};

echo "<br> <strong> important things to remember </strong> <br>";
echo "without the a++ a stays lower than 10 and you are now in an infinite loop! COOL :))<br>";
echo "you can include a <br> at the end of whatever <br> you are trying to repeat so the <br> breaks are included";
echo "<br>";
echo "<br>";
echo "<strong> Do While Loops </strong>";
$a = 100;
do {
    echo "The Number is: $a <br>";
    $a++;

} while ($a <= 5);
echo "A do while loop will execute a block of code once and then repeat the loop/block of code ONLY if the condition is true.";
echo "<br> <strong> For Loops </strong>";

echo "<br>for loop you use when you know in advance how many times you want the code block to execute.";
for ($x = 0; $x<=10; $x++){
    echo "$x <br>";
};
echo "<br>";
echo "<h4> For Each Loop </h4> <br>";
echo "For each loop can only be used on Arrays. <br>";

$cars = array("volvo", "BMW", "Honda", "Ford");

foreach ($cars as $value){
    echo "$value <br>";
};


?>