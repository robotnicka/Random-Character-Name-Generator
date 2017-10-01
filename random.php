<?php
    include 'config.php';

    // Connect
    $connect = mysqli_connect($servername, $username, $password, $dbname) or die("Some error occurred during connection " . mysqli_error($connect));  
    
    // Get result
    $result = mysqli_query($connect, "SELECT f.firstname, l.lastname FROM firstNames f, lastNames l ORDER BY rand() limit 1");
    
    $names = mysqli_fetch_assoc($result);
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
    echo $names['firstname'] . ' ' . $names['lastname'];
?>