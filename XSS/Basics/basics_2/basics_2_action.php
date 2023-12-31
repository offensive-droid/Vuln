<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<p>Redirects to <?php echo 'https://' . str_replace("script","",$_POST['name']);?></p>
    <a href="https://<?php echo $_POST['name']?>.com">Link</a>
  
</body>
</html>
