<?php //count()
    $cars=array("Volvo","BMW","Toyota");
    echo "Size of array cars = " . count($cars);
?>

<?php //sort()
    $cars = array("Volvo", "BMW", "Toyota");


    sort($cars); // sort arrays in ascending order
    
    
    rsort($cars); // sort arrays in descending order
?>

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "Tablica przed sortowaniem: ";
    var_dump($cars);

    sort($cars);
    echo "<br><br>Tablica po sortowaniu: <br>";
    var_dump($cars);

    rsort($cars);
    echo "<br><br>Tablice po sortwowaniu odwrotnym: <br>";
    var_dump($cars);
?>

<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    asort($age); //sort associate arrays in ascending order,
                //according to the value; asort()->reverse
                //output:
                //  Key=Peter, Value=35
                //  Key=Ben, Value=37
                //  Key=Joe, Value=43

    ksort($age); //sort associative arrays in ascending order,
                //accorting to the key ; ksort()->reverse
                //output
                //  Key=Ben, Value=37
                //  Key=Joe, Value=43
                //  Key=Peter, Value=35
?>

<?php //array_pop()
    $a=array("red", "green", "blue");
    array_pop($a);
    print_r($a);
?>

<?php
    $cars = ["Volvo", "BMW", "Toyota"];
        echo "tablica: ";
    var_dump($cars);
        echo "<br>Usuwamy ostatni element";
    $deleted = array_pop($cars);
    var_dump($cars);
        echo "<br>usunięty element: ";
    echo $deleted;
?>

<?php //array_push()
    $a=array("red","green");
    array_push($a,"blue","yellow");
    print_r($a);
?>

<?php //array_shift()
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_shift($a) . "<br>";
    print_r ($a);
?>

<?php
    $cars = ["Volvo", "BMW", "Toyota"];
        echo "tablica: ";
    var_dump($cars);
        echo "<br>Usuwamy pierwszy element";
    $deleted = array_shift($cars);
    var_dump($cars);
        echo "<br>usunięty element: ";
    echo $deleted;
?>

<?php //array_push()
    $queue=["BMW","Volvo"];
        echo "Kolejka: ";
    var_dump( $queue );
        echo "<br>Dodajemy element na koniec<br>";
    array_push( $queue, "Toyota");
    var_dump( $queue );
    echo "usuwamy pierwszy element<br>";


    $deleted = array_shift( $queue );
    var_dump( $queue );
    echo "<br>Usunięty element: ". $deleted;
?>
