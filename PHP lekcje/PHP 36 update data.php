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
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
?>