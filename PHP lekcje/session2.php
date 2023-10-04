<?php
    session_start();

    echo "Welcome to page #2<br>";


    echo "Imię: ". $_SESSION['imie']."<br>";
    echo "Rok urodzenia: ". $_SESSION['rok_urodzenia']."<br>";
    echo "Ulubiony kolor: ". $_SESSION['favcolor']."<br>";
    echo "Ulubione zwierzę: ". $_SESSION['animal']."<br>";
    echo date('Y m d H:i:s', $_SESSION['time']) . "<br>";

    echo $_SESSION['bzdura'];
?>
