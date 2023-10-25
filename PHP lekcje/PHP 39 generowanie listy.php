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
    // select data - generowanie listy
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) >0 ){
        echo "<ul>";
        while($row = mysqli_fetch_row($result)){
            echo "<li>" . $row[0]. " " . $row[1]. " " . $row[2]. "</li>";
        }
        echo "</ul>";
    } else {
        echo "0 results";
    }
?>