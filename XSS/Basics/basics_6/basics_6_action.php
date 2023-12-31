<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $userInput = $_POST['name'];
    $escapedInput = addslashes($userInput);
    // Store $escapedInput in the database
    echo $escapedInput;
    ?>

</body>
</html>