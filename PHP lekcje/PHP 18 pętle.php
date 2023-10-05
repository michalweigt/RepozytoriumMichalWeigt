<?php
$x = 1;

while($x <= 5){
    echo "The number is: $x <br>";
    $x++; // increment
}
?>

<?php
$x = 0;

while($x <= 10 ){
    echo "The number is: $x <br>";
    $x++; // increment
}
?>

<?php
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

<?php
for ($x = 0; $x <= 5; $x++){
    echo "The number is: $x <br>";
}
?>

<?php
$colors = array("red", "green", "blue", "yellow");


foreach ($colors as $value){
    echo "$value <br>";
}
?>

<?php //foreach dla tablicy asocjacyjnej
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


foreach($age as $key => $val){
    echo "$key = $val <br>";
}
?>
