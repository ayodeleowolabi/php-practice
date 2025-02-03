<?php
echo "<h1> PHP Lesson 1</h1> <hr/>";
$date = "Jan 29 2025";
$x = 9;
$y= 19;
echo $date;
echo"<br>";
$name = "Ayo";
echo '<p>Hi, name is ' . $name . ' How are you today?</p>';

echo "<h4> Local Variables </h4> <hr/>";

function test1(){
    echo "<h2> Is this working </h2>";
};
test1();
/* you cannot access global scope variables in your functions. 
Unless you call the global variable using global in the function. Se below.*/

echo "<h4> Global Variables </h4><hr/>";
function test2(){
    global $x, $y;
    echo $x * $y;
    /* we called the global variables in before
    using them */
}
test2();

echo "<h4> Static keyword </h4><hr/>";

function statictest(){
    static $x = 10;
    echo $x++;

}
/* without the static keyword inside the function, 
everytime we called the function its output would be 10, instead of
incrementing by 1 every time. */

statictest();
echo "<br>";
statictest();
echo "<br>";
statictest();
echo "<br>";
statictest();
echo "<br>";

echo "<h6> Echo vs Print: echo allows multiple parameters, print does not </h6>";


echo "<h4> Data Types</h4><hr/>";
//INTEGER
$num = 9000;
var_dump($num);
echo "<br>";
//FLOAT
$NUM2 = 20.565;
var_dump($NUM2);
echo "<br>";
//array
$sports = array("Soccer", "tennis", "BaseBall");
var_dump($sports);
//NULL
echo "<br>";
$color = "Blue";
$color = null;
var_dump($color);
//boolean
echo "<br>";
$z = true;
$a = false;
var_dump($z);
var_dump($a);

echo "<br";
echo "<br";
echo "<br";
echo "<br></hr>";

echo "<h3>False Boolean Values </h3> <hr/>";
echo "<p>The integer 0</p>";
echo "<p>The float 0.0</p>";
echo "<p>The empty string and string of 0 </p>";
echo "<p>An array with zero elements</p>";
echo "<p> NULL Variables</p>";

//Objects
echo "<h4>Objects and Object Oriented Programming</h4>";
echo "<p>Stores data and also informations on how to prcess the data also know as a method </p>";
echo "<p>Public Assignment: The property can be accessed everywhere</p>";
echo "<p>Private Assignment: The property can be accessed by the class that defines it</p>";
echo "<p>Protected Assignment: The property can only be accessed within the class itself and by inherited parent classes.</p>";


class Person {
    public $firstname;
    public $lastname;
    public $age;

// Assigning values to the property variables. 
    public function __construct ($firstname, $lastname, $age) {
        
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;

    }
    public function hello(){
        return "I am " . $this->firstname . " " . $this->lastname . " and I am " . $this->age . " years old";
    }
}

$person1 = new Person('Joy', 'Owolabi', 27);
echo $person1->hello();
echo "<br>";
$person2 = new Person('Jane', 'Walker', 45);
echo $person2->hello();

echo "<br>";
// CONSTANTS: review this.

echo "<h3>Increment/Decrememnt Operators</h3> <hr/>";
$postincrement = 30;
echo $postincrement++;
// displays value of variable BEFORE incrementing
echo "<br>";
$preincrement = 30;
echo ++$preincrement;
echo "<br>";
// displays value of variable AFTER already incremented
$postdecrement = 30;
echo $postdecrement--;
// displays value of variable BEFORE decrementing
echo "<br>";
$predecrement = 30;
echo --$predecrement;
// displays value of variable AFTER already decremented

echo "<h3>String Operators</h3> <hr/>";
//String concatenation

$r = "Hello!!";
$t = "How are you?";
echo $r . $t;
echo "<br>";
// concatenation assignment . OR .=
$e = "Emily";
$w = "Red";
$e .= $w;
echo $e;
?>
