<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-snacks-b1</title>
    </head>
    <body>

        <h2>Snacks-b1</h2>

        <?php
            // VARS: GET info from query-string $_GET
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];

            // 1. name > 3 caratteri
            if(strlen($name) < 3) {
                echo "Accesso negato!";  
            
            // 2. email validator ("@", ".")
            } elseif (strpos ($email, '@') === false || strpos($email, '.') === false) {
                 echo "Accesso negato!"; 
            
            // 3. age "isNan"
            } elseif (is_numeric($age) === false) {
                echo "Accesso negato!"; 
            
            // Print succesful access
            } else {
                echo "Accesso eseguito"; 
            }
        ?>
        
    </body>
</html>