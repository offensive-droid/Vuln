
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Year?</title>
    <script></script>
</head>
<body>
    <h1>Level 6</h1>
    <form method="POST" action="basics_6_action.php">
        <input id="nameinput" name="name" type="text" placeholder="">
        <input type="submit">
    </form>

    <?php
    $userInput = "Hello, <script>alert('XSS')</script>";
    $escapedInput = addslashes($userInput);
    // Store $escapedInput in the database
    echo $escapedInput;
    ?>

</body>

</html>

