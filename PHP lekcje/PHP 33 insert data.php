<?php
    $servername = "localhost";
    $username = "root"; // root
    $password = ""; // ""
    $database = "rzecz5ina";


    // create connections
    $conn = mysqli_connect($servername, $username, $password);


    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connect successfully!";
?>

<?php
    if(mysqli_select_db($conn, $database)){
        echo "Database $database selected";
    } else {
        echo "Error select database: " . mysqli_error($conn);
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