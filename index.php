<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,700,700i" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container">
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
    
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Name: " . $row["firstName"] . " " . $row["lastName"] . "<br>";
                    }
                } else {
                    echo "0 results";
                }
                $connection->close();
            ?>
            
            <form>
                <fieldset>
                    <input type="radio" name="gender" value="female" id="radio--female" />
                    <label for="radio--female">Female</label>
                    <input type="radio" name="gender" value="male" id="radio--male" />
                    <label for="radio--male">Male</label>
                    <input type="radio" name="gender" value="neutral" id="radio--neutral" />
                    <label for="radio--neutral">Neutral</label>
                    <input type="radio" name="gender" value="either" id="radio--any" />
                    <label for="radio--any">Any</label>
                </fieldset>
                <button id="generator" class="generator-button">Click to generate</button>
            </form>
        </div>
    </body>
</html>