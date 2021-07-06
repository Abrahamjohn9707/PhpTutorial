<?php
$color = "red";

var_dump($color);
echo "My car is $color";
echo '<br>';

// single line comment

/*multi line comment
 *
 *
 *
 * */


$x = 5 /* +15 */ + 5;
echo $x;
echo '<br>';
var_dump($x);
$name = "toshpolot";
$x = 5;
 $y = 10.5;
var_dump($y);
echo $name;
echo '<br>';

echo $x;
echo '<br>';

echo $y;
echo '<br>';

echo $color . $name;

function mytest()
{
    $x = 10;
    echo "<p> variable x inside function is: $x</p>";
}

mytest();

echo "<p> variable x outside function is: $x</p>";

function mytest2()
{

    global $x, $y;

    $y = $x + $y;
}

mytest2();
echo $y;


