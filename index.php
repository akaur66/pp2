<?php
/*
 * Amardip Kaur
 * Date: 4/17/2020
 * https://akaur.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <h1>Pair Program 2</h1>

    <?
        echo "<p>PHP Array Practice</p>";

        echo '<p>Step 2</p>';

        include("functions.php");

        $numbers = array(7, 9, 8, 9, 8, 8, 6);
        printArr($numbers);

        echo '<p>Step 3 - Moved  print function to functions.php</p>';

        echo '<p>Step 4</p>';
        largest($numbers);


    ?>
</body>
</html>