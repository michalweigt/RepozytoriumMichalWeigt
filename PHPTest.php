<?php
    $servername = "localhost";
    $username = "root"; // root
    $password = ""; // ""
    $database= "firma";

    // create connections
    $conn = mysqli_connect($servername, $username, $password);


    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connect successfully!";
?>

<?php
    $database= "firma";
    //Create database
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
?>

<?php
    if(mysqli_select_db($conn, $database)){
        echo "Database $database selected";
    } else {
        echo "Error select database: " . mysqli_error($conn);
    }
?>

<?php
    $sql = "CREATE TABLE Pracownicy (
    id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(30) NOT NULL,
    nazwisko VARCHAR(30) NOT NULL
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    };
?>

<?php
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];

    $sql = "INSERT INTO pracownicy (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
    echo $sql;
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else{
        echo "Error: " . $sql  . "<br>" . mysqli_error($conn);
    }
?>