<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>
    <!-- <form action="action.php"> -->
    <form action="action.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        <?php
        
        function teste( int $var){
            echo $var;
        }
        
        teste("10");  // forcar a tipagem 
        
        ?>

    </form>
</body>

</html>