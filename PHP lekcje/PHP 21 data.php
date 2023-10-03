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

<?php
$date = date('m/d/Y');
echo $date;
echo "<br>";
echo date("m/d/Y", strtotime("+14 day"));
?>