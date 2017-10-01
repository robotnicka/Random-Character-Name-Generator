<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,700,700i" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container">
            
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
            
            <p id="names-container"></p>
            
        </div>
    </body>
</html>