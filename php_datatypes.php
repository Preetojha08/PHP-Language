<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Language</title>
</head>
<body>

    <?php

    echo"<br>Datatypes in PHP<br><br>";

    echo"1. String -> ";
    $var="This is String Variable: ";
    echo var_dump($var);
    echo "<br>";
    //String

    $var=89;
    echo"2. Integer -> ";
    echo"The 89 is : ";
    echo var_dump($var);
    echo "<br>";
    //Integer

    $var=9.90;
    echo"3. Float -> ";
    echo"The 9.90 is : ";
    echo var_dump($var);
    echo "<br>";
    //float

    $var=true;
    echo"4. Boolean -> ";
    echo"The true is : ";
    echo var_dump($var);
    echo "<br>";
    //boolean

    ?>
    
</body>
</html>