<?php
    include 'config.php';
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 
    // SELECT * FROM firstNames, lastNames
    $sql = "SELECT firstName, lastName FROM firstNames, lastNames ORDER BY RAND() LIMIT 1";
    
    $result = $connection->query($sql);
    
    $array = mysqli_fetch_array($result);
    
    mysqli_free_result($result);
    
    $connection->close();
    
    print ('here');
    // echo $story;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["firstName"] . " " . $row["lastName"] . "<br>";
        }
    } else {
        echo "0 results";
    }
?>