<?php //szukanie wzorca
$wzorzec = '/być/';
$tekst = "być albo nie być";
if( preg_match($wzorzec, $tekst) )
    echo "znaleziono wzorzec";
else
    echo "nie znaleziono wzorca";
echo " znaleziono: " . preg_match_all($wzorzec , $tekst);
?>

<h3></h3>

<?php //wyszukiwanie cyfry
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty";
if(preg_match($wzorzec, $tekst))
    echo "zmieniono cyfrę";
else
    echo "nie znaleziono cyfry";
?>

<h3></h3>

<?php //wyszukiwanie liczby 5-cio cyfrowej
$wzorzec = '/\d{5}/';
$tekst = "telefon 564324453";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono liczbę";
else
    echo "nie znaleziono liczby";
?>

<h3></h3>

<?php
$wzorzec = '/\S*\.gif/i';
    // i - ignorowanie wielkości liter
$tekst = "w pliku obrazek.gif jest ikona";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono obrazek";
else
    echo "nie znaleziono obrazka";
?>

<h3></h3>

<?php //wyszukiwanie kodu pocztowego
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "poczta 34-200 Sucha Beskidzka";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono kod pocztowy";
else
    echo "nie znaleziono kodu pocztowego";
?>

<h3></h3>

<?php //wyszukiwanie daty
$wzorzec = '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst = "Sucha Beskidzka, dn 04.10.2023";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono datę";
else
    echo "nie znaleziono daty";
?>

<h3></h3>

<?php //wyszukiwanie adres email
$wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
$tekst = "email: john@poczta.eu";
if(preg_match($wzorzec, $tekst))
    echo " znaleziono " . $tekst;
else
    echo 'nie znaleziono email';
?>

<h3></h3>

<?php
    $wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
    $tekst = "adres: www.zsgsucha.pl";
    if(preg_match( $wzorzec, $tekst))
     echo "znaleziono stronę: " . $tekst;
    else  
        echo "nie znaleziono adresu www";
?>