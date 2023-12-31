<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1 - Insecure Deserialization</title>
</head>
<body>
    <h1>Level 1</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="r">
  <input type="submit">
</form>

    <?php

    class PHPObjectInjection{
        public $inject;
        function __construct($inject){
$this->inject = $inject;
        }
        function __wakeup(){
            if(isset($this->inject)){
                eval($this->inject);
            }
        }
    }
    
    if(isset($_REQUEST['r']) &&  $_SERVER["REQUEST_METHOD"] == "POST"){
        $var1 = unserialize($_REQUEST['r']);

      /*  if(is_array($var1)){
            echo "<br/>" . $var1[0] . " - " .  $var1[1];
        }else{
            echo "";
        }
        */

    }
?>

<p>Source Code:</p>
    <?php
    echo highlight_string('
    <?php
    class PHPObjectInjection{
        public $inject;
        function __construct($inject){
$this->inject = $inject;
        }
        function __wakeup(){
            if(isset($this->inject)){
                eval($this->inject);
            }
        }
    }
    
    if(isset($_REQUEST["r"]) &&  $_SERVER["REQUEST_METHOD"] == "POST"){
        $var1 = unserialize($_REQUEST["r"]);

        if(is_array($var1)){
            echo "<br/>" . $var1[0] . " - " .  $var1[1];
        }else{
            echo "";
        }
    }
    ?>
    ');
    
    ?>
</body>
</html>