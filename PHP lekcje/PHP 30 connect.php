<?php
    $servername = "localhost";
    $username = "root"; // root
    $password = ""; // ""


    // create connections
    $conn = mysqli_connect($servername, $username, $password);


    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connect successfully!";
?>

<?php
    $database="rzecz5ina";
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
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) not null,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT
            CURRENT_TIMESTAMP ON UPDATE
        CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    };
?>

<?php
    // insert data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                        VALUES ('Jean', 'Okew', 'jean@example.com')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>

<?php
    // insert data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Arthur', 'Ben', 'Apt@example.com');";
    $sql .="INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Michael', 'Moke', 'Mok@example.com');";
    $sql .="INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Simeon', 'Got', 'gok@example.com');";


    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
