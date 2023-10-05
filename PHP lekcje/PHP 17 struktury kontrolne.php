<?php
$a = 10;
$b = 5;
if ($a > $b)
    echo "a is bigger than b";
echo "after if";
?>

<?php
$a = 10;
$b = 5;
if ($a > $b){
    echo "a is bigger than b";
    echo "second text";
}
echo "after if";
?>

<?php
$hour = date("H"); //get the current time

if ($hour < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<?php

$favcolor = "red";

switch($favcolor) {
    case "red":
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;

    default:
    echo "Your favorite color is neither red, blue nor green";
    }
?>