<?php
    $a = 3; //assignment
    $b = &$a; //b is a refernece to a

    print "$a\n"; //prints 3
    print "$b\n"; //prints 3

    $a = 4; //change $a

    print "$a\n"; //prints 4
    print "$a\n"; //prints 4
?>

<?php
    $a=5;
    $b=3;
    echo "liczby a=$a, liczba b=$b <br>";
    echo "suma a+b=" . ($a + $b) . "<br>";
    echo "różnica a-b=" . ($a - $b) . "<br>";
    echo "iloczyn a*b=" . ($a * $b) . "<br>";
    echo "iloraz a/=b" . ($a / $b) . "<br>";
    echo "modulo a%b=" . ($a % $b) . "<br>";
    echo "a do potęgi b=" . ($a ** $b);
?>

<?php
    echo "<h3>Postincrement</h3>";
    $a = 5;
    echo "Should be 5: " . $a++ . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";

    echo "<h3>Preincrementation</h3>";
    $a = 5;
    echo "Should be 6: " . ++$a . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";
?>