<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="baza1";

    $conn=mysqli_connect($servername="localhost";
                        $username="root";
                        $password="";
                        $dbname="baza1")
    if(!conn){
        die("Nieudane połączenie".mysqli_connect_error());
    }
    $data=$_POST["data"];
    $liczba=$_POST["liczba"];
    $telefon=$_POST["telefon"];

    $sql="insert into rezerwacje(data_rez,
                                liczba_osob,
                                telefon)"
    if (mysqli_query($conn, $sql)){
        echo "Dodano rezerwację do bazy";
    } else {
        echo "błąd: ".mysqli_error($conn)
    }
?>