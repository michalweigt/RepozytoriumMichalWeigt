<?php
    echo "Today is " . date( "Y/m/d") . "<br>";
    echo "Today is " . date( "d.m.Y") . "<br>";
    echo "Today is " . date( "d-m-Y") . "<br>";
    echo "Today is " . date( "l") . "<br>";
?>

<?php
    $czas = mktime( 11,14,54,8,12,2014 );
    echo "Created date is " . date( "d.m.Y h:i:sa", $czas);
    $now = mktime(21,37);
    echo "<br> teraz: " . date( "d.m.Y h:i:sa", $now);
?>

<h3></h3>

<?php
$date = date('d/m/Y');
echo $date;
echo "<br>";
echo date("d/m/Y", strtotime("+14 day"));
?>
