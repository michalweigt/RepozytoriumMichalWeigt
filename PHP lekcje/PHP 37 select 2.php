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
//  select data - ver.2
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0){
        // output data of each row
        while($row = mysqli_fetch_row($result)){
            echo "id: ". $row[0]. " - Name: ". $row[1]. " ". $row[2]. "<br>";
        }
    } else {
        echo "0 results";
    }
?>